    {{ csrf_field() }}
    <div class="form-group">
        <label for="plan_title">عنوان طرح :</label>
        <input id="plan_title" name="plan_title" type="text"
               class="form-control input-default hasPersianPlaceHolder"
               value="{{ old('plan_title') }}"
        >
    </div>
    <div class="form-group">
        <label for="plan_commission">کمیسیون</label>
        <input id="plan_commission" name="plan_commission" type="number"
               class="form-control input-default hasPersianPlaceHolder"
               value="{{ old('plan_commission') }}">
    </div>
    <div class="form-group">
        <label for="plan_withdrawal_rate">محدودیت درخواست</label>
        <input id="plan_withdrawal_rate" name="plan_withdrawal_rate" type="number"
               class="form-control input-default hasPersianPlaceHolder"
               value="{{ old('plan_withdrawal_rate') }}">
    </div>
    <div class="form-group">
        <label for="plan_withdrawal_max">سقف برداشت</label>
        <input id="plan_withdrawal_max" name="plan_withdrawal_max" type="number"
               class="form-control input-default hasPersianPlaceHolder"
               value="{{ old('plan_withdrawal_max') }}">
    </div>
    <div class="form-group m-t-20">
        <button type="submit" class="btn btn-primary m-b-10 m-l-5">ثبت اطلاعات
        </button>
    </div>
