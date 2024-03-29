<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/users', [UserController::class, 'index']);

// Buscar por um usuário pelo ID
Route::get('/users/{id}', [UserController::class, 'findOne']);

// Incluir um novo usuario
Route::post('/users/insert', [UserController::class, 'insert']);

Route::get('/addresses', [AddressController::class, 'index']);

// Buscar por um endereço pelo ID
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

// Incluir um novo endereço
Route::post('/addresses/insert', [AddressController::class, 'insert']);

//INVOICES
Route::get('/invoices', [InvoiceController::class, 'index']);
Route::post('/invoices/insert', [InvoiceController::class, 'createInvoice']);
Route::get('/invoices/{id}', [InvoiceController::class, 'findOne']);
