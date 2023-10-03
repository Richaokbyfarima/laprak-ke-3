<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Halaman1Controller extends Controller
{
    public function halaman1() {
        return view('/halaman-1');
    }
}
