<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::post('/posts',[
    PostController::class,'store']);

