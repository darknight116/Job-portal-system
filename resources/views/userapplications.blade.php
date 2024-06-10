@extends('layout')
@section('content')
<style>
 /* Resetting default margins and paddings */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Global styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

section {
    padding: 20px;
}

.header {
    font-size: 24px;
    margin-bottom: 20px;
}

.application-list {
    margin-bottom: 20px;
}

.application-item {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 20px;
}

.application-details div {
    margin-bottom: 10px;
}

.attachment-file {
    font-style: italic;
}

.back-links a {
    display: inline-block;
    padding: 10px 20px;
    margin-right: 10px;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #007bff;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
}

.back-links a:hover {
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
}

</style>
<section>
<h1 class="header">Application List</h1>
<div class="application-list">
    @forelse($applications as $application)
        <div class="application-item">
            <div class="application-details">
                <div>Name: {{ $application->user->name }}</div>
                <div>Email: {{ $application->user->email }}</div>
                <div>Address: {{ $application->user->address }}</div>
                <div>Phone: {{ $application->user->phone }}</div>

                <div>
                    Attachment: <span class="attachment-file">{{ $application->attachment }}</span>
                </div>

                <div>Cover letter: {{ $application->cover_letter }}</div>
                <div>Application date: {{ $application->created_at->format('jS M Y') }}</div>
            </div>
        </div>
    @empty
        <div>No results to show!</div>
    @endforelse
</div>

<div class="back-links">
    <a href="{{ route('jobs') }}">Back to Job List</a>
    <a href="{{ route('userpanel') }}">Back to Dashboard</a>
</div>
</section>
@endsection