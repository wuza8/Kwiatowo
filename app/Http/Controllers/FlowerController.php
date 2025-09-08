<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Flower;

class FlowerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'category'    => 'nullable|string|max:100',
        ]);

        // zapisz plik w storage/app/public/flowers
        $path = $request->file('image')->store('flowers', 'public');

        Flower::create([
            'name'        => $request->name,
            'description' => $request->description,
            'image'       => $path,
            'category'    => $request->category,
        ]);

        return redirect()->route('admin')->with('success', 'Dodano kwiat!');
    }

    public function show(Request $request)
    {
        $flower = Flower::find($request->query('id'));

        return view('flower', ['flower' => $flower]);
    }
}
