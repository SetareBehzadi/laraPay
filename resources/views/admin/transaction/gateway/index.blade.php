@extends('layouts.admin')
@section('title')
    تراکنش های درگاه
@endsection
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>تراکنش های درگاه</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        @include('admin.transaction.gateway.columns')
                        </thead>
                        <tbody>
                        @each('admin.transaction.gateway.item',$transactions,'transaction')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection