<?php
namespace App\Http\Controllers;

class MirrorsController extends Controller
{
    public function index()
    {
        return view('mirrors');
    }
}