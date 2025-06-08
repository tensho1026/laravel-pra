<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = [
            (object)['title'=>'投稿1','body'=>'投稿1の本文'],
            (object)['title'=>'投稿2','body'=>'投稿2の本文'],
            (object)['title'=>'投稿3','body'=>'投稿3の本文'],
        ];
        return view('posts.index',['posts'=>$posts]);
    }

    public function index2()
    {
        $posts = [
            (object)['title'=>'投稿1','body'=>'投稿1の本文'],
            (object)['title'=>'投稿2','body'=>'投稿2の本文'],
            (object)['title'=>'投稿3','body'=>'投稿3の本文'],
        ];
        return view('posts.index2',['posts'=>$posts]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
