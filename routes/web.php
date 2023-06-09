<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CEOController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\UKVisaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\AirTicketController;
use App\Http\Controllers\ChinaVisaController;
//Admin All COntroller
use App\Http\Controllers\DubaiVisaController;
use App\Http\Controllers\IndiaVisaController;
use App\Http\Controllers\ItalyVisaController;
use App\Http\Controllers\SaudiVisaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JoinWithUsController;
use App\Http\Controllers\RailTicketController;
use App\Http\Controllers\CambodiaVisaController;
use App\Http\Controllers\HotelBookingController;
use App\Http\Controllers\MalaysiaVisaController;
use App\Http\Controllers\RefundPolicyController;
use App\Http\Controllers\SingapurVisaController;
use App\Http\Controllers\ThailandVisaController;
use App\Http\Controllers\PhilipineVisaController;
use App\Http\Controllers\SirilankaVisaController;
use App\Http\Controllers\UkStudentVisaController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\UsaStudentVisaController;
use App\Http\Controllers\VisaProcessingController;
use App\Http\Controllers\CompanyOverViewController;
use App\Http\Controllers\ChinaStudentVisaController;
use App\Http\Controllers\IndiaStudentVisaController;
use App\Http\Controllers\ThailandVisaGuideController;
use App\Http\Controllers\RangamatiVisaGuideController;
use App\Http\Controllers\Admin\HostelBookingController;
use App\Http\Controllers\UmrahVisaProcessingController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\AustriliaStudentVisaController;
use App\Http\Controllers\CanadaVisaProcessingController;
use App\Http\Controllers\StudentVisaProcessingController;
use App\Http\Controllers\Admin\IndianRailTicketController;
use App\Http\Controllers\SchoolingVisaProcessingController;
use App\Http\Controllers\Admin\AirTicketController as AdminAirTicketController;

//Login Routes
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.confirm');


// Backend Routes
Route::group(['middleware' => 'auth'], function () {
    //All routes here
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/dashboard-content', [AdminDashboardController::class, 'content'])->name('dashboard-content');

        Route::get('/contacts', [ContactsController::class, 'contacts'])->name('contacts');
        Route::get('/indian/railway/tickets', [IndianRailTicketController::class, 'indianRailwayTickets'])->name('indian-railway-ticket');
        Route::delete('/indian/railway/tickets/{id}', [IndianRailTicketController::class, 'destroy'])->name('indian-railway-ticket-delete');

        Route::get('/air/tickets', [AdminAirTicketController::class, 'airTickets'])->name('air-ticket');
        Route::delete('/air/ticket/{id}', [AdminAirTicketController::class, 'destroy'])->name('air-ticket-delete');

        Route::get('/hotel/booking', [HostelBookingController::class, 'hostelBooking'])->name('home-booking');
        Route::delete('/hotel/booking/{id}', [HostelBookingController::class, 'destroy'])->name('home-booking-delete');
    });
});

//Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('ceo',  [CEOController::class, 'index'])->name('ceo');
Route::get('refund', [RefundPolicyController::class, 'index'])->name('refund');
Route::get('condition', [TermsController::class, 'index'])->name('condition');
Route::get('pay', [PayController::class, 'index'])->name('pay');
Route::get('visa_processing', [VisaProcessingController::class, 'index'])->name('visa_processing');
Route::get('student_visa', [StudentVisaProcessingController::class, 'index'])->name('student_visa');
Route::get('schooling_visa', [SchoolingVisaProcessingController::class, 'index'])->name('schooling_visa');
Route::get('umrah_visa', [UmrahVisaProcessingController::class, 'index'])->name('umrah_visa');
Route::get('gallary', [GallaryController::class, 'index'])->name('gallary');
Route::get('canada_visa', [CanadaVisaProcessingController::class, 'index'])->name('canada_visa');
Route::get('air', [AirTicketController::class, 'index'])->name('air_ticket');
Route::post('air', [AirTicketController::class, 'airTicket'])->name('air-ticket-booking');
Route::get('blog', [BlogController::class, 'index'])->name('blog');

Route::get('thiland_Visa', [ThailandVisaController::class, 'index'])->name('thiland_Visa');
Route::get('china_student_visa', [ChinaStudentVisaController::class, 'index'])->name('china_student_visa');
Route::get('india_student_visa', [IndiaStudentVisaController::class, 'index'])->name('india_student_visa');
Route::get('uk_student_visa', [UkStudentVisaController::class, 'index'])->name('uk_student_visa');
Route::get('usa_student_visa', [UsaStudentVisaController::class, 'index'])->name('usa_student_visa');
Route::get('austrilia_student_visa', [AustriliaStudentVisaController::class, 'index'])->name('austrilia_student_visa');
Route::get('dubai_visa', [DubaiVisaController::class, 'index'])->name('dubai_visa');
Route::get('cambodia_visa', [CambodiaVisaController::class, 'index'])->name('cambodia_visa');
Route::get('china_visa', [ChinaVisaController::class, 'index'])->name('china_visa');
Route::get('indian_visa', [IndiaVisaController::class, 'index'])->name('indian_visa');
Route::get('italy_visa', [ItalyVisaController::class, 'index'])->name('italy_visa');
Route::get('malaysia_visa', [MalaysiaVisaController::class, 'index'])->name('malaysia_visa');
Route::get('philipine_visa', [PhilipineVisaController::class, 'index'])->name('philipine_visa');
Route::get('saudi_visa', [SaudiVisaController::class, 'index'])->name('saudi_visa');
Route::get('singapure_visa', [SingapurVisaController::class, 'index'])->name('singapure_visa');
Route::get('uk_visa', [UKVisaController::class, 'index'])->name('uk_visa');
Route::get('sirilanka_visa', [SirilankaVisaController::class, 'index'])->name('sirilanka_visa');
Route::get('company_over_view', [CompanyOverViewController::class, 'index'])->name('company_over_view');
Route::get('mission_vision', [MissionController::class, 'index'])->name('mission_vision');
Route::get('join_with_us', [JoinWithUsController::class, 'index'])->name('join_with_us');


Route::get('thiland_visa_guide', [ThailandVisaGuideController::class, 'index'])->name('thiland_visa_guide');
Route::get('rangamati_visa_guide', [RangamatiVisaGuideController::class, 'index'])->name('rangamati_visa_guide');




Route::get('rail', [RailTicketController::class, 'index'])->name('rail_ticket');
Route::post('rail', [RailTicketController::class, 'railTicket'])->name('rail-ticket-booking');

Route::get('hotel_booking', [HotelBookingController::class, 'index'])->name('hotel_booking');
Route::post('hotel_booking', [HotelBookingController::class, 'hotelBooking'])->name('hotel-book');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'contactForm'])->name('contact-form');
