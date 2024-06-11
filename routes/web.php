<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace'=>'App\Http\Controllers\Main'],function (){
    Route::get('/','IndexController')->name('main.index');

});
Route::group(['namespace'=>'App\Http\Controllers\Category','prefix'=>'categories'],function (){
    Route::get('/','IndexController')->name('category.index');
    Route::group(['namespace'=>'Post','prefix'=>'{category}/posts'],function(){
        Route::get('/','IndexController')->name('category.post.index');
    });
});
Route::group(['namespace'=>'App\Http\Controllers\Post','prefix'=>'posts'],function (){
    Route::get('/','IndexController')->name('post.index');
    Route::get('/{post}','ShowController')->name('post.show');

    Route::group(['namespace'=>'Comment','prefix'=>'{post}/comment'],function(){
       Route::post('/','StoreController')->name('post.comment.store');
    });
    Route::group(['namespace'=>'Like','prefix'=>'{post}/likes'],function(){
        Route::post('/','StoreController')->name('post.like.store');
    });
});



Route::group(['namespace'=>'App\Http\Controllers\Personal','prefix'=>'personal'],function() {
    Route::group(['namespace' => 'Main','prefix'=>'main'], function () {
        Route::get('/', 'IndexController')->middleware(['auth','verified'])->name('personal.main.index');
    });
    Route::group(['namespace' => 'Liked','prefix'=>'liked'], function () {
        Route::get('/', 'IndexController')->middleware(['auth','verified'])->name('personal.liked.index');
    });
    Route::group(['namespace' => 'Liked','prefix'=>'delete'], function () {
        Route::delete('/{post}', 'DeleteController')->middleware(['auth','verified'])->name('personal.liked.delete');
    });
    Route::group(['namespace' => 'Comment','prefix'=>'comment'], function () {
        Route::get('/', 'IndexController')->middleware(['auth','verified'])->name('personal.comment.index');
    });
    Route::group(['namespace' => 'Comment','prefix'=>'comment'], function () {
        Route::get('/{comment}/edit', 'EditController')->middleware(['auth','verified'])->name('personal.comment.edit');
    });
    Route::group(['namespace' => 'Comment','prefix'=>'comment'], function () {
        Route::patch('/{comment}', 'UpdateController')->middleware(['auth','verified'])->name('personal.comment.update');
    });
    Route::group(['namespace' => 'Comment','prefix'=>'comment'], function () {
        Route::delete('/{comment}', 'DeleteController')->middleware(['auth','verified'])->name('personal.comment.delete');
    });


});

Route::group(['namespace'=>'App\Http\Controllers\Admin','prefix'=>'admin'],function(){
   Route::group(['namespace'=>'Main'],function(){
            Route::get('/','IndexController')->middleware(['auth','admin','verified'])->name('admin.main.index');
   }) ;
    Route::group(['namespace'=>'Post','prefix'=>'posts'],function(){
        Route::get('/','IndexController')->middleware(['auth','admin','verified'])->name('admin.posts.index');
        Route::get('/create','CreateController')->middleware(['auth','admin','verified'])->name('admin.posts.create');
        Route::post('/','StoreController')->middleware(['auth','admin','verified'])->name('admin.posts.store');
        Route::get('/{post}','ShowController')->middleware(['auth','admin','verified'])->name('admin.posts.show');
        Route::get('/{post}/edit','EditController')->middleware(['auth','admin','verified'])->name('admin.posts.edit');
        Route::patch('/{post}','StoreController')->middleware(['auth','admin','verified'])->name('admin.posts.update');
        Route::delete('/{post}','DeleteController')->middleware(['auth','admin','verified'])->name('admin.posts.delete');
    });
    Route::group(['namespace'=>'Category','prefix'=>'categories'],function(){
        Route::get('/','IndexController')->middleware(['auth','admin','verified'])->name('admin.categories.index');
        Route::get('/create','CreateController')->middleware(['auth','admin','verified'])->name('admin.categories.create');
        Route::post('/','StoreController')->middleware(['auth','admin','verified'])->name('admin.categories.store');
        Route::get('/{category}','ShowController')->middleware(['auth','admin','verified'])->name('admin.categories.show');
        Route::get('/{category}/edit','EditController')->middleware(['auth','admin','verified'])->name('admin.categories.edit');
        Route::patch('/{category}','StoreController')->middleware(['auth','admin','verified'])->name('admin.categories.update');
        Route::delete('/{category}','DeleteController')->middleware(['auth','admin','verified'])->name('admin.categories.delete');
    });
    Route::group(['namespace'=>'Tag','prefix'=>'tags'],function(){
        Route::get('/','IndexController')->middleware(['auth','admin','verified'])->name('admin.tags.index');
        Route::get('/create','CreateController')->middleware(['auth','admin','verified'])->name('admin.tags.create');
        Route::post('/','StoreController')->middleware(['auth','admin','verified'])->name('admin.tags.store');
        Route::get('/{tag}','ShowController')->middleware(['auth','admin','verified'])->name('admin.tags.show');
        Route::get('/{tag}/edit','EditController')->middleware(['auth','admin','verified'])->name('admin.tags.edit');
        Route::patch('/{tag}','StoreController')->middleware(['auth','admin','verified'])->name('admin.tags.update');
        Route::delete('/{tag}','DeleteController')->middleware(['auth','admin','verified'])->name('admin.tags.delete');
    });
    Route::group(['namespace'=>'User','prefix'=>'users'],function(){
        Route::get('/','IndexController')->middleware(['auth','admin','verified'])->name('admin.users.index');
        Route::get('/create','CreateController')->middleware(['auth','admin','verified'])->name('admin.users.create');
        Route::post('/','StoreController')->middleware(['auth','admin','verified'])->name('admin.users.store');
        Route::get('/{user}','ShowController')->middleware(['auth','admin','verified'])->name('admin.users.show');
        Route::get('/{user}/edit','EditController')->middleware(['auth','admin','verified'])->name('admin.users.edit');
        Route::patch('/{user}','StoreController')->middleware(['auth','admin','verified'])->name('admin.users.update');
        Route::delete('/{user}','DeleteController')->middleware(['auth','admin','verified'])->name('admin.users.delete');
    });


});
Auth::routes(['verify'=>true]);

