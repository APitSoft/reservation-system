<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;

use Spatie\Permission\Models\Permission;


use App\Http\Controllers\OrderController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AnalyticController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\IntegrationController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('store', StoreController::class);
Route::resource('product', ProductController::class);
Route::resource('integration', IntegrationController::class);

Route::get('/clients', [ClientController::class, 'index'])->name('clients');
Route::get('/members', [TeamMemberController::class, 'index'])->name('members');

Route::resource('order', OrderController::class);
Route::resource('analytic', AnalyticController::class);
Route::resource('customer', CustomerController::class);
Route::resource('subscriber', SubscriberController::class);






















//////////////////
Route::get('/role',function()
{
    $users = User::role('Seller')->get();
});



