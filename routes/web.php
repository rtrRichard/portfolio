<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::get('/test', [Admin::class, 'index'])->name('admin.index');