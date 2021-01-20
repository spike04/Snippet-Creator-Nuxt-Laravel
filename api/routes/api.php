<?php

use App\Http\Controllers\Auth\MeController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\Snippers\StepController;
use App\Http\Controllers\Snippets\SnippetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix' => 'auth'], function () {
    Route::post('signin', SignInController::class);
    Route::get('me', MeController::class);
    Route::post('signout', SignOutController::class);
});

Route::group(['prefix' => 'snippets'], function () {
    Route::post('', [SnippetController::class, 'store']);
    Route::get('{snippet}', [SnippetController::class, 'show']);
    Route::patch('{snippet}', [SnippetController::class, 'update']);
    Route::patch('{snippet}/steps/{step}', [StepController::class, 'update']);
});
