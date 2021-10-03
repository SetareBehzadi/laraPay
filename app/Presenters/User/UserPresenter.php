<?php
namespace App\Presenters\User;

use App\Presenters\Contracts\Presenter;

class UserPresenter extends Presenter
{

    public function status()
    {
        if ($this->entity->status == 0){
            return "غیر فعال";
        }
        return 'فعال';
    }

}
