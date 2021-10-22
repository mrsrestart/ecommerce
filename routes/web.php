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
Route::get('/cart' , \App\Http\Livewire\CartComponent::class)->name('product.cart');
Route::get('/checkout' , \App\Http\Livewire\CheckoutComponenet::class);
Route::get('/product/{slug}' , \App\Http\Livewire\DetailsComponent::class)->name('product_detail');
Route::get('/category/{category_slug}' , \App\Http\Livewire\CategoryComponent::class)->name('product.category');
Route::get('/search' , \App\Http\Livewire\SearchComponent::class)->name('product.search');
Route::get('/eshan' , \App\Http\Livewire\EhsanComponent::class)->name('product.ehsan');

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
    Route::get('/admin/categories',\App\Http\Livewire\Admin\AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',\App\Http\Livewire\Admin\AdminAddCategoryComponent::class)->name('admin.addCategory');
    Route::get('/admin/category/edit/{categorySlug}',\App\Http\Livewire\Admin\EditCategoryComponent::class)->name('admin.editCategory');
    Route::get('/admin/products',\App\Http\Livewire\Admin\AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',\App\Http\Livewire\Admin\AdminAddProduct::class)->name('admin.addProduct');
    Route::get('/admin/product/edit/{product_slug}',\App\Http\Livewire\Admin\AdminEditProductComponent::class)->name('admin.editProduct');

});
