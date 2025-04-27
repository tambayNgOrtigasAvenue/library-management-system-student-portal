<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entryform', function(){
    return view('entry_form');
});

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