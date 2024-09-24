@extends('layouts.simple.master-therapist')
@section('title', 'Session Details')

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
                        <h3>Attendance Update</h3><span><b>{{ $date }}</b> at <b>{{ $time }}</b></span>
                      </div>
                      <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                          <div class="table-responsive">
                            <table class="table table-lg">
                              <thead>
                                <tr>
                                    <th scope="col">Session</th>
                                    <th scope="col">Child Name</th>
                                  <th scope="col">Package</th>
                                  <th scope="col">Attendance</th>
                                  <th scope="col">Remark</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($schedules as $schedule)
                                <tr>
                                    <td>{{ $schedule->session }}	</td>
                                    <td>{{ $schedule->childInfo->child_name }}    </td>
                                  <td>{{ $schedule->childInfo->package }}	</td>
                                  <form action="{{ route('therapist.stdAttendance', $schedule->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <td><select name="attendance" id="attendance" class="form-select">
                                        <option value="select one" selected disabled>select one</option>
                                        <option value="present" {{ $schedule->attendance == 'present' ? 'selected' : '' }}>present</option>
                                        <option value="absent" {{ $schedule->attendance == 'absent' ? 'selected' : '' }}>absent</option>
                                    </select></td>
                                    <td><textarea name="remark" id="remark" cols="30" rows="2" class="form-control">{{ $schedule->remark}} </textarea></td>
                                    <td><button type="submit" class="btn btn-primary">Update</button></td>
                                </form>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
    </div></div>
@endsection

