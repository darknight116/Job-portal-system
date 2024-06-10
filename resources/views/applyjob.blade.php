@extends('layout')

@section('content')
<link rel="stylesheet" href="/css/applyjob.css">
<div class="application-form">
    <h1>Applying for {{ $job->title }}</h1>
    @if ($job->deadline < now()) {{-- Check if the deadline has passed --}}
    <p style="text-align: center;">The application deadline has passed. You cannot apply for this job.</p>
    @else
    <form method="post" action="{{ route('apply_job') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="job_id" value="{{ $job->id }}">

        <div class="form-group">
            <label for="cover_letter">Cover Letter:</label>
            <textarea name="cover_letter" id="cover_letter" required></textarea>
            @error('cover_letter')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="attachment">CV:</label>
            <input type="file" name="attachment" id="attachment" accept="application/pdf" required>
            @error('attachment')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="submit-button">Submit</button>
    </form>
    @endif
</div>

@endsection
