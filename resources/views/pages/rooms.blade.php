@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/pagesCSS/rooms.css') }}">
@endsection

@section('content')
    <div class="rooms-container">
        <div class="container">
            <div class="rooms-card">
                <!-- Header + Search Bar -->
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                    <h2 class="mb-0">
                        <i class="bi bi-door-open me-2 text-primary" style="color: pink;"></i> All Rooms
                    </h2>

                    <form class="d-flex search-bar" role="search" method="GET" action="{{ route('pages.rooms') }}">
                        <input class="form-control me-2 rounded-pill" type="search" name="search"
                            placeholder="Search room type or number..." value="{{ request('search') }}">
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
                                <th>Room Number</th>
                                <th>Type</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($rooms as $room)
                                <tr>
                                    <td>{{ $room->room_number }}</td>
                                    <td>{{ $room->type }}</td>
                                    <td>
                                        @if($room->availability)
                                            <span class="badge bg-success">Available</span>
                                        @else
                                            <span class="badge bg-secondary">Occupied</span>
                                        @endif

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-4">
                                        <i class="bi bi-info-circle me-2"></i> No rooms found.
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