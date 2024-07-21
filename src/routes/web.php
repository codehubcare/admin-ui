<?php

use codehubcare\AdminUi\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
