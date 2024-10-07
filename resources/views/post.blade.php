@extends('layout.main');
@section('container')
<article>
    <h2>{{$post["title"]}}</h2>
    <h5>{{$post["author"]}}</h5>
    <p>{{$post["body"]}}</p>

</article>
<a href="/blog">Back To Posts</a> ||
<a href="/edit/{{$post['id_blog_post']}}">Edit</a> ||
<form action="/delete/{{$post['id_blog_post']}}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    {{-- <button type="submit">Hapus</button> --}}
    <button type="submit" class="btn btn-danger btn-sm"
            onclick="return confirm('are you sure you want to delete this post')">
        Delete
    </button>
</form>
</form>
@endsection  