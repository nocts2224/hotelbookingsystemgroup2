@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/pagesCSS/bookingStore.css') }}">
@endsection

@section('content')

<div class="bookings-container">
  <div class="container">
    <div class="bookings-card">
      <!-- Header + Search Bar -->
      <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
        <h2 class="mb-0">
          <i class="bi bi-calendar-check me-2 text-primary" style="color: pink;"></i> All Bookings
        </h2>

        <form class="d-flex search-bar" role="search" method="GET" action="{{ route('bookings.index') }}">
          <input
            class="form-control me-2 rounded-pill"
            type="search"
            name="search"
            placeholder="Search guest name..."
            value="{{ request('search') }}"
          >
          <button class="btn btn-pink rounded-pill" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>

      <!-- Table -->
      <div class="table-responsive">
        <table class="table align-middle table-striped table-hover">
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
            @forelse($bookings as $booking)
              <tr>
                <td>{{ $booking->guest->name }}</td>
                <td>{{ $booking->room->room_number }}</td>
                <td>{{ $booking->room->type }}</td>
                <td>{{ \Carbon\Carbon::parse($booking->check_in)->format('M d, Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($booking->check_out)->format('M d, Y') }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-center text-muted py-4">
                  <i class="bi bi-info-circle me-2"></i> No bookings found.
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
