<!-- resources/views/admin/parents/show.blade.php -->
@extends('layouts.simple.master-admin')


@section('css')

@section('breadcrumb-title')
    <h3>Parents Data and Child</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Parents and Child Lists</li>
@endsection




@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
    <h1>Parent Profile </h1>
    </div>
    <div class="card-body">
    <p><strong>Name:</strong> {{ $parent->username }}</p>
    <p><strong>Email:</strong> {{ $parent->email }}</p>
    <p><strong>Contact Number:</strong> {{ $parent->contact_number ?? 'N/A' }}</p>
    <p><strong>Created At:</strong> {{ $parent->created_at }}</p>
    </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
    
    </div>
    <div class="card-body">
    
    @if ($children->isEmpty())
        <p>No children associated with this parent.</p>
    @else
        @foreach ($children as $child)
        <div class="card">
        <div class="card-header">
        <h2><font color="orange">Children Details</font></h2>
</div>
            <div class="card-body">
                
                <h3>{{ $child->child_name }}</h3>
                <p><strong>Package:</strong> {{ $child->package }}</p>
                <p><strong>Birthdate:</strong> {{ $child->child_ic }}</p>
                <p><strong>Passport:</strong> {{ $child->child_passport }}</p>
                <p><strong>Date of Birth:</strong> {{ $child->child_dob }}</p>
                <p><strong>Race:</strong> {{ $child->child_race }}</p>
                <p><strong>Birthplace:</strong> {{ $child->child_bp }}</p>
                <p><strong>Religion:</strong> {{ $child->child_religion }}</p>
                <p><strong>Sex:</strong> {{ $child->child_sex }}</p>
                <p><strong>Address:</strong> {{ $child->child_address }}</p>
                <p><strong>Postcode:</strong> {{ $child->child_posscode }}</p>
                <p><strong>City:</strong> {{ $child->child_city }}</p>
                <p><strong>Country:</strong> {{ $child->child_country }}</p>
                <p><strong>Pediatricians:</strong> {{ $child->pediatricians }}</p>
                <p><strong>Recommend:</strong> {{ $child->recommend }}</p>
                <p><strong>Deadline:</strong> {{ $child->deadline }}</p>
                <p><strong>Diagnosis:</strong> {{ $child->diagnosis }}</p>
                <p><strong>OCC Therapy:</strong> {{ $child->occ_therapy }}</p>
                <p><strong>SP Therapy:</strong> {{ $child->sp_therapy }}</p>
                <p><strong>Others:</strong> {{ $child->others }}</p>
                <p><strong>House Income:</strong> {{ $child->house_income }}</p>
                <p><strong>Registered Date:</strong> {{ $child->created_at }}</p>
            </div>
        </div>
        @endforeach
    @endif
@endsection