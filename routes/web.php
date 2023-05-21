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


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('ceo',  [CEOController::class, 'index'])->name('ceo');
Route::get('refund', [RefundPolicyController::class, 'index'])->name('refund');
Route::get('condition', [TermsController::class, 'index'])->name('condition');
Route::get('pay', [PayController::class, 'index'])->name('pay');
Route::get('air', [AirTicketController::class, 'index'])->name('air_ticket');
Route::get('rail', [RailTicketController::class, 'index'])->name('rail_ticket');
Route::get('visa_processing', [VisaProcessingController::class, 'index'])->name('visa_processing');
Route::get('hotel_booking', [HotelBookingController::class, 'index'])->name('hotel_booking');
Route::get('gallary', [GallaryController::class, 'index'])->name('gallary');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
