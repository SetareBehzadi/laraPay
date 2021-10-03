<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\UserAccount;
use App\Repositories\Contracts\UserAccountRepository;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    protected $user_account_repository;

    /**
     * @param $user_account_repository
     */
    public function __construct(UserAccountRepository $user_account_repository)
    {
        $this->user_account_repository = $user_account_repository;
    }

    public function index()
    {
        $userAccounts = $this->user_account_repository->all(null,['owner']);

        return view('admin.user.account.index',compact('userAccounts'));
    }

    public function create(Request $request)
    {
        $statuses = UserAccount::getStatus();
        $userAccountItem = null;
        return view('admin.user.account.create',compact('userAccountItem','statuses'));
    }

    public function store(Request $request)
    {
        $newUserAccount = $this->user_account_repository->store([
            'user_account_user_id' => $request->owner,
            'user_account_title' => $request->title,
            'user_account_card_number' => $request->account_card,
            'user_account_sheba_number' => $request->account_sheba,
            'user_account_number' => $request->account_number,
            'user_account_status' => $request->account_status,
        ]);

        if ($newUserAccount){
            return back()->with('success','حساب جدید با موفقیت اضافه شد.');
        }
    }
}
