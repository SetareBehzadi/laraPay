<?php

namespace App\Models;

use App\Presenters\Contracts\Presentable;
use App\Presenters\UserAccount\UserAccountPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use Presentable;

    const ACTIVE = 1;
    const INACTIVE = 0;

    protected $presenter = UserAccountPresenter::class;

    protected $primaryKey='user_account_id';

    protected $guarded=['user_account_id'];

    protected $fillable = [
        'user_account_status','user_account_number','user_account_sheba_number',
        'user_account_card_number'
    ];

    public static function getStatus()
    {
        return [
            self::ACTIVE => 'فعال',
            self::INACTIVE => 'غیر فعال'
        ];
    }

    public function owner()
    {
        return $this->belongsTo(User::class,'user_account_user_id');
    }

}
