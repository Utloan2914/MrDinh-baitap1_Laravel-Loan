<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CovidController;

Route::get('/', function () {
    return view('welcome');
});

// Tạo view và xử lý logic trong route (function trong web.php)
Route::get('/sum1', function () {
    return view('sum1');
});
Route::post('/sum1', function (Request $request) {
    $a = $request->input('a', 0);
    $b = $request->input('b', 0);
    $sum1 = $a + $b;
    return view('sum1', compact('sum1', 'a', 'b'));
});

//Tạo view và xử lý logic trong controller
Route::get('/sum2', [SumController::class, 'showForm']);
Route::post('/sum2', [SumController::class, 'calculateSum']);


Route::get('/signup', [SignupController::class, 'index'])->name('signup.index');
Route::post('/signup', [SignupController::class, 'displayInfor'])->name('signup.store');


//Bài tập 3
Route::get('/covid', [CovidController::class, 'getData']);
