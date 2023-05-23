<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CEOController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\AirTicketController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RailTicketController;
use App\Http\Controllers\HotelBookingController;
use App\Http\Controllers\RefundPolicyController;
//Admin All COntroller
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\VisaProcessingController;
use App\Http\Controllers\Admin\HostelBookingController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\IndianRailTicketController;
use App\Http\Controllers\Admin\AirTicketController as AdminAirTicketController;


//Login Routes
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.confirm');


// Backend Routes
Route::group(['middleware' => 'auth'], function () {

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/dashboard', [AdminDashboardController::class, 'content'])->name('dashboard-content');

        Route::get('/contacts', [ContactsController::class, 'contacts'])->name('contacts');
        Route::get('/indian/railway/tickets', [IndianRailTicketController::class, 'indianRailwayTickets'])->name('indian-railway-ticket');
        Route::delete('/indian/railway/tickets/{id}', [IndianRailTicketController::class, 'destroy'])->name('indian-railway-ticket-delete');

        Route::get('/air/tickets', [AdminAirTicketController::class, 'airTickets'])->name('air-ticket');
        Route::delete('/air/ticket/{id}', [AdminAirTicketController::class, 'destroy'])->name('air-ticket-delete');

        Route::get('/hotel/booking', [HostelBookingController::class, 'hostelBooking'])->name('home-booking');
        Route::delete('/hotel/booking/{id}', [HostelBookingController::class, 'destroy'])->name('home-booking-delete');
    });
});

//Frontend ROutes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('ceo',  [CEOController::class, 'index'])->name('ceo');
Route::get('refund', [RefundPolicyController::class, 'index'])->name('refund');
Route::get('condition', [TermsController::class, 'index'])->name('condition');
Route::get('pay', [PayController::class, 'index'])->name('pay');
Route::get('visa_processing', [VisaProcessingController::class, 'index'])->name('visa_processing');
Route::get('gallary', [GallaryController::class, 'index'])->name('gallary');

Route::get('air', [AirTicketController::class, 'index'])->name('air_ticket');
Route::post('air', [AirTicketController::class, 'airTicket'])->name('air-ticket-booking');

Route::get('rail', [RailTicketController::class, 'index'])->name('rail_ticket');
Route::post('rail', [RailTicketController::class, 'railTicket'])->name('rail-ticket-booking');

Route::get('hotel_booking', [HotelBookingController::class, 'index'])->name('hotel_booking');
Route::post('hotel_booking', [HotelBookingController::class, 'hotelBooking'])->name('hotel-book');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'contactForm'])->name('contact-form');
