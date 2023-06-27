<?php

use App\Http\Controllers\User\PagesController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PagesController::class, 'index'])->name('home');
Route::group(['prefix' => 'user'], function () {
    // USER AUTH ROUTES
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    // ROOMS ROUTES 
    Route::get('/rooms', [PagesController::class, "rooms"])->name('rooms');
    Route::get('/rooms/details', [PagesController::class, "rooms_details"])->name('rooms.details');
    Route::get('/rooms/search_results_list', [PagesController::class, "rooms_search_results_list"])->name('rooms.search_results_list');

    // USER HOTEL ROUTES
    Route::get('/hotel', [PagesController::class, "hotel"])->name('hotel');
    Route::get('/hotel/booking', [PagesController::class, "hotel_booking"])->name('hotel.booking');
    Route::get('/hotel/search', [PagesController::class, "hotel_search"])->name('hotel.search');
    Route::get('/hotel/single', [PagesController::class, "hotel_single"])->name('hotel.single');

    // ROUTES THE REQUIRE USERS TO BE LOGGED IN
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [PagesController::class, 'user_dashboard'])->name('user_dashboard');
        Route::get('/dashboard/booking', [PagesController::class, 'user_dashboard_booking'])->name('user_dashboard.booking');
        Route::get('/dashboard/profile', [PagesController::class, 'user_dashboard_profile'])->name('user_dashboard.profile');
        Route::get('/dashboard/review', [PagesController::class, 'user_dashboard_review'])->name('user_dashboard.review');
        Route::get('/dashboard/wishlist', [PagesController::class, 'user_dashboard_wishlist'])->name('user_dashboard.wishlist');
    });
});
