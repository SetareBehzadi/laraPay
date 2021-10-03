<?php

namespace App\Presenters\UserAccount;

use App\Helper\Format\Number;
use App\Models\UserAccount;
use App\Presenters\Contracts\Presenter;
use Illuminate\Support\Facades\Lang;

class UserAccountPresenter extends Presenter
{
    public function adminStatus()
    {
        switch ($this->entity->user_account_status){
            case UserAccount::ACTIVE :
                return '<span class="badge badge-success">فعال</span>';
                break;
            case UserAccount::INACTIVE :
                return '<span class="badge badge-success">غیرفعال</span>';
                break;
            default:
                return '<span class="badge badge-dark">نامشخص</span>';
                break;
        }
    }

    public function accountNumber()
    {
        return Number::persianNumbers($this->entity->user_account_number);
    }

    public function shebaNumber()
    {
        return Number::persianNumbers($this->entity->user_account_sheba_number);
    }

    public function cardNumber()
    {
        $number = str_split((string)$this->entity->user_account_card_number,4);
        return Number::persianNumbers(implode('-',$number));
    }

}
