<?php

namespace App\Http\Controllers;

use App\Models\NewArrivalCard;
use Illuminate\Http\Request;

class newArivalCardController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        // Handle the file upload
        $image = $request->file('image')->store('images', 'public');

        // Create the product
        NewArrivalCard::create([
            'image' => $image,
            'title' => $validatedData['title'],
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
        ]);

        // Redirect or return response
        return redirect()->back()->with('success', 'Product created successfully.');
    }

}
