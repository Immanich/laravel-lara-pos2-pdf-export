<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class MainController extends Controller
{
    public function index() {
        // $product = Product::orderBy('name')->get();

        // $product = Product::orderBy('name')->get();

        // return view('product-index', [
        //     'product' => $product
        // ]);

        $name = Name::orderBy('name')->get();
        
         return view('landing-two', [
            'name' => $name
        ]);
    }

    public function store(Request $request) {
        Name::create($request->validate([
            'name' => 'required',
            'designation' => 'required',
            // 'serial' => 'required',
            'serial_number' => 'required|numeric',
        ]));

        return redirect('/landing-two');
    }
}
