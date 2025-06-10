<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function indexNomalSql()
    {
        $post = new Post();
        $posts = $post->getPostsWithNomalSql();
        return $posts;
    }

    public function createPostWithNomalSql()
    {
        $dummyData = (object) [
            'user_id' => 1,
            'title' => '素のSQLで新しい投稿',
            'body' => '素のSQLで新しい投稿の内容です。'
        ];
        // dd($dummyData);
        $post = new Post();
        $posts = $post->createPostWithNomalSql($dummyData);
       
    }

    public function updatePostWithNomalSql()
    {
        $dummyData = (object) [
            'id' => 12,
            'title' => '更新された投稿',
            'body' => '更新された投稿の内容です。'
        ];
        $post = new Post();
        $posts = $post->upodatePostWithNomalSql($dummyData);
    }

    public function deletePostWithNomalSql()
    {
        $dummyData = (object) [
            'id' => 12,
        ];
        $post = new Post();
        $posts = $post->deletePostWithNomalSql($dummyData);
    }   
    public function createBulkPostWithNomalSql()
    {
        $post = new Post();
        $posts = $post->createBulkPostWithNomalSql();
    }

    public function createPostWithQueryBuilder()
    {
        $dummyData = (object) [
            'user_id' => 1,
            'title' => 'クエリービルダーで新しい投稿',
            'body' => 'クエリービルダーで新しい投稿の内容です。'
        ];
        $post = new Post();
        $posts = $post->createPostWithQueryBuilder($dummyData);
    }

    public function getPostWithQueryBuilder()
    {
        $post = new Post();
        $posts = $post->getPostWithQueryBuilder();
        return $posts;
    }

    public function updatePostWithQueryBuilder()
    {
        $dummyData = (object) [
            'id' => 16,
            'title' => '更新された投稿',
            'body' => '更新された投稿の内容です。'
        ];
        $post = new Post();
        $posts = $post->updatePostWithQueryBuilder($dummyData);
    }

    public function deletePostWithQueryBuilder()
    {
        $dummyData = (object) [
            'id' => 19,
        ];
        $post = new Post();
        $posts = $post->deletePostWithQueryBuilder($dummyData);
    }

    public function getPostByFilter()
    {
        $post = new Post();
        $posts = $post->getPostByFilter();
        return $posts;
    }

    public function getCountPost()
    {
        $post = new Post();
        $count = $post->getCountPost();
        return $count;
    }

    public function getPostAndUserWithQueryBuilder()
    {
        $post = new Post();
        $posts = $post->getPostAndUserWithQueryBuilder();
        return $posts;
    }

    public function getPostAndUserWithQueryBuilderBySubQuery()
    {
        $post = new Post();
        $posts = $post->getPostAndUserWithQueryBuilderBySubQuery();
        return $posts;
    }

    public function getPostWithEloquent()
    {
        $post = new Post();
        $posts = $post->getPostWithEloquent();
        return $posts;
    }

    public function getPostWithEloquentById()
    {
        $post = new Post();
        $posts = $post->getPostWithEloquentById(1);
        return $posts;
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
