<?php

namespace App\Service\User;

use App\Events\User\UserRegistered;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Service\Notification\Facade\Notification;
use App\Service\Notification\NotificationType;

class UserCreateService
{
    /**
     * @var array $userData
     */
    private $userData;
    private $userRepository;


    public function __construct(array $userData)
    {

        $this->userData = $userData;
        $this->userRepository = resolve(UserRepositoryInterface::class);
    }

    public function perform()
    {
        $newUser = $this->userRepository->store([
            'name' => $this->userData['name'],
            'email' => $this->userData['userEmail'],
            'password' => $this->userData['userPassword']
        ]);
        if (intval($newUser->id)) {
            event(new UserRegistered($newUser));
            Notification::send([
                'type' => NotificationType::SMS,
                'message' => [
                    'to' => '09123438727',
                    'text' => 'سلام ثبت نام شما انجام شد.'
                ]
            ]);
            return true;
        }
        return false;

    }
}
