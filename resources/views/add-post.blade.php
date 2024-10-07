@extends('layout.main')
@section('title', 'Add Post')
@section('body')
<h2>Input Data</h2>
@if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
<div class="card">
    <div class="card-body">
        <form action="/save" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" class="form-control" name="title" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <textarea class="text" id="form-control" name="author" required></textarea>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="text" class="form-control" name="body" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary float-end">Submit</button>

        </form>
    </div>
</div>