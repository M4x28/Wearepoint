<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\RegistrationStepOneController;
use App\Http\Controllers\RegistrationStepTwoController;
use Illuminate\Support\Facades\Http;

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

Route::get('/', function () {
    return view('welcome');
})->name('index');


// Jetstream auth
Route::group(['middlewere' => ['auth', 'verified']], function () {
    // Redirect by role
    Route::get('/redirects', [RoleController::class, 'index'])->name('check_role');

    // Go to dashboard if registration is completed
    Route::group(['middleware' => ['registration_completed']], function () {
        Route::get('/dashboard', function () {
            return redirect()->route('check_role');
        })->name('dashboard');
    });

    // Step One
    Route::get('step-one', [RegistrationStepOneController::class, 'create'])->name('step-one.create')->middleware('check_step_one');
    Route::post('step-one', [RegistrationStepOneController::class, 'store'])->name('step-one.store')->middleware('check_step_one');

    // Step Two
    Route::get('step-two', [RegistrationStepTwoController::class, 'create'])->name('step-two.create')->middleware('check_step_two');
    Route::post('step-two', [RegistrationStepTwoController::class, 'store'])->name('step-two.store')->middleware('check_step_two');

    // Route only if the user is authenticated
    Route::middleware(['auth'])->group(function () {
        Route::get('/test', function () {
            return 'Hello';
        });
    });
});





Route::get('test/{city}/{days}', function ($city, $days) {
    $response = Http::withHeaders([
        'X-RapidAPI-Host' => 'weatherapi-com.p.rapidapi.com',
        'X-RapidAPI-Key' => '44dc16f7ffmshdf7edb3ac5c2990p189d22jsn99d4beac9cdc'
    ])->get('https://weatherapi-com.p.rapidapi.com/forecast.json', [
        'q' => $city,
        'days' => $days,
    ])['forecast'];

    return $response;
});
