<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
    <title>@yield('title') | LaraPay</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--@if(is_rtl())
        <link href="/css/admin.rtl.min.css" rel="stylesheet"> --}}
    {{--@else--}}
        <link href="/css/admin.min.css" rel="stylesheet">
   {{-- @endif--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    @yield('styles')
</head>
<body>
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">
    <!-- header header  -->
@include('partials.top_header')
<!-- End header header -->
@include('partials.sidebar')
<!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">خانه</a></li>
                    <li class="breadcrumb-item ">پیشخوان</li>
                    <li class="breadcrumb-item active">آمار</li>
                </ol>
            </div>
            <!--<div class="col-md-5 align-self-center">-->
            <!--<h3 class="text-primary">پیشخوان</h3>-->
            <!--</div>-->
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                @yield('content')
                {{--<button>{{ __('Send Data') }}</button>--}}
            </div>
            <!-- /# row -->
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->

<script src="/js/vendors/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="/js/admin.min.js"></script>
<script src="/js/rt.min.js"></script>
@yield('scripts')
</body>
</html>
