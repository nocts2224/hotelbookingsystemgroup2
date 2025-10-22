@extends('layouts.app')

@section('content')
<style>
  .hero-section {
    /* background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),
      url('{{ asset('images/hotel.jpg') }}') center/cover no-repeat; */
    height: 100vh;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    scroll-snap-align: start;
  }

  .hero-content h1 {
    font-size: 3.5rem;
    font-weight: 700;
  }

  .hero-content p {
    font-size: 1.25rem;
    margin-top: 1rem;
    opacity: 0.9;
  }

  .btn-book {
    margin-top: 2rem;
    padding: 0.75rem 2rem;
    font-size: 1.1rem;
    border-radius: 30px;
    transition: all 0.3s ease;
  }

  .btn-book:hover {
    background-color: #0d6efd;
    transform: translateY(-3px);
  }

  /* === SECTIONS === */
  section {
    scroll-snap-align: start;
    min-height: 100vh;
    padding: 100px 0;
  }

  .features {
    background: #f8f9fa;
  }

  .rooms {
    background: #fff;
  }

  .contact {
    background: #f8f9fa;
  }

  /* === SCROLL SNAP === */
  html {
    scroll-behavior: smooth;
  }

  body {
    scroll-snap-type: y mandatory;
    overflow-y: scroll;
  }

  .feature-icon {
    font-size: 2.5rem;
    color: #0d6efd;
    margin-bottom: 15px;
  }

  .room-card {
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .room-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    /* Optional: smoother carousel transitions */
    .carousel-item {
      transition: transform 1s ease-in-out;
    }

    .carousel-wrapper {
      overflow: hidden;
      position: relative;
      width: 100%;
    }

    .carousel-track {
      display: flex;
      gap: 1.5rem;
      animation: scroll 20s linear infinite;
    }

    @keyframes scroll {
      from {
        transform: translateX(0);
      }
      to {
        transform: translateX(-50%);
      }
    }

    .room-card {
      flex: 0 0 30%;
      min-width: 300px;
      border-radius: 15px;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .room-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    /* Responsive tweaks */
    @media (max-width: 992px) {
      .room-card {
        flex: 0 0 45%;
      }
    }

    @media (max-width: 576px) {
      .room-card {
        flex: 0 0 80%;
      }
    }
</style>

<!-- HERO SECTION -->
<div class="hero-section">
  <div class="hero-content text-black">
    <h1>Welcome to Our Hotel</h1>
    <p>Experience comfort and luxury — book your perfect stay today!</p>
    <a href="{{ route('bookings.index') }}" class="btn btn-light btn-book shadow">
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
        <!-- Repeating cards rawr -->
        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/room1.jpg') }}" class="card-img-top" alt="Deluxe Room">
          <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text text-muted">Cozy and elegant with a city view, perfect for couples.</p>
          </div>
        </div>

        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/room2.jpg') }}" class="card-img-top" alt="Suite">
          <div class="card-body">
            <h5 class="card-title">Executive Suite</h5>
            <p class="card-text text-muted">Spacious suite with living area and complimentary minibar.</p>
          </div>
        </div>

        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/room3.jpg') }}" class="card-img-top" alt="Family Room">
          <div class="card-body">
            <h5 class="card-title">Family Room</h5>
            <p class="card-text text-muted">Comfort and space for the whole family — everyone’s welcome!</p>
          </div>
        </div>

        <!-- duplicate for infinite loop illusion -->
        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/room1.jpg') }}" class="card-img-top" alt="Deluxe Room">
          <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text text-muted">Cozy and elegant with a city view, perfect for couples.</p>
          </div>
        </div>

        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/room2.jpg') }}" class="card-img-top" alt="Suite">
          <div class="card-body">
            <h5 class="card-title">Executive Suite</h5>
            <p class="card-text text-muted">Spacious suite with living area and complimentary minibar.</p>
          </div>
        </div>

        <div class="card border-0 shadow-sm room-card">
          <img src="{{ asset('images/room3.jpg') }}" class="card-img-top" alt="Family Room">
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
