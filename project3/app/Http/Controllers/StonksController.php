<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stonk;

class StonksController extends Controller
{
   
    public function index()
    {
        $stonks = Stonk::all();
        return view('stonks.contact', compact('stonks'));
    }

}
