<?php
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BirthController;
use App\Http\Controllers\LoveController;
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
    return view('welcome');
});
Route::get('/test', function () {
    return view('members.birthday');
});
Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->group(function () {
    Route::resource('roles',RoleController::class);

    Route::resource('users',UserController::class);

    Route::resource('products',ProductController::class);
    Route::resource('members',MemberController::class);
    Route::resource('birth',BirthController::class);
    Route::resource('love',LoveController::class);

Route::get('members/birthday', [App\Http\Controllers\MemberController::class, 'birthday'])->name('members.birthday');

   
   
    
});
});