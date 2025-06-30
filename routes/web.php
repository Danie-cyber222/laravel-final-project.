<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\CompaniesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);

//job routes
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/listjobs', [JobController::class, 'show'])->middleware('guest');

//tags routes
Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);


//career routes
Route:: get('/career', [CareerController::class, 'index']);
//salaries routes
Route:: get('/salaries', [SalariesController::class, 'index']);
//Companies routes
Route:: get('/companies', [CompaniesController::class, 'index']);




Route::middleware('guest')->group(
    function () {
        Route::get('/register', [RegisterUserController::class, 'create']);
        Route::post('/register', [RegisterUserController::class, 'store']);
        
        Route::get('/login', [SessionController::class, 'create'])->name('login');
        Route::post('/login', [SessionController::class, 'store']);
    }
);



Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
