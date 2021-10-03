<?php

namespace App\Service\Notification\Providers;

use App\Service\Notification\Contract\SendMethod;

class SmsProvider implements SendMethod
{

    public function send(array $args)
    {
      return true;
    }
}
