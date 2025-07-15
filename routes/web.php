<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::middleware(['role:nurse'])->group(function () {
        Route::get('/home', function () {
            return view('nurse.home');
        })->name('nurse.home');
    });


    Route::middleware(['role:doctor'])->group(function () {
        Route::get('/home', function () {
            return view('doctor.home');
        })->name('doctor.home');
    });


    Route::middleware(['role:receptionist'])->group(function () {
        Route::get('/home', function () {
            return view('receptionist.home');
        })->name('receptionist.home');
    });

    Route::get('/dashboard', function () {
        $user = Auth::user();
        if($user->hasRole('nurse')) {
            return redirect()->route('nurse.home');
        } elseif($user->hasRole('doctor')) {
            return redirect()->route('doctor.home');
        } else {
            return redirect()->route('receptionist.home');
        }
    })->name('home');
});