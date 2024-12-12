<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function (){
    return view('auth.register');
});


Route::get('/siswa', action: function(){

    // ini perintahnya...
    return view('kelas.index');
    
});

Route::get('/our-team', action: function(){

    // ini perintahnya...
    return view('OurTeam');
    
});

Route::get('/Home', action: function(){

    // ini perintahnya...
    return view('Error');
    
});

Route::middleware(['auth'])->get('/restricted', function () {
    return view('Error'); // A page that's restricted to logged-in users
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('siswa', SiswaController::class);

Route::resource('kelas', KelasController::class);

