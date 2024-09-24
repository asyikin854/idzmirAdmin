@extends('layouts.simple.master-therapist')
@section('title', 'Student List')

@section('css')
    
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/calendar.css') }}">
@endsection

@section('breadcrumb-title')
    <h3>My students</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Student List</li>
@endsection

@section('content')
<div class="container-fluid basic_table">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <span>Click on the name of a student to view the student's details</span>
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
                          <th scope="col">Sex</th>
                          <th scope="col">Age</th>
                          <th scope="col">Package</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($childInfos as $childInfo)
                        <tr class="clickable-row" data-href="{{ route('stdDetails-therapist', $childInfo->id) }}">
                            <td scope="row">{{ $loop->iteration}} </td>
                            <td>{{ $childInfo->child_name}} </td>
                            <td>{{ $childInfo->child_sex}} </td>
                            <td>{{ $childInfo->child_age}}</td>
                            <td>{{ $childInfo->package}}</td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="4">There are no students assigned to you yet</td>
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

