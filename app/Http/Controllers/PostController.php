<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest; // useする
use App\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    // public function create()
    // {
    //     return view('posts/create');
    // }

    public function store(Post $post, PostRequest $request) // 引数をRequest->PostRequestにする
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    //ブログ投稿の編集を実行する関数
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
    
    //ブログ投稿の削除を実行する関数
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }

    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);;
    }
}