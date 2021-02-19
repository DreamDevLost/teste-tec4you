<?php

use App\Events\OrderMake;
use App\Http\Requests\OrderApiRequest;
use App\Mail\OrderNotify;
use App\Models\Brand;
use App\Models\Model;
use App\Models\ModelPart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::post('order', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'part_id' => 'required|numeric',
        'message' => 'required|string'
    ], [
        'required'  => "O parâmetro ':attribute' é necessário.",
        'numeric'   => "O parâmetro ':attribute precisam ser numérico.'",
        'string'    => "O parâmetro ':attribute' precisam ser uma string.'"
    ]);
    if ($validator->fails()) {
        return response()->json([
            'error'     => true,
            'message'  => $validator->getMessageBag()->getMessages()
        ], 500);
    } else {
        OrderMake::dispatch(ModelPart::findOrFail($request->post('part_id')), $request->post('message'));
        return response()->json([
            'error'     => false,
            'message'   => 'O pedido foi feito com sucesso.'
        ]);
    }

});

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
