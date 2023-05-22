<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CEOController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\AirTicketController;
use App\Http\Controllers\RailTicketController;
use App\Http\Controllers\HotelBookingController;
use App\Http\Controllers\RefundPolicyController;
use App\Http\Controllers\VisaProcessingController;



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
