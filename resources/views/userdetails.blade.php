@extends('layout')

@section('content')
<link rel="stylesheet" href="/css/userdetails.css">
    <h2>Normal Users</h2>
    <div class="table-container">
    <table class="user-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($normalUsers as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>Normal User</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
