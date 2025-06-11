<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[
    PostController::class,'index']);
    
Route::get('/posts2',[
    PostController::class,'index2']);

Route::get('/posts3',[
    PostController::class,'indexNomalSql']);

Route::post('/posts/create/nomalsql',[
    PostController::class,'createPostWithNomalSql']);

Route::post('/posts/update/nomalsql',[
    PostController::class,'updatePostWithNomalSql']);

Route::post('/posts/delete/nomalsql',[
    PostController::class,'deletePostWithNomalSql']);

Route::post('/posts/bulk/nomalsql',[
    PostController::class,'createBulkPostWithNomalSql']);

Route::post('/posts/create/querybuilder',[
    PostController::class,'createPostWithQueryBuilder']);

Route::get('/posts/get/querybuilder',[
    PostController::class,'getPostWithQueryBuilder']);

Route::post('/posts/update/querybuilder',[
    PostController::class,'updatePostWithQueryBuilder']);

Route::post('/posts/delete/querybuilder',[
    PostController::class,'deletePostWithQueryBuilder']);

Route::post('/posts',[
    PostController::class,'store']);

Route::get('/posts/filter/querybuilder',[
    PostController::class,'getPostByFilter']);

Route::get('/posts/count/querybuilder',[
    PostController::class,'getCountPost']);

// Route::get('/posts/user/querybuilder',[
//     PostController::class,'getPostAndUserWithQueryBuilder']);

Route::get('/posts/user/querybuilder',[
    PostController::class,'getPostAndUserWithQueryBuilderBySubQuery']);

Route::get('/posts/eloquent',[
    PostController::class,'getPostWithEloquent']);

Route::get('/posts/eloquent/{id}',[
    PostController::class,'getPostWithEloquentById']);

Route::post('/posts/eloquent/create',[
    PostController::class,'createPostWithEloquent']);

Route::post('/posts/eloquent/update',[
    PostController::class,'updatePostWithEloquent']);

Route::post('/posts/eloquent/delete',[
    PostController::class,'deletePostWithEloquent']);

Route::get('/users/{id}',[
    User::class,'getUserById']);