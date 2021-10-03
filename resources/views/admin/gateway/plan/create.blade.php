@extends('layouts.admin')
@section('title')
    ایجاد حساب بانکی جدید
@endsection
@section('content')
    <div class="col-xs-12 col-md-9 col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4>ایجاد طرح جدید</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="basic-form p-10">
                            @include('partials.errors')
                            @include('partials.success')
                            <form method="post" action="{{ route('admin.gateways.plans.store') }}" enctype="multipart/form-data">
                                @include('admin.gateway.plan.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
