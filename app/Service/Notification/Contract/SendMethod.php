<?php

namespace App\Service\Notification\Contract;

interface SendMethod
{
    public function send(array $args);
}
