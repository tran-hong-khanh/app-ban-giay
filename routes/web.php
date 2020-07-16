<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLevel;
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
//     return view('home');
// });

Route::get('/','HomeController@index')->name('homepage');

Route::get('/gioi-thieu','HomeController@gioithieu')->name('gioithieu');
Route::get('/lien-he','HomeController@lienhe')->name('lienhe');
Route::get('/tin-tuc','HomeController@tintuc')->name('tintuc');
Route::get('/chi-tiet-tin-tuc','HomeController@chitiettintuc')->name('chitiettintuc');

Route::get('/gio-hang','HomeController@giohang')->name('giohang');
Route::post('/khach-hang/cap-nhat-gio-hang', 'HomeController@updateCart')->name('updateCart');
Route::get('/khach-hang/xoa-gio-hang/{id}', 'HomeController@removeItemInCart')->name('removeItemInCart');

Route::get('/search/name-product', 'HomeController@searchByName')->name('searchByName');

Route::get('/search/id-product', 'HomeController@searchByID')->name('searchByID');

Route::get('/home', function () {
    return redirect()->route('products');
});

Route::group(['prefix' => 'san-pham'], function () {
    Route::get('/','HomeController@products')->name('products');
    Route::get('/chi-tiet-san-pham/{id?}/{name?}','HomeController@chitietsanpham')->name('chitietsanpham');
    Route::get('/lifestyle','HomeController@lifestyleProducts')->name('lifestyleProducts');
    Route::get('/running','HomeController@runningProducts')->name('runningProducts');
    Route::get('/basketball','HomeController@basketballProducts')->name('basketballProducts');
    Route::get('/football','HomeController@footballProducts')->name('footballProducts');
    Route::get('/giay-nu','HomeController@giay_nu')->name('giay_nu');

});

Route::group(['prefix' => 'khach-hang'], function () {
        Route::get('/account', 'HomeController@account')->middleware(CheckLevel::class)->name('account');
        Route::get('/check-login', 'HomeController@checklogin')->middleware(CheckLevel::class)->name('checklogin');
        Route::get('/register', 'HomeController@render_register')->middleware(CheckLevel::class)->name('render_register');
        // Route::get('/khach-hang/profile', 'HomeController@customerProfile')->name('profile');
        // Route::post('khach-hang/update-profile', 'HomeController@updateProfile')->name('updateProfile');
        // Route::post('khach-hang/update-profile-cart', 'HomeController@updateProfileCart')->name('updateProfileCart');
        Route::post('/login', 'HomeController@login')->name('customer_login');
        Route::post('/register', 'HomeController@register')->name('customer_register');
        // Route::get('/khach-hang/logout', 'HomeController@logout')->name('customer_logout');
    });

// Route::group(['prefix' => 'admin'], function () {
//         Route::get('/','HomeController@admin')->name('admin');
//         Route::get('/login', 'HomeController@adminLogin')->name('admin-login');
//         Route::get('/register', 'HomeController@adminRegister')->middleware(CheckLevel::class)->name('render_register');
//         // Route::get('/khach-hang/profile', 'HomeController@customerProfile')->name('profile');
//         // Route::post('khach-hang/update-profile', 'HomeController@updateProfile')->name('updateProfile');
//         // Route::post('khach-hang/update-profile-cart', 'HomeController@updateProfileCart')->name('updateProfileCart');
//         Route::post('/login', 'HomeController@adminPostLogin')->middleware(CheckLevel::class)->name('adminlogin');
//         Route::post('/register', 'HomeController@adminPostRegister')->name('adminregister');
//         // Route::get('/khach-hang/logout', 'HomeController@logout')->name('customer_logout');
//     });
Auth::routes();