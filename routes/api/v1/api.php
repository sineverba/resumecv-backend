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

Route::get('/versions', 'App\Http\Controllers\Api\V1\VersionsController@index')->name('versions_index');
// Databases
Route::get('/databases', 'App\Http\Controllers\Api\V1\DatabasesController@index')->name('databases_index');
// Frameworks
Route::get('/frameworks', 'App\Http\Controllers\Api\V1\FrameworksController@index')->name('frameworks_index');
// Frameworks
Route::get(
    '/programming-languages',
    'App\Http\Controllers\Api\V1\ProgrammingLanguagesController@index')->name('programming_languages_index');
