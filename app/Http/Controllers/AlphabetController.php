<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alphabet;
class AlphabetController extends Controller
{
    public function show(){
        $alphabets = Alphabet::all();
        return view('alphabets')->with('alphabets', $alphabets);
    }
}
