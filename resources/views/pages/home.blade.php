@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/pagesCSS/home.css') }}">
@endsection

@section('content')

<!-- HERO SECTION -->
<div class="hero-section">
  <div class="overlay"></div>
  <div class="hero-content text-white text-center">
    <h1>Welcome to Our Hotel</h1>
    <p>Experience comfort and luxury — book your perfect stay today!</p>
    <a href="{{ route('bookings.create') }}" class="btn btn-light btn-book shadow">
      <i class="bi bi-calendar-check me-2"></i> Book Now
    </a>
  </div>
</div>

<!-- FEATURES SECTION -->
<section class="features d-flex align-items-center">
  <div class="container text-center">
    <h2 class="fw-bold mb-5">Why Choose Us?</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <i class="bi bi-wifi feature-icon"></i>
        <h5>Free High-Speed Wi-Fi</h5>
        <p class="text-muted">Stay connected anywhere in our hotel with blazing fast internet access.</p>
      </div>
      <div class="col-md-4">
        <i class="bi bi-cup-hot feature-icon"></i>
        <h5>Complimentary Breakfast</h5>
        <p class="text-muted">Start your day right with a delicious breakfast on the house.</p>
      </div>
      <div class="col-md-4">
        <i class="bi bi-water feature-icon"></i>
        <h5>Luxury Pool & Spa</h5>
        <p class="text-muted">Unwind and rejuvenate with world-class amenities designed for relaxation.</p>
      </div>
    </div>
  </div>
</section>

<!-- ROOMS SECTION -->
<section class="rooms d-flex align-items-center py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-5">Featured Rooms</h2>

    <div class="carousel-wrapper">
      <div class="carousel-track">
        <!-- Room Cards -->
        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/deluxe.jpg') }}" class="card-img-top" alt="Deluxe Room">
          <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text text-muted">Cozy and elegant with a city view, perfect for couples.</p>
          </div>
        </div>

        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/executive suite.jpg') }}" class="card-img-top" alt="Executive Suite">
          <div class="card-body">
            <h5 class="card-title">Executive Suite</h5>
            <p class="card-text text-muted">Spacious suite with living area and complimentary minibar.</p>
          </div>
        </div>

        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/family.jpg') }}" class="card-img-top" alt="Family Room">
          <div class="card-body">
            <h5 class="card-title">Family Room</h5>
            <p class="card-text text-muted">Comfort and space for the whole family — everyone’s welcome!</p>
          </div>
        </div>

        <!-- Duplicate for smooth loop -->
        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/deluxe.jpg') }}" class="card-img-top" alt="Deluxe Room">
          <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text text-muted">Cozy and elegant with a city view, perfect for couples.</p>
          </div>
        </div>

        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/executive suite.jpg') }}" class="card-img-top" alt="Executive Suite">
          <div class="card-body">
            <h5 class="card-title">Executive Suite</h5>
            <p class="card-text text-muted">Spacious suite with living area and complimentary minibar.</p>
          </div>
        </div>

        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/family.jpg') }}" class="card-img-top" alt="Family Room">
          <div class="card-body">
            <h5 class="card-title">Family Room</h5>
            <p class="card-text text-muted">Comfort and space for the whole family — everyone’s welcome!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
