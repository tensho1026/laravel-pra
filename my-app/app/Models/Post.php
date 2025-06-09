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
}
