<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view()
    {
        $names = ['Mayuri', 'Sanath', 'Sasindu'];

        return view('home')->with(['names' => $names]);
    }
}
