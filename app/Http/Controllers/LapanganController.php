<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;
use Illuminate\Support\Facades\Storage;


class LapanganController extends Controller

{
    /**
     * Display a listing of the lapangan.
     */
    public function index()
    {
        // Retrieve all lapangan records from the database
        $lapangans = Lapangan::all();

        // Return a view and pass the lapangan data
        return view('layouts.main', compact('lapangans'));
    }

    /**
     * Show the form for creating a new lapangan.
     */
    public function create()
    {
        // Return the form to create a new lapangan
        return view('lapangan.create');
    }

    /**
     * Store a newly created lapangan in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price_per_hour' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload if exists
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('lapangan_images', 'public');
        }

        // Create a new lapangan record
        Lapangan::create([
            'name' => $validated['name'],
            'location' => $validated['location'],
            'price_per_hour' => $validated['price_per_hour'],
            'image' => isset($imagePath) ? $imagePath : null,
        ]);

        // Redirect with success message
        return redirect()->route('lapangan.index')->with('success', 'Lapangan created successfully.');
    }

    /**
     * Display the specified lapangan.
     */
    public function show($id)
    {
        // Find the lapangan by ID
        $lapangan = Lapangan::findOrFail($id);

        // Return the view to display a single lapangan
        return view('lapangan.show', compact('lapangan'));
    }

    /**
     * Show the form for editing the specified lapangan.
     */
    public function edit($id)
    {
        // Find the lapangan by ID
        $lapangan = Lapangan::findOrFail($id);

        // Return the form to edit the lapangan
        return view('lapangan.edit', compact('lapangan'));
    }

    /**
     * Update the specified lapangan in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price_per_hour' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the lapangan by ID
        $lapangan = Lapangan::findOrFail($id);

        // Handle file upload if exists
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($lapangan->image) {
                Storage::delete('public/' . $lapangan->image);
            }
            $imagePath = $request->file('image')->store('lapangan_images', 'public');
        }

        // Update the lapangan record
        $lapangan->update([
            'name' => $validated['name'],
            'location' => $validated['location'],
            'price_per_hour' => $validated['price_per_hour'],
            'image' => isset($imagePath) ? $imagePath : $lapangan->image,
        ]);

        // Redirect with success message
        return redirect()->route('lapangan.index')->with('success', 'Lapangan updated successfully.');
    }

    /**
     * Remove the specified lapangan from storage.
     */
    public function destroy($id)
    {
        // Find the lapangan by ID
        $lapangan = Lapangan::findOrFail($id);

        // Delete the image file if it exists
        if ($lapangan->image) {
            Storage::delete('public/' . $lapangan->image);
        }

        // Delete the lapangan record
        $lapangan->delete();

        // Redirect with success message
        return redirect()->route('lapangan.index')->with('success', 'Lapangan deleted successfully.');
    }
}
