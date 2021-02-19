<?php

namespace App\Http\Controllers;

use App\Events\OrderMake;
use App\Http\Requests\OrderRequest;
use App\Mail\OrderNotify;
use App\Models\ModelPart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', ['success' => request('status', false)]);
    }

    public function store(OrderRequest $req)
    {
        $data = $req->validated();
        OrderMake::dispatch(ModelPart::find($data['part']), $data['message']);
        return redirect()->route('index', ['status' => 1]);
    }
}
