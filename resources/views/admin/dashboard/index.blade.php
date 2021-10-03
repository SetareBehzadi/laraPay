@extends('layouts.admin')
@section('title','مدیریت ')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>وضعیت در یک نگاه</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fas fa-dollar-sign f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-left">
                                    <h2>{{ $statistics->todayTransactions }}</h2>
                                    <p class="m-b-0">تراکنش های امروز</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-left">
                                    <h2>{{ $statistics->totalPending}}</h2>
                                    <p class="m-b-0">درگاه های در انتظار تایید</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-left">
                                    <h2>{{ $statistics->todayWithdrawal }}</h2>
                                    <p class="m-b-0">برداشت های امروز</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-left">
                                    <h2>{{ $statistics->totalGateways }}</h2>
                                    <p class="m-b-0">کل درگاه ها</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
