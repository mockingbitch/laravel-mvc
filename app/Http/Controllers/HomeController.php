<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function handleNumber(Request $request) { //$_POST
        $number = $request->number;
        $sum = $number+1000;
        
        return view('newView', [
            'sum' => $sum
        ]);
    }

    
}
