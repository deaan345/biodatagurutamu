<?php

use App\Http\controllers\RuteController;
use App\Http\controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Ini adalah rute tanpa MVC
Route::get('/rutebaru', function()
{
    return '<h1 style="color:blue;">Ini adalah rute baru tanpa MVC</h1>';
});


// ini adalah rute dengan view
Route::get('/ruteview', function () {
    return view('ruteview');
});

// Ini adalah rute dengan view, controller & Model
Route::get('/rutemodel', [RuteController::class, 'menampilkanDataModel']);

// Ini adalah Biodata aku
Route::get('/rutebiodata',[BiodataController::class,'menampilkanBiodata']);