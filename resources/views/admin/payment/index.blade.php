@extends('layouts.admin')
@section('title')لیست پرداختی ها@endsection
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>لیست پرداختی ها</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        @include('admin.payment.columns')
                        </thead>
                        <tbody>
                        @each('admin.payment.item',$payments,'payment')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection