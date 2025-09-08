<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $flowers = Flower
        ::when(request('category') && request('category') != '', function($query){
            $query->where('category', request('category'));
        })
        ->when(request('name') && request('name') != '', function($query){
            $query->where('name', 'like', '%' . request('name') . '%');
        })->get();

        $categories = [
            (object) ['name' => 'Szczęście', 'slug' => 'happiness', 'color' => '#f1f1005c'],
            (object) ['name' => 'Neutralny', 'slug' => 'neutral', 'color' => '#0070f141'],
            (object) ['name' => 'Nostalgia', 'slug' => 'nostalgic', 'color' => '#8900f133'],
            (object) ['name' => 'Miłość', 'slug' => 'love', 'color' => '#f100003e'],
        ];

        return view('home', ['flowers' => $flowers, 'categories' => $categories]);
    }
}
