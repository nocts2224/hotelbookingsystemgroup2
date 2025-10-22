@extends('layouts.app')

@section('content')
<style>
  /* Fix section being hidden behind fixed navbar */
.booking-form-section {
  padding-top: 80px; /* equal to navbar height */
  min-height: calc(100vh - 80px);
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(rgba(13, 110, 253, 0.05), rgba(13, 110, 253, 0.1));
}

/* Adjust for smaller screens */
@media (max-width: 992px) {
  .booking-form-section {
    padding-top: 70px;
  }
}

  .booking-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
  }
</style>

<div class="booking-form-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card booking-card p-4">
          <h3 class="text-center mb-4">Book Your Stay</h3>

          {{-- Success message --}}
          @if(session('success'))
            <div class="alert alert-success text-center">
              <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            </div>
          @endif

          {{-- Validation errors --}}
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form method="POST" action="{{ route('bookings.store') }}">
            @csrf

            <!-- Guest Name -->
            <div class="mb-3">
              <label for="guest_name" class="form-label">Full Name</label>
              <input type="text" name="guest_name" id="guest_name" class="form-control" placeholder="John Doe" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label for="guest_email" class="form-label">Email</label>
              <input type="email" name="guest_email" id="guest_email" class="form-control" placeholder="john@example.com" required>
            </div>

            <!-- Phone -->
            <div class="mb-3">
              <label for="guest_phone" class="form-label">Phone Number</label>
              <input type="text" name="guest_phone" id="guest_phone" class="form-control" placeholder="09XXXXXXXXX" required>
            </div>

            <!-- Room -->
            <div class="mb-3">
              <label for="room_id" class="form-label">Room</label>
              <select name="room_id" id="room_id" class="form-select" required>
                <option value="" disabled selected>Select a room</option>
                @foreach ($rooms as $room)
                  <option value="{{ $room->id }}">Room {{ $room->room_number }} ({{ $room->type }})</option>
                @endforeach
              </select>
            </div>

            <!-- Check-in -->
            <div class="mb-3">
              <label for="check_in" class="form-label">Check-in Date</label>
              <input type="date" class="form-control" name="check_in" id="check_in" required>
            </div>

            <!-- Check-out -->
            <div class="mb-3">
              <label for="check_out" class="form-label">Check-out Date</label>
              <input type="date" class="form-control" name="check_out" id="check_out" required>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg">
                <i class="bi bi-calendar-check me-2"></i> Book Now
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
