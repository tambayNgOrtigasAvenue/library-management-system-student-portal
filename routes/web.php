<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\RegistrationController;

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

Route::post('/registered-student', [RegistrationController::class, 'registerStudent'])->name('student.register');

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
Route::get('/test-connection', function() {
    try {
        DB::connection()->getPdo();
        $result = DB::select("SELECT * FROM v\$version");
        return response()->json([
            'status' => 'connected',
            'oracle_version' => $result[0]->BANNER,
            'tables' => DB::select("SELECT * FROM tbl_student"),
        ]);
    } catch (\Exception $e) {
        return "Connection failed: " . $e->getMessage();
    }
});

Route::get('/success-message', function(){
    return view('successfull');
});