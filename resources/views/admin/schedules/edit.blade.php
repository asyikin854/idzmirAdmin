<!-- resources/views/admin/schedules/edit.blade.php -->

@extends('layouts.simple.master-admin')
@section('title', 'Schedule Lists')

@section('css')
@endsection

@section('style')
@endsection



@section('breadcrumb-title')
    <h3>Schedules</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Therapy Schedules</li>
@endsection



@section('content')
<div class="container-fluid">
	<div class="row">
	  <div class="col-sm-12 col-xl-6">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header">
				<h5>Edit Schedules</h5><span>Using the <a href="#">card</a> component, you can extend the default collapse behavior to create an accordion.</span>
			  </div>
			  <div class="card-body">
   

                <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
                    @csrf
                    @method('PUT')
        <div class="form-group">
            <label for="child_name">Child Name</label>
            <input type="text" class="form-control" id="child_name" value="{{ $schedule->child_name }}" disabled>
        </div>

        <div class="form-group">
            <label for="session">Session</label>
            <input type="text" class="form-control" id="session" name="session" value="{{ $schedule->session }}">
        </div>

        <div class="form-group">
            <label for="therapist">Therapist</label>
            <input type="text" class="form-control" id="therapist" name="therapist" value="{{ $schedule->therapist }}">
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $schedule->date }}">
        </div>

        <div class="form-group">
            <label for="time">Time</label>
            <input type="time" class="form-control" id="time" name="time" value="{{ \Carbon\Carbon::parse($schedule->time)->format('H:i') }}">
        </div>
        

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $schedule->price }}">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="approved" {{ $schedule->status == 'approved' ? 'selected' : '' }}>Approved</option>
                <option value="pending" {{ $schedule->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="disapproved" {{ $schedule->status == 'disapproved' ? 'selected' : '' }}>Disapproved</option>
            </select>
        </div>

        <div class="form-group">
            <label for="remark">Remark</label>
            <textarea class="form-control" id="remark" name="remark">{{ $schedule->remark }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection
