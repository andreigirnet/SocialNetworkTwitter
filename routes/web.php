<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\TweetLikesController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function(){
Route::post('/tweets', 'App\Http\Controllers\TweetController@store');
Route::post('/tweets/{tweet}/like',[TweetLikesController::class,'store']);
Route::delete('/tweets/{tweet}/like',[TweetLikesController::class,'destroy']);
Route::get('/home', [App\Http\Controllers\TweetController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/profiles/{user:username}/follow', [FollowsController::class,'store']);
Route::get('/profiles/{user:username}/edit', [ProfilesController::class,'edit'])->middleware('can:edit,user');
Route::patch('/profiles/{user:username}', [ProfilesController::class,'update'])->middleware('can:edit,user');
Route::get('/explore', 'App\Http\Controllers\ExploreController')->name('explore.index');
});
Route::get('/profiles/{user:username}','App\Http\Controllers\ProfilesController@show')->name('profile');

Auth::routes();
Route::get('/slot',function (){ return view('slotmachine');});

