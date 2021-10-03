<?php

namespace App\Service\Notification;

use App\Service\Notification\Exceptions\NotFoundNotificationException;

class NotificationService
{

    public function send(array $args)
    {
        $provider = $args['type'];
        $providerHandler = $this->getProvider($provider);
        return $providerHandler->send($args);

    }

    private function getProvider(int $type)
    {
        $providerType = NotificationType::getTypeHandler($type);

        $providerClass = 'App\\Service\\Notification\\Providers\\'.ucfirst(strtolower($providerType)).'Provider';
        if (!class_exists($providerClass)){
            throw new NotFoundNotificationException('not found notification type');
        }

        $provider = new $providerClass;
        return $provider;
    }
}
