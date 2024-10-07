@extends('layout.main')
@section('title', 'Edit post')
@section('body')
<div class="card">
    <div class="card-body">
        <form method="POST" action="/update/{{ $Post->id_blog_post}}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value=" {{$Post->title}}">
            </div>
            <div class="mb-3">
                <label for="author" class="col-sm-1 form-label">Author </label>
                <input type="text" class="form-control" name="author" value="{{$Post->author}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="text" class="form-control" name="body" rows="3">{{$Post->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary float-end">Update</button>

        </form>
    </div> 
</div>