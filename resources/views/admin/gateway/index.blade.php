@extends('layouts.admin')
@section('title') لیست درگاه ها @endsection
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>لیست درگاه ها</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            @include('admin.gateway.columns')
                        </thead>
                        <tbody>
                            @each('admin.gateway.item',$gateways,'gateway')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection