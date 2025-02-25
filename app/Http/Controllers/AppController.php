<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $data = [
            'name' => auth()->user()->name,
        ];
        return view('app.index', $data);
    }
}
