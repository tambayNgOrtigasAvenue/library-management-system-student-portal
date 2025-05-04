<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entryform', function(){
    return view('entry_form');
});

Route::get('/form', function(){
    return view('form');
});

// Added route because when I try to access other routes, the error is looking for this routes

Route::get('/home', function () {
    return view('homepage');
})->name('home');

Route::get('/appointment/form', function () {
    return view('appointment_form');
})->name('appointment.form');

Route::post('/library/entry/store', function () {
    // Handle the form submission logic here
    return 'Form submitted successfully!';
})->name('library.entry.store');

Route::get('/requirements', function () {
    return view('requirements'); 
})->name('requirements');

//End of the added route


use Illuminate\Support\Facades\DB;

//Test the oracle
Route::get('/test-oracle', function() {
    try {
        DB::connection()->getPdo();
        return "Connected to Oracle 23c Free!";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});

Route::get('/success-message', function(){
    return view('succesfull');
});

use App\Http\Controllers\LogController;

Route::get('/attendance', [LogController::class, 'create'])->name('logs.create');
Route::post('/attendance', [LogController::class, 'store'])->name('logs.store');