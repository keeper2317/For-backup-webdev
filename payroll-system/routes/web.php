<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\SalarySlipsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

Route::get('/generate-payslip', function () {
    return view('generate-payslip');
});

Route::get('/salary-slip', function () {
    return view('salarySlips');
});

Route::controller(AdminController::class)->group(function() {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login/process', 'process');
    Route::post('/logout', 'logout');
    Route::get('/signup', 'signup');
    Route::get('/user-salary', function () {
        return view('user-salary');
    });
    // Route::get('/generate-salary-slip', [SalarySlipsController::class, 'generate']);
    Route::get('/salaryreceipt', [SalarySlipsController::class, 'salaryreceipt']);
    // Route::get('/editpayslip', [SalarySlipsController::class, 'editpayslip']);
    Route::get('/salarySlips', [SalarySlipsController::class, 'salarySlips']);
});

// Route::post('/generate-salary-slip', [SalariesController::class, 'generateSalarySlip']);

Route::controller(SalariesController::class)->group(function() {
    // Route::post('/generate-salary-slip', 'generateSalarySlip');
    Route::post('/create/salary-slip', 'generateSalarySlip');
});

Route::controller(SalarySlipsController::class)->group(function() {
    Route::get('/salary-slip', 'showSalarySlips');
    Route::get('/edit-payslip/{slipId}', 'edit')->name('edit-payslip');
    Route::post('/update-payslip/{slipId}', 'update')->name('update-payslip');
    Route::delete('/salary-slips/{id}', 'deleteSalarySlip')->name('delete-payslip');
});





