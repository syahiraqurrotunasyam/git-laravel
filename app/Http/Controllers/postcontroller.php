<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "posts" => post::all()


        ]);
    }
    public function show($id)
    {
        return view('post', [
            "title" => "single posts",
            "post" => Post::find($id)
        ]);
    }

    public function add()
    {
        $title = 'Add Post';
        return view('add-post', compact('title'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'body' => 'required|string',

        ]);
        $blog_post = new Post();
        $blog_post->title = $request->title;
        $blog_post->author = $request->author;
        $blog_post->body = $request->body;
        $blog_post->save();

        return redirect()->to('/blog')->with('add', 'Blog post created seccessfully');
    }

    public function edit($id)
    {
        $Post = Post::findOrFail($id);
        $title = 'Edit Post';
        return view('edit-post', compact('Post', 'title'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'body' => 'required|string',

        ]);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->author = $request->author;
        $post->body = $request->body;
        $post->save();

        return redirect()->to('/blog')->with('update', 'Blog post updated');
    }
    public function data(Request $request)
    {
        $Post = Post::select('id_blog_post', 'title', 'author', 'body')->get();
        return view('data-post', compact('Post'));
    }
    public function delete($id)
    {
        $Post = Post::findOrFail($id);
        $Post->delete();
        return redirect()->to('blog')->with('delete', 'Post deleted successfully');
    }
    public function dataPost()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }
    public function tampilKonten()
    {
        return view('layout.content');
    }
    
}
