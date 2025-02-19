<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function showForm()
    {
        return view('sum1');
    }

    public function calculateSum(Request $request)
    {
        $a = $request->input('a', 0);
        $b = $request->input('b', 0);
        $sum = $a + $b;
        return view('sum', compact('sum', 'a', 'b'));
    }
}
