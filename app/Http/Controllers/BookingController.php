<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Guest;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $query = Booking::with(['room', 'guest']);

        if ($request->filled('search')) {
            $search = $request->search;
            $query->whereHas('guest', function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%");
            });
        }

        $bookings = $query->get();

        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $rooms = Room::all();

        return view('bookings.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'guest_email' => 'required|email|max:255',
            'guest_phone' => 'required|string|max:20',
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
        ]);

        // Create or find guest
        $guest = Guest::firstOrCreate(
            ['email' => $request->guest_email],
            [
                'name' => $request->guest_name,
                'contact_number' => $request->guest_phone,
            ]
        );

        // Create booking
        Booking::create([
            'guest_id' => $guest->id,
            'room_id' => $request->room_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
        ]);

        // Redirect with success message
        return redirect()->route('bookings.create')->with('success', 'Booking successfully created!');
    }
}
