@extends('layouts.app')

@section('content')
<h2>All Bookings</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Guest</th>
            <th>Room</th>
            <th>Type</th>
            <th>Check-in</th>
            <th>Check-out</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr>
            <td>{{ $booking->guest->name }}</td>
            <td>{{ $booking->room->room_number }}</td>
            <td>{{ $booking->room->type }}</td>
            <td>{{ $booking->check_in }}</td>
            <td>{{ $booking->check_out }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
