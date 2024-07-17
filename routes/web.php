<?php

use App\Http\Controllers\StudentContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::resource('students', StudentContoller::class);
