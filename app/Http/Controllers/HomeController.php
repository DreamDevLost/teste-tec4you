<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(OrderRequest $req)
    {
        // dd('elwrewklmr');
        $req->validated();
        // $data = $req->validate([
        //     'brand' => 'required',
        //     'model' => 'required',
        //     'part' => 'required',
        //     'message' => 'required',
        // ], );

        // redirect('/');
        // dd($data);
        // dd($req->validated());

        // return view('index');
    }
}
