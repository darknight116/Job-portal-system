@extends('layout')

@section('content')
<link rel="stylesheet" href="/css/singlejob.css">
<div class="job-details">
    <h2>{{$job->title}}</h2>

    <!-- Display job photo if available -->
    @if($job->photo)
    <img src="\uploads\{{$job->photo}}" alt="Job Photo" height="200">
    @endif

    <div class="job-info">
        <div><strong>Category:</strong> {{$job->category->title}}</div>
        <div><strong>Company:</strong> {{$job->user->company->name}}</div>
        <div><strong>Company Address:</strong> {{$job->user->company->address}}</div>
        <div><strong>Company Profile:</strong> {{$job->user->company->profile}}</div>
        <div><strong>Type:</strong> {{$job->type}}</div>
        <div><strong>Salary:</strong> {{$job->salary}}</div>
        <div><strong>Description:</strong> {{$job->descripton}}</div>
        <div><strong>Apply Before:</strong> {{$job->deadline->format('jS M Y')}}</div>
    </div>

    <!-- Apply and Back buttons -->
    <div class="buttons">
        @if(Auth::user()->role!=3)
        <a href="{{route('apply_job_form',$job->id)}}" class="button">Apply Now</a>
        @endif
        <a href="{{route('jobs')}}" class="button">Back To Job List</a>
    </div>
</div>

@endsection
