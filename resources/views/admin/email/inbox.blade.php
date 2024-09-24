@extends('layouts.simple.master-admin')
@section('title', ' Inbox')

@section('css')
@endsection


@section('style')
@endsection



@section('breadcrumb-title')
    <h3>Announcement/Inbox</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Announcement</li>
@endsection



@section('content')
<div class="container">
    <h1>Inbox</h1>

    @if($messages->isEmpty())
        <p>No messages.</p>
    @else
        <ul>
            @foreach($messages as $message)
                <li>
                    <strong>{{ $message->subject }}</strong><br>
                    <p>{{ $message->message }}</p>
                    <small>Received: {{ $message->created_at }}</small>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
