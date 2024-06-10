@extends('layout')
@section('content')
    <div class="container">
        <!-- <a href="{{route('create_company_form')}}">Create a company</a> -->
        @foreach($companies as $company)
            <div class="company">
                <h2>{{ $company->name }}</h2>
                <div class="jobs">
                    <ul>
                        @foreach($company->user->jobs as $job)
                            <li>{{ $job->title }}</li>
                        @endforeach
                    </ul>
                    <!-- @if(Auth::user()->role==1)
                    <a href="{{route('apply_job_form',$job->id)}}">Apply Now</a>
                    @endif -->
                </div>
            </div>
        @endforeach
    </div>
@endsection
