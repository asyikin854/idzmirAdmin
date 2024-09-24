<!-- resources/views/admin/parents/index.blade.php -->
@extends('layouts.simple.master-admin')
@section('title', 'Bootstrap Basic Tables')

@section('css')
@endsection

@section('style')
@endsection

@section('css')

@section('breadcrumb-title')
    <h3>Parents Lists</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Parents Lists</li>
@endsection


@section('content')

<div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <span>A <code>&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</span>
                  </div>
                  <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                      <div class="table-responsive">
                        <table class="table">
                          <caption>List of users</caption>
                          <thead>
                            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($parents as $parent)
            <tr>
                <td>{{ $parent->username }}</td>
                <td>{{ $parent->email }}</td>
                <td>{{ $parent->created_at }}</td>
                <td>
                    <!-- Example of an action -->
                    <a href="{{ route('admin.parents.show', $parent->id) }}" class="btn btn-info">View Profile</a>
                </td>
            </tr>
            @endforeach
            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
@endsection
