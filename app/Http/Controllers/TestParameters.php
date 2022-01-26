<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestParameters extends Controller
{
    public function getParameters($p1, $p2) {
        // return view('site.testParameters', ['p1' => $p1, 'p2' => $p2]); // Array Associativo
        return view('site.testParameters', compact('p1', 'p2')); // Compact
        // return view('site.testParameters')->with('p1', $p1)->with('p2', $p2); // With
    }
}
