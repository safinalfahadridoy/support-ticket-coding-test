<?php

namespace App\Http\Controllers;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('first.home');

Route::get('home/customer/index',[CustomerController::class,'index'])->name('customer.index');
Route::get('home/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('home/customer',[CustomerController::class,'store'])->name('customer.store');
Route::get('home/customer/{customer}',[CustomerController::class,'show'])->name('customer.show');

Route::get('home/admin/index',[AdminController::class,'index'])->name('admin.index');

Route::delete('ticket/{id}',[AdminController::class,'delete'])->name('ticket.delete');

Route::post('/send-email', [EmailController::class, 'sendEmail']);



