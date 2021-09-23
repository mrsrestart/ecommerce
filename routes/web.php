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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',\App\Http\Livewire\HomeComponent::class);
Route::get('/shop' , \App\Http\Livewire\ShopComponenet::class);
Route::get('/cart' , \App\Http\Livewire\CartComponent::class);
Route::get('/checkout' , \App\Http\Livewire\CheckoutComponenet::class);

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');



//for User
Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::get('/user/dashboard',\App\Http\Livewire\User\UserDashboardComponent::class)->name('user.dashboard');
});

//for Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group( function () {
    Route::get('/admin/dashboard',\App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');

});
