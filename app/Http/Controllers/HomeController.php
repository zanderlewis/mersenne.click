<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->has('n')) {
            $request->merge(['n' => '2']);
        }
        return view('welcome', compact('request'));
    }
}