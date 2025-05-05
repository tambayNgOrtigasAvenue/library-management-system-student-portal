<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/form', function(){
    return view('form');
})->name('form');

Route::post('/log-student', [LogController::class, 'logStudent'])->name('log.student');

Route::get('/student-register', function(){
    return view('student_registration');
})->name('student.register');

// Added route because when I try to access other routes, the error is looking for this routes

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
        return "Connected to Oracle 23ai Free!";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});

Route::get('/success-message', function(){
    return view('successfull');
});