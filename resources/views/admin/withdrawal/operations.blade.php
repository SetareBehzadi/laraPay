<a class="btn btn-success btn-xs" href="{{ route('admin.withdrawals.approve',[$withdrawal->withdrawal_id]) }}">تایید</a>
<a class="btn btn-danger btn-xs"
   href="{{ route('admin.withdrawals.reject',[$withdrawal->withdrawal_id]) }}">رد</a>
