@extends('layouts.admin')
@section('title','ثبت درخواست جدید')
@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="col-xs-12 col-md-9 col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4>ثبت درخواست جدید</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        @include('partials.errors')
                        @include('partials.success')
                        <div class="basic-form p-10">
                            <form method="post" action="{{ route('admin.withdrawals.store') }}"
                                  enctype="multipart/form-data">
                                @include('admin.withdrawal.form')
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
        jQuery(document).ready(function ($) {
            $('#gateway').select2({
                theme: 'classic',
                placeholder: 'جستجوی درگاه ها ...',
                minimumInputLength: 3,
                ajax: {
                    url: '/admin/gateways/search',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            search: params.term,
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data.items,
                        };
                    },
                },
            });
            $('#gateway').on('change', function (e) {

                let currentGateway = $(this).val();
                $('#account').html('');
                $.ajax({
                    type:'GET',
                    url:'{{ route('admin.users.accounts.search') }}',
                    dataType:'json',
                    data:{
                        gateway:currentGateway
                    },
                    success:function(response){
                        let items = response.items;
                       items.forEach(function(item){
                            $('#account').append('<option value="'+item.id+'">'+item.text+'</option>');
                       });
                    },
                    error:function(error){}
                });
            });
        });
    </script>
@endsection
