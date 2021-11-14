<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\AirtimeController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('login', LoginController::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('/', DashboardController::class);
    Route::get('/show/{id}', [DashboardController::class, 'show']);
Route::resource('apps', AppController::class);
Route::resource('users', UserController::class);
Route::resource('admin', AdminController::class);
Route::resource('clients', ClientController::class);
Route::resource('contacts', ContactController::class);
Route::resource('tags', TagsController::class);
Route::resource('import', ImportController::class);
Route::resource('sms', SMSController::class);
Route::resource('airtime', AirtimeController::class);
Route::resource('roles', RolesController::class);
Route::resource('permissions', PermissionsController::class);
Route::resource('logout', LogoutController::class);
Route::resource('profile', ProfileController::class);
Route::get('/sms/get/contacts/{id}', [ContactController::class, 'get_contacts']);
Route::post('/send/sms', [SMSController::class, 'store']);
Route::get('test/{phone}/{message}', [SMSController::class, 'test']);
});