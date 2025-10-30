@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/pagesCSS/guest.css') }}">
@endsection

@section('content')
<div class="guests-container">
  <div class="container">
    <div class="guests-card">
      <!-- Header + Search Bar -->
      <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
        <h2 class="mb-0">
          <i class="bi bi-people-fill me-2 text-primary" style="color: pink;"></i> All Guests
        </h2>

        <form class="d-flex search-bar" role="search" method="GET" action="{{ route('pages.guest') }}">
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
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Registered Date</th>
            </tr>
          </thead>
          <tbody>
            @forelse($guests as $guest)
              <tr>
                <td>{{ $guest->name }}</td>
                <td>{{ $guest->email }}</td>
                <td>{{ $guest->contact_number }}</td>
                <td>{{ \Carbon\Carbon::parse($guest->created_at)->format('M d, Y') }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="text-center text-muted py-4">
                  <i class="bi bi-info-circle me-2"></i> No guests found.
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
