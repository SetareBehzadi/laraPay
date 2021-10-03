@extends('layouts.admin')
@section('title','تایید درخواست')
@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="col-xs-12 col-md-9 col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4>تایید درخواست</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        @include('partials.errors')
                        @include('partials.success')
                        <div class="basic-form p-10">
                            <form method="post" action="{{ route('admin.withdrawals.approve.save',[$withdrawalItem->withdrawal_id]) }}"
                                  enctype="multipart/form-data">
                                @include('admin.withdrawal.approve_form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
