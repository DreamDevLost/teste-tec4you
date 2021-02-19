<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            if ($e instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {

                return response()->json([
                    'message' => 'Record not found',
                ], 404);
            }
        });
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
            if ($request->expectsJson()) {
                return response()->json([
                    'error'     =>  true,
                    'message'   => 'Registro não encontrado.',
                ], 404);
            }
        }
        return parent::render($request, $e);
    }
}
