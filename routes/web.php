<?php

use App\Livewire\Credits;
use App\Livewire\JeepRevenue;
use App\Livewire\JeepRevenueTable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\NotificationController;
use Jenssegers\Agent\Agent;

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
    $agent = new Agent();
    $deviceInfo = $agent->device(); // Get device information
    $browserInfo = $agent->browser(); // Get browser information

    if($agent->isDesktop()){
        // Insert into the database
        \App\Models\Usage::create([
            'device' => $deviceInfo,
            'browser' => $browserInfo,
            'usage' => 'Desktop'
        ]);

    } else if($agent->isMobile()){
        \App\Models\Usage::create([
            'device' => $deviceInfo,
            'browser' => $browserInfo,
            'usage' => 'Mobile'
        ]);
    }
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/driver', function () {
        return view('driver');
    })->name('driver');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/queue', function () {
        return view('queue');
    })->name('queue');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/credits', Credits::class)->name('credits');
    Route::get('/jeep', JeepRevenue::class);
});

Route::controller(PaymentController::class)
->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('pay','pay')->name('pay');
    Route::get( '/cancel/{cardid}','cancel')->name('payment.cancel');
    Route::get( '/success/{cardid}','success')->name('payment.success');
    // Route::get('process','process')->name('process');
    // Route::get('link-pay','linkPay')->name('linkPay');
    // Route::get('link-status/{linkid}','linkStatus');
    // Route::get('refund','refund');
    // Route::get('refund-status/{id}','refundStatus');
 });

 Route::delete('/clear',[NotificationController::class,'clear'])->name('clear');

