@extends('layout')

@section('content')

<link rel="stylesheet" href="css/jobs.css">
<h2>Job List</h2>

@if(Auth::check() && Auth::user()->role == 2)<!--check if user is logged in and is an Admin to display the link -->
<a href="{{route('add_jobs')}}" class="button">Post a Job</a>
@endif

<form action="{{route('jobs')}}" method="get">
    <label for="category">Category</label>
    <select name="category" id="category">
        <option value="0">None</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
    </select>
    <button type="submit">Go</button>

    <label for="search">Search Job:</label>
    <input type="text" name="search" id="search">
    <button type="submit">Go</button>
</form>
<div class="job-listings">
@foreach($jobs as $job)
    <div class="job-box">
        <h2>{{$job->title}}</h2>
        @if($job->user && $job->user->company)
            <div>Company: {{$job->user->company->name}}</div>
        @else
            <div>Company: Unknown</div>
        @endif

        <div>Category: {{$job->category->title}}</div>
        <div>
            @if($job->deadline > now())    
                Apply Before: {{$job->deadline->format('jS M Y')}}
            @else
               Apply Before: Expire
            @endif
        </div>
        
        @if($job->application->contains('user_id', auth()->id()))
            <div class="applied-message">You have already Applied</div>
        @elseif(Auth::check() && (Auth::user()->role==1 || Auth::user()->id == $job->user_id))
            <a href="{{route('show_job', $job->id)}}" class="button-link">View More</a>
        @endif 
    </div>
@endforeach

</div>

{{$jobs->links('vendor.pagination.simple-bootstrap-5')}}

@endsection
