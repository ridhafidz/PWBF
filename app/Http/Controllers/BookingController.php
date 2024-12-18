<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Lapangan;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the bookings.
     */
    public function index()
    {
        // Retrieve all booking records from the database
        $bookings = Booking::all();

        // Return a view and pass the bookings data
        return view('layouts.main', compact('bookings'));
    }

    /**
     * Show the form for creating a new booking.
     */
    public function create()
    {
        // Retrieve all lapangan records for selecting
        $lapangans = Lapangan::all();

        // Return the form to create a new booking
        return view('bookings.create', compact('lapangans'));
    }

    /**
     * Store a newly created booking in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'lapangan_id' => 'required|exists:lapangan,id',
            'user_name' => 'required|string|max:255',
            'booking_time' => 'required|date|after:now',
            'duration' => 'required|numeric|min:1',
        ]);

        // Create a new booking record
        Booking::create([
            'lapangan_id' => $validated['lapangan_id'],
            'user_name' => $validated['user_name'],
            'booking_time' => $validated['booking_time'],
            'duration' => $validated['duration'],
        ]);

        // Redirect with success message
        return redirect()->route('booking.index')->with('success', 'Booking created successfully.');
    }

    /**
     * Display the specified booking.
     */
    public function show($id)
    {
        // Find the booking by ID
        $booking = Booking::findOrFail($id);

        // Return the view to display a single booking
        return view('booking.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified booking.
     */
    public function edit($id)
    {
        // Find the booking by ID
        $booking = Booking::findOrFail($id);

        // Retrieve all lapangan records for selecting
        $lapangans = Lapangan::all();

        // Return the form to edit the booking
        return view('booking.edit', compact('booking', 'lapangans'));
    }

    /**
     * Update the specified booking in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'lapangan_id' => 'required|exists:lapangans,id',
            'user_name' => 'required|string|max:255',
            'booking_time' => 'required|date|after:now',
            'duration' => 'required|numeric|min:1',
        ]);

        // Find the booking by ID
        $booking = Booking::findOrFail($id);

        // Update the booking record
        $booking->update([
            'lapangan_id' => $validated['lapangan_id'],
            'user_name' => $validated['user_name'],
            'booking_time' => $validated['booking_time'],
            'duration' => $validated['duration'],
        ]);

        // Redirect with success message
        return redirect()->route('booking.index')->with('success', 'Booking updated successfully.');
    }

    /**
     * Remove the specified booking from storage.
     */
    public function destroy($id)
    {
        // Find the booking by ID
        $booking = Booking::findOrFail($id);

        // Delete the booking record
        $booking->delete();

        // Redirect with success message
        return redirect()->route('booking.index')->with('success', 'Booking deleted successfully.');
    }
}
