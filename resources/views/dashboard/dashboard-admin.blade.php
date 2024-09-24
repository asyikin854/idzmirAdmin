@extends('layouts.simple.sidebar-admin')
@section('title', 'Ecommerce')

@section('css')
    
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css') }}">
@endsection

@section('breadcrumb-title')
<h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-xxl-5 col-ed-6 col-xl-8 box-col-7">
        <div class="row">
          <div class="col-sm-12">
            <div class="card o-hidden welcome-card">            
              <div class="card-body">
                <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">{{$parentAccount->username}}<span> <img src="{{ asset('assets/images/dashboard-3/hand.svg') }}" alt="hand vector"></span></h4>
                <p>Hope you have a wonderful day.</p>
              </div><img class="welcome-img" src="{{ asset('assets/images/dashboard-3/widget.svg') }}" alt="search image">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card course-box"> 
              <div class="card-body"> 
                <div class="course-widget"> 
                  <div class="course-icon"> 
                    <svg class="fill-icon">
                      <use href="{{ asset('assets/svg/icon-sprite.svg#course-1') }}"></use>
                    </svg>
                  </div>
                  <div> 
                    <h4 class="mb-0">{{ $sessionPresent }} </h4><span class="f-light">Completed Sessions</span><a class="btn btn-light f-light" href="{{ route('learning-list-view')}}">View skills update<span class="ms-2"> 
                        <svg class="fill-icon f-light">
                          <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}"></use>
                        </svg></span></a>
                  </div>
                </div>
              </div>
              <ul class="square-group">
                <li class="square-1 warning"></li>
                <li class="square-1 primary"></li>
                <li class="square-2 warning1"></li>
                <li class="square-3 danger"></li>
                <li class="square-4 light"></li>
                <li class="square-5 warning"></li>
                <li class="square-6 success"></li>
                <li class="square-7 success"></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card course-box"> 
              <div class="card-body"> 
                <div class="course-widget"> 
                  <div class="course-icon warning"> 
                    <svg class="fill-icon">
                      <use href="{{ asset('assets/svg/icon-sprite.svg#course-2') }}"></use>
                    </svg>
                  </div>
                  <div> 
                    <h4 class="mb-0">{{ $sessionLeft }} </h4><span class="f-light">Upcoming Sessions </span><a class="btn btn-light f-light" href="{{ route('learning-list-view')}}">View Schedule<span class="ms-2"> 
                        <svg class="fill-icon f-light">
                          <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}"></use>
                        </svg></span></a>
                  </div>
                </div>
              </div>
              <ul class="square-group">
                <li class="square-1 warning"></li>
                <li class="square-1 primary"></li>
                <li class="square-2 warning1"></li>
                <li class="square-3 danger"></li>
                <li class="square-4 light"></li>
                <li class="square-5 warning"></li>
                <li class="square-6 success"></li>
                <li class="square-7 success"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-2 col-ed-3 col-xl-4 col-sm-6 box-col-5">
        <div class="card get-card">
          <div class="card-header card-no-border">
            <h5>Monthly Session Progress</h5><span class="f-14 f-w-500 f-light">Your monthly session is almost done!</span>
          </div>
          <div class="card-body pt-0">
            <div class="progress-chart-wrap">
              <div id="progresschart"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-ed-3 d-xxl-block d-sm-none box-col-none">
        <div class="card get-card overflow-hidden"> 
          <div class="card-header card-no-border">
            <h5>Do You Want to Get</h5><span class="f-14 f-w-500 f-light">Better Results?</span><a class="btn btn-primary btn-hover-effect" href="#">More details<span class="ms-1"> 
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}"></use>
                </svg></span></a>
          </div>
          <div class="card-body pt-0">
            <div class="get-image text-center"> <img class="img-fluid" src="{{ asset('assets/images/dashboard-3/better.png') }}" alt="leptop with men vector"></div>
          </div>
          <ul class="square-group">
            <li class="square-1 warning"></li>
            <li class="square-1 primary"></li>
            <li class="square-2 warning1"></li>
            <li class="square-3 danger"></li>
            <li class="square-4 light"></li>
            <li class="square-5 warning"></li>
            <li class="square-6 success"></li>
            <li class="square-7 success"></li>
          </ul>
        </div>
      </div>
      <div class="col-xxl-5 col-ed-7 col-xl-7 box-col-7">
        <div class="card"> 
          <div class="card-header card-no-border">
            <div class="header-top">
              <h5 class="m-0">Learning Overview<span class="f-14 f-w-500 ms-1 f-light">(75% activity growth)</span></h5>
              <div class="card-header-right-icon">
                <div class="dropdown icon-dropdown">
                  <button class="btn dropdown-toggle" id="learningButton" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="learningButton"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body pt-0"> 
            <div class="learning-wrap"> 
              <div id="learning-chart"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-ed-5 col-xl-5 col-sm-6 box-col-5">
        <div class="card schedule-card">
          <div class="card-header card-no-border">
            <div class="header-top">
              <h5 class="m-0">Upcoming Schedule</h5>
              
            </div>
          </div>
          <div class="card-body pt-0"> 
            <ul class="schedule-list"> 
              <li class="primary"><img src="{{ asset('assets/images/dashboard/user/4.jpg') }}" alt="profile">
                <div> 
                  <h6 class="mb-1">Session 1</h6>
                  <ul>
                    <li class="f-light">
                      <svg class="fill-icon f-light">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#bag') }}"></use>
                      </svg><span>January 3, 2022</span>
                    </li>
                    <li class="f-light">
                      <svg class="fill-icon f-success">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}"></use>
                      </svg><span> 09.00 - 12.00 AM</span>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="warning"><img src="{{ asset('assets/images/dashboard/user/2.jpg') }}" alt="profile">
                <div> 
                  <h6 class="mb-1">Session 2</h6>
                  <ul>
                    <li class="f-light">
                      <svg class="fill-icon f-light">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#bag') }}"></use>
                      </svg><span>Febuary 10, 2022</span>
                    </li>
                    <li class="f-light">
                      <svg class="fill-icon f-success">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}"></use>
                      </svg><span> 11.00 - 1.00 PM</span>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
@endsection

@section('script')
<script>
  var sessionPresent = {{ $sessionPresent }};
  var sessionLeft = {{ $sessionLeft }};
  var sessionTotal = {{ $package->session_quantity }}
</script>
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_3.js') }}"></script>
@endsection
