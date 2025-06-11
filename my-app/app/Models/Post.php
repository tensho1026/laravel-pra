<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    public function createPost($data)
    {
        $post = new Post();
       
        $post->title = $data->title;
        $post->content = $data->content;
        $post->save();
        return $post;
    }

    public function getPostsWithNomalSql() 
    {
        $posts = DB::select('SELECT * FROM posts');
        return $posts;
    }

    public function createPostWithNomalSql($data)
    {
        $posts = DB::insert('INSERT INTO posts (user_id,title,body) VALUES (?,?,?)',[$data->user_id,$data->title,$data->body]);
        return $posts;
    }

    public function upodatePostWithNomalSql($data) 
    {
        $posts = DB::update('UPDATE posts SET title = ?, body = ?, updated_at = now() WHERE id = ?',[$data->title,$data->body,$data->id]);
        return $posts;
    }

    public function deletePostWithNomalSql($data)
    {
        $posts = DB::delete('DELETE FROM posts WHERE id = ?',[$data->id]);
        return $posts;
    }

    public function createBulkPostWithNomalSql()
    {
        // DB::transaction(function () {
            $user_id = '1';
            $title = '一1111番めのトランザクションテスト';
            $body = 'これはトランザクションテストの投稿です。';
            DB::insert('INSERT INTO posts (user_id,title,body) VALUES (?,?,?)',[$user_id,$title,$body]);
            
            // userIDを入れない
            $title = '二番目のトランザクションテスト';
            $body = 'これはトランザクションテスト2の投稿です。';
            DB::insert('INSERT INTO posts (title,body) VALUES (?,?)',[$title,$body]);
        // });
    }

    public function createPostWithQueryBuilder($data)
    {
        $post = DB::table('posts')->insert([
            'user_id' => $data->user_id,
            'title' => $data->title,
            'body' => $data->body,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $post;
    }

    public function getPostWithQueryBuilder()
    {
        $posts = DB::table('posts')->first();
        dd($posts);
        return $posts;
    }

    public function updatePostWithQueryBuilder($data)
    {
        $post = DB::table('posts')->where('id', $data->id)->update([
            'title' => $data->title,
            'body' => $data->body,
            'updated_at' => now(),
        ]);
        return $post;
    }

    public function deletePostWithQueryBuilder($data)
    {
        $post = DB::table('posts')->where('id', $data->id)->delete();
        return $post;
    }

    public function getPostByFilter()
    {
        // $posts = DB::table('posts')->where('body', 'like', '%内容%')->whereIn('id', [1,2,3])->get();
        $posts = DB::table('posts')->paginate(5);
        return $posts;
    }

    public function getCountPost()
    {
        $posts = DB::table('posts')->count();
        return $posts;
    }

    public function getPostAndUserWithQueryBuilder()
    {
        $posts = DB::table('posts')->join('users', 'posts.user_id', '=', 'users.id')->select('posts.*', 'users.name')->get();
        return $posts;
    }

    public function getPostAndUserWithQueryBuilderBySubQuery()
    {
        $posts = DB::table('posts')->whereIn('id', function($query) {
            $query->select(DB::raw('MAX(id)'))->from('posts')->groupBy('user_id');
        })->get();
        return $posts;
    }

    public function getPostWithEloquent()
    {
        $posts = Post::all();
        dd($posts);
        return $posts;
    }

    public function getPostWithEloquentById($id)
    {
        $post = Post::find($id);
        return $post;
    }
}