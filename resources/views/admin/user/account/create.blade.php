@extends('layouts.admin')
@section('title','ایجاد حساب بانکی جدید')
@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="col-xs-12 col-md-9 col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4>حساب های بانکی کاربران</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        @include('partials.errors')
                        @include('partials.success')
                        <div class="basic-form p-10">
                            <form method="post" action="{{ route('admin.users.accounts.store') }}"
                                  enctype="multipart/form-data">
                                @include('admin.user.account.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
      jQuery(document).ready(function($) {
        $('#owner').select2({
          theme: 'classic',
          placeholder: 'جستجوی کاربران ...',
          minimumInputLength: 3,
          ajax: {
            url: '/admin/users/search',
            dataType: 'json',
            data: function(params) {
              return {
                search: params.term,
              };
            },
            processResults: function(data) {

                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id,
                            /*email: item.email,
                            id: item.id*/
                        }
                    })
                };
            },
          },
        });
      });
    </script>
@endsection
