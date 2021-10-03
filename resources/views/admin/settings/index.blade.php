@extends('layouts.admin')
@section('title')تنظیمات برنامه@endsection
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>تنظیمات برنامه</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        @include('admin.settings.columns')
                        </thead>
                        <tbody>
                        @each('admin.settings.item',$settings,'setting')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection