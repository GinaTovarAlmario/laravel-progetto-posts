<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Guest\PostController as GuestPostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts',[GuestPostController::class,'index'])->name('guest.posts.index');
Route::get('/posts/{post}',[GuestPostController::class,'show'])->name('guest.posts.show');

Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function () {
// index
Route::get('/posts',[AdminPostController::class,'index'])->name('posts.index');
// store
Route::post('/posts',[AdminPostController::class,'store'])->name('posts.store');
// create
Route::get('/posts/create',[AdminPostController::class,'create'])->name('posts.create');
// delete
Route::delete('/posts/{id}',[AdminPostController::class,'destroy'])->name('posts.delete');
// update
Route::put('/posts/{id}',[AdminPostController::class,'update'])->name('posts.update');
// show
Route::get('/posts/{id}',[AdminPostController::class,'show'])->name('posts.show');
// edit
Route::get('/posts/{id}/edit',[AdminPostController::class,'edit'])->name('posts.edit');
});
