<?php

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

Route::get('events', 'App\Http\Controllers\EventsController@getEventsWithWorkshops');
Route::get('futureevents', 'App\Http\Controllers\EventsController@getFutureEventsWithWorkshops');
Route::get('menu', 'App\Http\Controllers\MenuController@getMenuItems');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
