<?php

namespace App\Http\Controllers\Admin\User;

use App\Events\User\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Service\Notification\Facade\Notification;
use App\Service\Notification\NotificationService;
use App\Service\Notification\NotificationType;
use App\Service\User\UserCreateService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $userRepositoryInterface ;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->userRepositoryInterface = $repository;

    }

    public function index(Request $request)
    {
        Notification::send([
            'type' => NotificationType::SMS
        ]);
       $users = $this->userRepositoryInterface->all();
        return view('admin.user.index',compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $userCreateService = new UserCreateService([  'name' => $request->name,
            'userEmail' => $request->userEmail,
            'userPassword' => $request->userPassword]);
        $userCreateResult = $userCreateService->perform();
        return redirect()->back()->with('success',$userCreateResult);

    }

    public function search(Request $request)
    {
        $results = $this->userRepositoryInterface->searchUsers($request->search);
        return response()->json($results);
    }
}
