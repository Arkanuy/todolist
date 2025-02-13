<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\User\Dashboard as UserDashboard;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

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

// Auth Login
Route::get('/login', Login::class)->name('login');

Route::get('/', Welcome::class);


// Admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function(){
    route::get('dashboard', Dashboard::class)->name('admin.dashboard');
});

// User
Route::middleware(['auth', 'role:user'])->prefix('user')->group(function(){
    route::get('dashboard', UserDashboard::class)->name('user.dashboard');
});
