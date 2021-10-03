{{ csrf_field() }}
<div class="form-group">
    <label for="setting_key">عنوان</label>
    <input id="setting_key" name="setting_key" type="text"
           class="form-control input-default hasPersianPlaceHolder"
           value="{{ old('setting_key') }}"
    >
</div>
<div class="form-group">
    <label for="setting_value">مقدار</label>
    <textarea
            rows="10"
            id="setting_value"
            name="setting_value"
            class="form-control input-default"
    >{{ old('setting_value') }}</textarea>
</div>
<div class="form-group m-t-20">
    <button type="submit" class="btn btn-primary m-b-10 m-l-5">ثبت اطلاعات
    </button>
</div>