@extends('layout')
@section('content')
<link rel="stylesheet" href="css\editprofile.css">
<div class="container">
    <div class="profile-section">
        <h2 class="profile-heading">{{ __('Profile') }}</h2>
        <div class="profile-content">
            <div class="profile-form">
                <div class="form-section">
                    <h3 class="form-heading">{{ __('Update Profile Information') }}</h3>
                    @include('profile.partials.update-profile-information-form')
                </div>
                <div class="form-section">
                    <h3 class="form-heading">{{ __('Update Password') }}</h3>
                    @include('profile.partials.update-password-form')
                </div>
                <div class="form-section">
                    <h3 class="form-heading">{{ __('Delete User') }}</h3>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
