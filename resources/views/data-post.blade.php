@section('body')
@if(session('success'))
<h2>Input Data</h2>
    @if(session('success'))
         <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-hover table-bordered">
    <thead class="table-dark">
        <tr>
            <th scope="col" class="col-1">No</th>
            <th scope="col" class="col-md-auto">Title</th>
            <th scope="col" class="col-6">Author</th>
            <th scope="col" class="col-md-auto">Content</th>
            <th scope="col" class="col-1">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp

        @foreach ($Posts as $post)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->author }}</td>
            <td>{{ $post->body }}</td>

            <a href="/edit/{{ $post->id_blog_post}}" class="btn btn-outline-success ">Edit <i class="bi bi-pencil-square"></i></a>
            <a href="/delete/{{ $post->id_blog_post"></a>               
        </tr>
        @endforeach
    </tbody>       
    </table>
    @endif
@endsection