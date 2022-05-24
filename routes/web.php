<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin;
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

Route::get('/', function () {
    return view('open.homepage');
});

Route::get('/games', function () {
    return view('open.games');
});

Route::get('/categories', function () {
    return view('open.category');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/cart', function () {
    return view('open.cart');
});



Route::get('/dashboard', function () {
    return view('open.homepage');
})->middleware(['auth'])->name('dashboard');

Route::get('/usercreate', [Admin\User\UserController::class, 'create']) ->
name('admin.users.create');
Route::get('/user', [Admin\User\UserController::class, 'index']) ->
    name('admin.users.index');
Route::get('/usershow', [Admin\User\UserController::class, 'show']) ->
name('admin.users.show');


Route::resource('admin/user', Admin\User\UserController::class);

require __DIR__.'/auth.php';
