<?php

namespace App\Http\Controllers;

use App\Models\cardDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cardController extends Controller
{

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'imagePath' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'ptitle' => 'required|string|max:255',
            'pname' => 'required|string|max:255',
            'pprice' => 'required|numeric',
        ]);

        // Handle the file upload
        $imagePath = $request->file('imagePath')->store('images', 'public');

        // Create the product
        cardDetails::create([
            'imagePath' => $imagePath,
            'ptitle' => $validatedData['ptitle'],
            'pname' => $validatedData['pname'],
            'pprice' => $validatedData['pprice'],
        ]);

        // Redirect or return response
        return redirect()->back()->with('success', 'Product created successfully.');
    }

    // public function index()
    // {
    //     $cards = cardDetails::all();
    //     return view('components.featured', compact('cards'));
    // }
}
