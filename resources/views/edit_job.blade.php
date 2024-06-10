@extends('layout')
@section('content')
<style>
    /* job-edit.css */

form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
textarea,
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

</style>
<h1>Edit Job</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('jobs.update', $job->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $job->title) }}">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="descripton" id="descripton" class="form-control">{{ old('descripton', $job->descripton) }}</textarea>
    </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $job->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->title }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="deadline">Deadline</label>
        <input type="date" name="deadline" id="deadline" class="form-control" value="{{ old('deadline', $job->deadline->format('Y-m-d')) }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection