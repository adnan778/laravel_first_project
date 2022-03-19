<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogPost;



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

// Route::get('/', function () {
//     return view('layouts.app');
// });
Route::get('/', function () {
    return view('auth.login');
});

Route::get('Profile/Page',[HomeController::class,'profilepage'])->name('profile');
Route::post('ProfileUpdate',[HomeController::class,'updateprofile'])->name('updateAcount');




// changeProfilePicture
Route::get('changeProfilePicture',[HomeController::class,'profileChange'])->name('changeProfilePicture');
Route::post('updateimage',[HomeController::class,'updateimage'])->name('updateimage');


// newPostAdd
Route::get('newPostAdd',[HomeController::class,'newPostAdd'])->name('newPostAdd');
Route::post('addBlogPost',[BlogPost::class,'abpost'])->name('insert.blog');






// change passwod page
Route::get('change-Password',[BlogPost::class,'changePassword'])->name('changePassword');
Route::post('change-Password',[BlogPost::class,'updatePassword'])->name('updatePassword');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
