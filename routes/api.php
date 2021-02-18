<?php

use App\Models\Brand;
use App\Models\Model;
use App\Models\ModelPart;
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

Route::prefix('brands')->group(function () {
    Route::get('/', function () {
        return Brand::all();
    });

    Route::get('{id}', function ($id) {
        return Brand::findOrFail($id);
    });

    Route::get('{id}/parts', function ($id) {
        return Brand::findOrFail($id)->parts;
    });
});

Route::prefix('models')->group(function () {
    Route::get('/', function () {
        return Model::all();
    });

    Route::get('{id}', function ($id) {
        return Model::findOrFail($id);
    });

    Route::get('{id}/parts', function($id) {
        return Model::findOrFail($id)->parts;
    });
});

Route::prefix('parts')->group(function () {
    Route::get('/', function () {
        return ModelPart::all();
    });

    Route::get('{id}', function ($id) {
        return ModelPart::findOrFail($id);
    });

    Route::prefix('by')->group(function () {
        Route::get('model/{id}', function ($id) {
            return Model::findOrFail($id)->parts;
        });

        Route::get('brand/{id}', function ($id) {
            return Brand::findOrFail($id)->parts;
        });
    });
});
