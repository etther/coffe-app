<?php

namespace App\Http\Controllers;

use App\Models\Coffe;
use Illuminate\Http\Request;

class CoffeController extends Controller
{
    public function index()
    {
        $coffes = Coffe::all();
        return view('product', compact('coffes'));
    }
    public function order()
    {
        $coffes = Coffe::all();
        return view('order', compact('coffes'));
    }
}
