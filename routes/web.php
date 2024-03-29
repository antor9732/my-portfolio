<?php
use App\Http\Controllers\PortfoliosController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PortfoliosController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [PortfoliosController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/main', [PortfoliosController::class, 'main'])->name('admin.main');
Route::get('/admin/service', [PortfoliosController::class, 'service'])->name('admin.service');
Route::get('/admin/portfolio', [PortfoliosController::class, 'portfolio'])->name('admin.portfolio');
Route::get('/admin/about', [PortfoliosController::class, 'about'])->name('admin.about');
Route::get('/admin/contact', [PortfoliosController::class, 'contact'])->name('admin.contact');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
