<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/fashion', [FashionController::class, 'fashion'])->name('fashion');
Route::get('/chart', [ChartController::class, 'showChart'])->name('chart');
Route::get('/productdetail', [ProductDetailController::Class, 'detailproduct']->name('detail'));

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'admindashboard'])->name('dash.admin');
    Route::get('/admin/profile', [AdminController::class, 'adminprofile'])->name('profile.admin');
    Route::get('/admin/edit', [AdminController::class, 'adminedit'])->name('edit.admin');
    Route::post('/admin/profile/store', [AdminController::class, 'adminprofilestore'])->name('profile.admin.store');

    //product admin
    Route::get('/admin/product', [ProductAdminController::class, 'adminproduct'])->name('promin');
    Route::get('/admin/tambahprod', [ProductAdminController::class, 'uploadprod'])->name('tamprod');

    //categories
    Route::get('/admin/category', [CategoryAdminController::class, 'category'])->name('categoryadmin');
  Route::get('/admin/categorycreate', [CategoryAdminController::class, 'create_category'])->name('createcat');
});
