<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ListController extends Controller
{
    public function index()
    {
        $json = File::get(storage_path('mersenne_primes.json'));
        $primes = json_decode($json, true);

        return view('list', compact('primes'));
    }
}