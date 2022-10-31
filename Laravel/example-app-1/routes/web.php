<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController;

use App\Http\Controllers\PostController;

//use App\Http\Controllers\CreateController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     return view("test",['name'=> "Ahmad","age" => 30,'books' => ['comic',"drama","Action"]]);
// });


// Route::get(uri:'posts', action:[PostController::class, 'index'])->name('posts.index');

// Route::get(uri:'/posts/create', action:[PostController::class, 'create'])->name('posts.create');

// Route::get(uri:'/posts/{post}', action:[PostController::class, 'show'])->name('posts.show');

// Route::post(uri:'/posts', action:[PostController::class, 'store'])->name('posts.store');


Route::get(uri:'/posts', action:[PostController::class, 'index'])->name('posts.index');
Route::get(uri:'/posts/create', action:[PostController::class, 'create'])->name('posts.create');
Route::get(uri:'/posts/{post}', action:[PostController::class, 'show'])->name('posts.show');
Route::post(uri:'/posts', action:[PostController::class, 'store'])->name('posts.store');

// Route::get('/create', function () {
//     return view("create");
// });
