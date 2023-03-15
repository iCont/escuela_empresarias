<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
Route::get('',[HomeController::class,'index'])->name('admin.index');
