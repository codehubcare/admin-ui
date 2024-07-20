<?php
use codehubcare\AdminUi\Http\Controllers\AdminController;

Route::get('admin', [AdminController::class, 'index'])->name('admin.index')