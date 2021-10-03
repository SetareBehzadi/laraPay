@extends('layouts.admin')
@section('title')
    لیست طرح ها
    @endsection
@section('content')
    <div class="col-lg-12 col-xs-12 col-md-9">
        <div class="card">
            <div class="card-title">
                <h4>طرح ها</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            @include('admin.gateway.plan.columns')
                        </thead>
                        <tbody>
                            @each('admin.gateway.plan.item',$plans,'plan')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection