@extends('layouts.app')

@section('content')
<style>
  /* === HERO SECTION STYLES === */
  .about-hero {
    /* background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
      url('{{ asset('images/hotel-lobby.jpg') }}') center/cover no-repeat; */
    color: #fff;
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .about-hero h1 {
    font-size: 3rem;
    font-weight: 700;
  }

  /* === ABOUT SECTION STYLES === */
  .about-section {
    padding: 80px 0;
    background-color: #f8f9fa;
  }

  .about-section h2 {
    font-weight: 600;
  }

  .about-icon {
    font-size: 2.5rem;
    color: #0d6efd;
  }

  /* === TEAM SECTION STYLES === */
  .team-section {
    padding: 60px 0;
    background-color: #fff;
  }

  .team-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }

  .team-card:hover {
    transform: translateY(-5px);
  }

  .team-carousel-wrapper {
      overflow: hidden;
      width: 100%;
      position: relative;
      margin-top: 2rem;
    }

    .team-carousel-track {
      display: flex;
      gap: 1.5rem;
      animation: teamScroll 25s linear infinite;
    }

    @keyframes teamScroll {
      from {
        transform: translateX(0);
      }
      to {
        transform: translateX(-50%);
      }
    }

    .team-card {
      flex: 0 0 22%;
      min-width: 250px;
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .team-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .team-card img {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    @media (max-width: 992px) {
      .team-card {
        flex: 0 0 35%;
      }
    }

    @media (max-width: 576px) {
      .team-card {
        flex: 0 0 70%;
      }
    }
  </style>
</style>

<div class="about-hero">
  <div class="text-black">
    <h1>About Our Hotel</h1>
    <p class="lead mt-3">A comfortable stay, built with passion and technology.</p>
  </div>
</div>


<!-- About -->
<section class="about-section text-center">
  <div class="container">
    <!-- Section title -->
    <h2 class="mb-4">Our Story</h2>

    <!-- Section text -->
    <p class="text-muted mb-5 mx-auto" style="max-width: 700px;">
      This Hotel Booking System was developed as a Laravel project demo — designed to show how modern web technologies
      can simplify room reservations, guest management, and hotel operations.
      We focused on speed, usability, and elegance to create a seamless experience for both guests and administrators.
    </p>

    <!-- Feature icons row -->
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <i class="bi bi-code-slash about-icon mb-3"></i>
        <h5>Built with Laravel</h5>
        <p class="text-muted">Developed using Laravel and Livewire to ensure modern, reactive performance.</p>
      </div>

      <div class="col-md-4">
        <i class="bi bi-brush about-icon mb-3"></i>
        <h5>Clean & Modern Design</h5>
        <p class="text-muted">Styled with Bootstrap 5 and Tailwind-inspired aesthetics for a fresh, professional look.</p>
      </div>

      <div class="col-md-4">
        <i class="bi bi-shield-lock about-icon mb-3"></i>
        <h5>Secure & Scalable</h5>
        <p class="text-muted">Follows best practices in authentication, validation, and scalable architecture.</p>
      </div>
    </div>
  </div>
</section>


<!-- Da team -->
<section class="team-section text-center">
  <div class="container">
    <h2 class="mb-4">Meet the Team</h2>

    <div class="team-carousel-wrapper">
      <div class="team-carousel-track">
        <!-- TEAM CARD 1 -->
        <div class="card team-card">
          <img src="{{ asset('images/team1.jpg') }}" class="card-img-top" alt="Team Member">
          <div class="card-body">
            <h5 class="card-title mb-1">Dodax</h5>
            <p class="text-muted small">Team Leader x Chief Developer</p>
          </div>
        </div>

        <!-- TEAM CARD 2 -->
        <div class="card team-card">
          <img src="{{ asset('images/team2.jpg') }}" class="card-img-top" alt="Team Member">
          <div class="card-body">
            <h5 class="card-title mb-1">LJ</h5>
            <p class="text-muted small">The Vibe Coder</p>
          </div>
        </div>

        <!-- TEAM CARD 3 -->
        <div class="card team-card">
          <img src="{{ asset('images/team3.jpg') }}" class="card-img-top" alt="Team Member">
          <div class="card-body">
            <h5 class="card-title mb-1">Krishiel</h5>
            <p class="text-muted small">Team Support x UI/UX Designer</p>
          </div>
        </div>

        <!-- TEAM CARD 4 -->
        <div class="card team-card">
          <img src="{{ asset('images/team3.jpg') }}" class="card-img-top" alt="Team Member">
          <div class="card-body">
            <h5 class="card-title mb-1">Mayang</h5>
            <p class="text-muted small">Developer x Dancer</p>
          </div>
        </div>

        <!-- duplicate set for infinite loop -->
        <div class="card team-card">
          <img src="{{ asset('images/team1.jpg') }}" class="card-img-top" alt="Team Member">
          <div class="card-body">
            <h5 class="card-title mb-1">Dodax</h5>
            <p class="text-muted small">Team Leader x Chief Developer</p>
          </div>
        </div>

        <div class="card team-card">
          <img src="{{ asset('images/team2.jpg') }}" class="card-img-top" alt="Team Member">
          <div class="card-body">
            <h5 class="card-title mb-1">LJ</h5>
            <p class="text-muted small">The Vibe Coder</p>
          </div>
        </div>

        <div class="card team-card">
          <img src="{{ asset('images/team3.jpg') }}" class="card-img-top" alt="Team Member">
          <div class="card-body">
            <h5 class="card-title mb-1">Krishiel</h5>
            <p class="text-muted small">Team Support x UI/UX Designer</p>
          </div>
        </div>

        <div class="card team-card">
          <img src="{{ asset('images/team3.jpg') }}" class="card-img-top" alt="Team Member">
          <div class="card-body">
            <h5 class="card-title mb-1">Mayang</h5>
            <p class="text-muted small">Developer x Dancer</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
