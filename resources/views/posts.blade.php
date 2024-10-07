@extends('layout.main')

@section('container')
<article class="mb-5">
    <h1>Blog Posts</h1>
    @if(session('add'))
    <div class="alert alert-info" role="alert">
        {{ session('add') }}
    </div>
    @elseif(session('update'))
    <div class="alert alert-success" role="alert">
        {{ session('update') }}
    </div>
    @elseif(session('delete'))
    <div class="alert alert-danger" role="alert">
        {{ session('delete') }}
    </div>
    @endif
    @foreach ($posts as $posts)
    <h3>
        <a href="/posts/{{ $posts['id_blog_post']}}">{{ $posts['title']}}</a>
    </h3>
    <h5>by: {{ $posts["author"] }}</h5>
    <p>{{ $posts["body"]}}</p>
    @endforeach
    <a href="/add">Tambah Post</a>
</article>
@endsection