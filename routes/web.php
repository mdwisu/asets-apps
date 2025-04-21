<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\InverstorRelationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// AUTH
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login-form');
Route::post('/login', [LoginController::class, 'login'])->name('login-process');

Route::post('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('isLogin');

// REGISTER PROCESS
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register-form');
Route::post('/register', [RegisterController::class, 'register'])->name('register-process');

// USERS
Route::get('/users/profile', [UserController::class, 'index'])->name('profile-user')->middleware('isLogin');
Route::get('/users/wishlist', [UserController::class, 'wishlist'])->name('wishlist-user')->middleware('isLogin');
Route::post('/users/delete', [UserController::class, 'deleteProfile'])->name('delete-profile')->middleware('isLogin');
Route::get('/performance', [UserController::class, 'performance'])->name('performance-calc')->middleware('isLogin');

// PAGE GENERAL
// HOME
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/space-available/ajax', [HomeController::class, 'GetAllSpaceAvailable']);
Route::get('/listings/ajax', [HomeController::class, 'GetListingDataAjax']);
Route::get('/detail-spbu/{listing_id}', [HomeController::class, 'GetDetailSpbu']);
Route::get('/detail/space', [HomeController::class, 'GetAreaSizePrice'])->name('filter-space');
Route::get('/detail/space-search', [HomeController::class, 'GetSpaceSearch'])->name('filter-search');

// LOCATION
Route::get('/location', [LocationController::class, 'index'])->name('location');

// ABOUT
Route::get('/about', [AboutController::class, 'index'])->name('about');

// INVESTOR RELATION
Route::get('/investor-relation', [InverstorRelationController::class, 'index'])->name('investor-relation');

// PARTNERSHIP
Route::get('/partnership', [PartnershipController::class, 'index'])->name('partnership');
Route::post('/partnership/sendMessage', [PartnershipController::class, 'sendMessage'])->name('sendMessage');

// CONTACT US
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');

// INFORMATIONS 
Route::get('/information', [InformationController::class, 'index'])->name('information-page');
