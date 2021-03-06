<?php

namespace App\Service\Notification\Facade;

use Illuminate\Support\Facades\Facade;

class Notification extends Facade
{

    public static function getFacadeAccessor()
    {
        return 'notification';
    }

}
