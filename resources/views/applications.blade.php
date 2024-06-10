@extends('layout')
@section('content')
<link rel="stylesheet" href="/css/applications.css">
<div class="container job-applications">
    <h1 class="page-title">My Job Applications</h1>
    @if($applications->isEmpty())
        <p class="no-applications">You have not applied for any jobs yet. <a href="{{ route('jobs') }}">Browse available jobs</a> and apply now!</p>
    @else 
        <ul class="application-list">
            @foreach($applications as $application)
                <div class="application-item">
                    <!-- <strong>Company:</strong> {{ optional($application->job->company)->name }}<br> -->
                    <strong class="job-title">Job Title:</strong> {{ $application->job->title }}<br>
                    <strong class="applied-date">Applied Date:</strong> {{ $application->created_at->format('Y-m-d') }}<br>
                    <strong class="status">Status:</strong> {{ $application->status }}
                </div>
            @endforeach
        </ul>
    @endif
</div>
@endsection
