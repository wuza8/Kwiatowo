<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index () {
        $flowers = Flower::All();

        return view('panel', ['flowers' => $flowers]);
    }
}
