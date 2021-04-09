<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ProductController;

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
Route::resource('product',ProductController::class);
// Route::get('/', function () {
//     return view('pages.home');
// });
// Route::get('contact', function () {
//     return view('pages.contact');
// });
// Route::get('test', function () {
//     return view('test');
// });
// Route::get('testUsers', function(){
//     $user = User::where('name', 'Talon Wiza')->first();
//     dd($user);
// });