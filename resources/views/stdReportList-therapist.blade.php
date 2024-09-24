@extends('layouts.simple.master-therapist')
@section('title', 'Student Report List')

@section('css')
    
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/calendar.css') }}">
@endsection

@section('breadcrumb-title')
    <h3>Pending Session Skills Update</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Session Skills Update</li>
@endsection

@section('content')
<div class="container-fluid basic_table">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <span>Click on the student name to fill the session skills report form</span>
              </div>
              <div class="card-block row">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                  <div class="table-responsive">
                    <table class="table">
                      <caption>List of student</caption>
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Name</th>
                          <th scope="col">Session No</th>
                          <th scope="col">Date & Time</th>
                          <th scope="col">Package</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($schedules as $schedule)
                        <tr class="clickable-row" data-href="{{ route('sessionReport-therapist', $schedule->id) }}">
                                <td>{{ $loop->iteration}} </td>
                                <td>{{ $schedule->childInfo->child_name }}</td>
                                <td>{{ $schedule->session }}</td>
                                <td>{{ $schedule->day }}, {{ $schedule->time }} </td>
                                <td>{{ $schedule->childInfo->package}} </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">There are no pending session skills update </td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div></div>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
          var rows = document.querySelectorAll('.clickable-row');
          rows.forEach(function (row) {
              row.addEventListener('click', function () {
                  window.location = this.dataset.href;
              });
          });
      });
  </script>
@endsection

