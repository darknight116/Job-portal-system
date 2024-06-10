@extends('layout')
@section('content')
<link rel="stylesheet" href="css/userpanel.css">
<div class="container">
    <div class="dashboard">
        <div class="sidebar">
            <h2>Dashboard Menu</h2>
            <ul>
                <li><a href="{{route('profile.edit')}}">My Profile</a></li>
                @if(Auth::check() && Auth::user()->role==2)
                <li><a href="{{route('my_company_jobs')}}">My Jobs</a></li>
                @elseif(Auth::check() && Auth::user()->role==1)
                <li><a href="/my-jobs">Applied Jobs</a></li>
                @endif   
            </ul>
             <!-- Display user counts -->
             @if(Auth::user()->role == 3)
             <div><a href="{{ route('userdetails', ['user_id' => Auth::id()]) }}">Normal Users: {{ $normalUserCount }}</a></div>
             <div><a href="{{ route('companyuserdetails', ['user_id' => Auth::id()]) }}">Company Users: {{ $companyUserCount }}</a></div>
            @endif
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Welcome {{ Auth::user()->name }}</h1>
                <p>{{ Auth::user()->role == 1 ? 'Normal User' : (Auth::user()->role == 2 ? 'Company User' : 'Super Admin') }}</p>    
            </div>
            
            <div class="profile">
            @if(Auth::user()->role==3)
                <img src="../photo/superadmin.jpg" alt="Profile Picture">
                @elseif(Auth::user()->role==2)
                <img src="../photo/admin.jpg" alt="">
                @else
                <img src="../photo/user.jpg" alt="">
                @endif
                <!-- <div>{{ Auth::user()->name }}</div>
                <p>Web Developer</p> -->
            </div>
            <div class="profile">
                <div class="container">
                  <div>
                    <p>Name: {{ Auth::user()->name }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
                    <p>Address: {{ Auth::user()->address }}</p>
                    <p>Phone: {{ Auth::user()->phone }}</p>
                  </div>
                </div>
            </div>
            <div class="logout">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
