@extends('layout')
@section('content')
<style>
    .job-list {
    margin-top: 20px;
}

.job-item {
    background-color: #f9f9f9;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
}

.job-title {
    color: #333;
    font-size: 24px;
    margin-bottom: 10px;
}

.job-details {
    margin-bottom: 15px;
}

.company, .category, .deadline {
    margin-bottom: 5px;
}

.btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
}

.btn:hover {
    background-color: #0056b3;
}

</style>
<div class="job-list">
@if($jobs->isEmpty())
        <p class="no-applications">You have not applied for any jobs yet. <a href="{{ route('jobs') }}">Browse available jobs</a> and apply now!</p>
   @else
   <div>
        @foreach($jobs as $job)
        <div class="job-item">
            <h2 class="job-title">{{$job->title}}</h2>
            <div class="job-details">
                <div class="company">
                    <strong>Company:</strong> {{$job->user->company->name ?? 'Unknown'}}
                    <!--company ra job sanga relation create gare xaina so hami user ko model hudai company ko relation garna parxa-->
                </div>
                <div class="category">
                    <strong>Category:</strong> {{$job->category->title}}
                        <!-- here we use category relation (category) is MODEL-->
                </div>
                <div class="deadline">
                    <strong>Apply Before:</strong> {{$job->deadline->format('jS M Y')}}
                </div>
            </div>
            <a href="{{route('application', $job->id)}}" class="btn">View Applications</a>
            @if(Auth::check() && Auth::user()->role == 2)
            <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-secondary">Edit</a>
            <form action="{{ route('delete_job', $job->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-secondary" onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
                
            </form>
            @endif
        </div>
    @endforeach
    </div>
    @endif

</div>
@endsection
