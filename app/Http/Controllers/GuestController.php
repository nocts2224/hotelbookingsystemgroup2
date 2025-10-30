<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        $guests = Guest::all();
        return view('pages.guest', compact('guests'));

    }
}
