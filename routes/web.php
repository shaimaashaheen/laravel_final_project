<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\frontController;
use App\Http\Controllers\AuthenticationController;
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

Route::get('login', [AuthenticationController::class,'login'])->name('login');
Route::post('authenticate', [AuthenticationController::class,'authenticate'])->name('authenticate');
Route::get('logout', [AuthenticationController::class,'logout'])->name('logout');
Route::get('register', [AuthenticationController::class,'register'])->name('register');
Route::post('register', [AuthenticationController::class,'do_register'])->name('do_register');


Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/',[dashboard\dashboardController::class,'index'])->name('admin.admin');
    Route::resource('user',dashboard\userController::class);
    Route::resource('post',dashboard\postController::class);
    Route::resource('category',dashboard\categoryController::class);


});

//Route::get('showcategory',[dashboard\categoryController::class,'show']);
Route::get('/', [frontController::class,'showhome'])->name('front.home');
Route::get('single', [frontController::class,'single'])->name('front.single');
Route::get('category', [frontController::class,'category'])->name('front.category');
Route::get('comment', [frontController::class,'comment'])->name('front.comment');
Route::get('contact', [frontController::class,'contact'])->name('front.contact');
Route::post('storeContact', [frontController::class,'storeContact'])->name('contact.store');


/*Route::get('facebook', function(){
return view('facebook');
});
*/



