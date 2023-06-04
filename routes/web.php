<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\FaxController;
use App\Http\Controllers\OperatorsController;
use App\Http\Controllers\RecordingsController;
use App\Http\Controllers\NumbersController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ScenariosController;
use App\Http\Controllers\StatusesController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\AlertsController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\OnlineController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/clients', [ClientsController::class, 'index'])->name('clients.index');
Route::get('/fax', [FaxController::class, 'index'])->name('fax.index');
Route::get('/operators', [OperatorsController::class, 'index'])->name('operators.index');
Route::get('/recordings', [RecordingsController::class, 'index'])->name('recordings.index');
Route::get('/numbers', [NumbersController::class, 'index'])->name('numbers.index');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/scenarios', [ScenariosController::class, 'index'])->name('scenarios.index');
Route::get('/statuses', [StatusesController::class, 'index'])->name('statuses.index');
Route::get('/helpdesk', [HelpdeskController::class, 'index'])->name('helpdesk.index');
Route::get('/alerts', [AlertsController::class, 'index'])->name('alerts.index');
Route::get('/billing', [BillingController::class, 'index'])->name('billing.index');
Route::get('/online', [OnlineController::class, 'index'])->name('online.index');

