<?php

use illuminate\support\facades\route;
use App\Http\Controllers\PageController;


route::view('/', 'index')->name('home');
route::get('curso/{course:slug}', [PageController::class, 'course'])->name('course');

route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
