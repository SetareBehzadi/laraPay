@component('mail::message')
# User Registered

@component('mail::button', ['url' => 'http://larapay.exp/account'])
View Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent