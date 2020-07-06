<?php

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
    return view('home');
});
Route::get('gioithieu',function() {
    return view('homepage.gioithieu');
});
Route::get('lienhe',function() {
    return view('homepage.lienhe');
});

Route::get('/home', function () {
    return redirect()->route('products');
});

// Route::get('/', function () {
//     return redirect()->route('products');
// });
Route::get('/sanpham','HomeController@products')->name('products');

// Route::get('/khach-hang/account', 'HomeController@account')->name('account');
// Route::get('/khach-hang/profile', 'HomeController@customerProfile')->name('profile');
// Route::post('khach-hang/update-profile', 'HomeController@updateProfile')->name('updateProfile');
// Route::post('khach-hang/update-profile-cart', 'HomeController@updateProfileCart')->name('updateProfileCart');
// Route::post('/khach-hang/login', 'HomeController@login')->name('customer_login');
// Route::post('/khach-hang/register', 'HomeController@register')->name('customer_register');
// Route::get('/khach-hang/logout', 'HomeController@logout')->name('customer_logout');

Auth::routes();