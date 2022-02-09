<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TestControllers,
    SheetdbController,
};

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

Route::get('/', [TestControllers::class, 'readSpreadsheet']);
Route::get('/write', [TestControllers::class, 'writeSpreadsheet']);

Route::get('get', [SheetdbController::class, 'get']);
