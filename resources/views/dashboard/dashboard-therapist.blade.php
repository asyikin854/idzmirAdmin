@extends('layouts.simple.master-therapist')
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
          <div class="col-sm-6">
            <div class="card">            
              <div class="card-body">
                <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">Hi {{ Auth::guard('therapist')->user()->name }}!<span> <img src="{{ asset('assets/images/dashboard-3/hand.svg') }}" alt="hand vector"></span></h4>
                <p>You can view your sessions in the Therapy Session</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card course-box"> 
              <div class="card-body"> 
                <div class="course-widget"> 
                  <div class="course-icon"> 
                    <svg class="fill-icon">
                      <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}"></use>
                    </svg>
                  </div>
                  <div> 
                    <h4 class="mb-0">{{ $totalChild}}</h4><span class="f-light">My Student</span><a class="btn btn-light f-light" href="{{ route('stdList-therapist')}}">View Student List<span class="ms-2"> 
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
                    <h4 class="mb-0">{{ $sessionLeft }}</h4><span class="f-light">Upcoming Sessions </span><a class="btn btn-light f-light" href="{{ route('therapist-session')}}">View Sessions<span class="ms-2"> 
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
                  <div class="course-icon primary"> 
                    <svg class="fill-icon">
                      <use href="{{ asset('assets/svg/icon-sprite.svg#course-1') }}"></use>
                    </svg>
                  </div>
                  <div> 
                    <h4 class="mb-0">{{ $sessionDone }} </h4><span class="f-light">Sessions Completed</span><a class="btn btn-light f-light" href="{{ route('stdReportList-therapist')}}">View Sessions Skills<span class="ms-2"> 
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
            <h5>Monthly Session Progress</h5><span class="f-14 f-w-500 f-light">Your current session progress for this month</span>
          </div>
          <div class="card-body pt-0">
            <div class="progress-chart-wrap">
              <div id="progresschart"></div>
            </div>
          </div>
        </div>
      </div>

    </div></div>
@endsection

@section('script')
<script>
  var sessionDone = {{ $sessionDone }};
  var sessionLeft = {{ $sessionLeft }};
  var sessionTotal = {{ $totalSchedule }}
</script>
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard-therapist.js') }}"></script>
@endsection
