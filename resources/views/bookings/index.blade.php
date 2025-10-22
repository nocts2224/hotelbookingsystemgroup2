@extends('layouts.app')

@section('content')
<style>
  .bookings-container {
    padding: 80px 0;
    background-color: #f8f9fa;
    min-height: 100vh;
  }

  .bookings-card {
    background: #fff;
    border: none;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    padding: 2rem;
  }

  .bookings-card h2 {
    font-weight: 600;
    margin-bottom: 1.5rem;
  }

  .table thead {
    background-color: #0d6efd;
    color: #fff;
  }

  .table tbody tr:hover {
    background-color: #f1f5ff;
    transition: background-color 0.3s ease;
  }

  .search-bar {
    max-width: 400px;
  }
</style>

<div class="bookings-container">
  <div class="container">
    <div class="bookings-card">
      <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
        <h2><i class="bi bi-calendar-check me-2 text-primary"></i> All Bookings</h2>

        <!-- Optional Search Bar -->
        <form class="d-flex search-bar" role="search">
          <input class="form-control me-2 rounded-pill" type="search" placeholder="Search guest or room..." aria-label="Search">
          <button class="btn btn-primary rounded-pill" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>

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
