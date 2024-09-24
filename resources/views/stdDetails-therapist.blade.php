@extends('layouts.simple.master-therapist')
@section('title', 'Student Details')

@section('css')
    
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/calendar.css') }}">
@endsection

@section('breadcrumb-title')
    <h3>Session Details</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Session Details</li>
@endsection

@section('content')
<div class="container-fluid basic_table">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-block row">
                <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <h3>Student Information</h3>
                      </div>
                      <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                          <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $childInfo->child_name }}</td>
                                    <th>Date of Birth, Age</th>
                                    <td>{{ $childInfo->child_dob }}, {{ $childInfo->child_age }}</td>
                                <tr><tr>
                                    <th>Sex</th>
                                    <td>{{ $childInfo->child_sex }}</td>
                                    <th>Religion</th>
                                    <td>{{ $childInfo->child_religion }}</td>
                                </tr><tr>
                                    <th>Nationality</th>
                                    <td>{{ $childInfo->child_nationality }}</td>
                                    <th>Race</th>
                                    <td>{{ $childInfo->child_race }}</td>
                                </tr><tr>
                                    <th>Birth Place</th>
                                    <td>{{ $childInfo->child_bp }}</td>
                                    <th>Package</th>
                                    <td>{{ $childInfo->package }}</td>
                                </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <h3>Intervention / Treatment History</h3>
                      </div>
                      <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                          <div class="table-responsive">
                            <table class="table table-lg">
                                @if($childInfo->pediatricians || $childInfo->recommend)
                                <tr>
                                    <th>Pediatricians</th>
                                    <td>{{ $childInfo->pediatricians ?? 'N/A' }}</td>
                                    <th>Recommended by Hospital/Clinic</th>
                                    <td>{{ $childInfo->recommend ?? 'N/A' }}</td>
                                </tr>
                                @endif
                                
                                @if($childInfo->deadline || $childInfo->diagnosis)
                                <tr>
                                    <th>Deadline Diagnose by Doctor</th>
                                    <td>{{ $childInfo->deadline ?? 'N/A' }}</td>
                                    <th>Diagnosis/Condition</th>
                                    <td>{{ $childInfo->diagnosis ?? 'N/A' }}</td>
                                </tr>
                                @endif
                                
                                @if($childInfo->occ_therapy || $childInfo->sp_therapy || $childInfo->others)
                                <tr>
                                    <th>Others Unit Involved</th>
                                    <td colspan="3">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Unit</th>
                                                <th>Occupational Therapy</th>
                                                <th>Speech Therapy</th>
                                                <th>Others</th>
                                            </tr>
                                            <tr>
                                                <th>Place</th>
                                                <td>{{ $childInfo->occ_therapy ?? 'N/A' }}</td>
                                                <td>{{ $childInfo->sp_therapy ?? 'N/A' }}</td>
                                                <td>{{ $childInfo->others ?? 'N/A' }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                @else
                                <p>     There are no Intervention or Treatment history</p>
                                @endif
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <h3>Student Schedule</h3>
                      </div>
                      <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                          <div class="table-responsive">
                            <table class="table table-lg">
                              <thead>
                                <tr>
                                    <th scope="col">Session</th>
                                    <th scope="col">Date</th>
                                  <th scope="col">Time</th>
                                  <th scope="col">Attendance</th>
                                </tr>
                              </thead>
                              <tbody>
                                @forelse ($childInfo->childSchedule as $childSchedule)
                                <tr>
                                    <td>Monthly Session {{ $childSchedule->session }}</td>
                                    <td>{{ $childSchedule->date }}</td>
                                    <td>{{ $childSchedule->time }}</td>
                                    <td>{{ $childSchedule->attendance ?? 'N/A' }} </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No schedules found for this child.</td>
                                </tr>
                            @endforelse
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('stdList-therapist')}}"><button class="btn btn-primary">Return</button></a>
                  </div>
              </div>
            </div>
          </div>
    </div></div>
@endsection

