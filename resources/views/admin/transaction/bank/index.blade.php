@extends('layouts.admin')
@section('title')تراکنش های بانک@endsection
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>تراکنش های بانک</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        @include('admin.transaction.bank.columns')
                        </thead>
                        <tbody>
                        @each('admin.transaction.bank.item',$transactions,'transaction')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection