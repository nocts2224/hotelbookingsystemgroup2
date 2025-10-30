<nav class="navbar navbar-expand-lg navbar-dark bg-pink bg-opacity-75 shadow-sm fixed-top">
  <div class="container-fluid py-2 px-3">
    <!-- Left: Brand -->
    <a class="navbar-brand fw-bold fs-4 text-uppercase me-0 text-pink-brand" href="{{ route('pages.home') }}">
      <i class="bi bi-building"></i> Hotel System
    </a>

    <!-- Mobile toggle -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Center links + right button -->
    <div class="collapse navbar-collapse" id="navbarNav">

      <!-- Center links -->
      <ul class="navbar-nav mx-auto align-items-center gap-2">
        <li class="nav-item">
          <a class="nav-link px-3 rounded-pill hover-nav fs-5 text-white" href="{{ route('pages.home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 rounded-pill hover-nav fs-5 text-white" href="{{ route('pages.rooms') }}">Room</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 rounded-pill hover-nav fs-5 text-white" href="{{ route('pages.guest') }}">Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 rounded-pill hover-nav fs-5 text-white" href="{{ route('bookings.index') }}">Bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 rounded-pill hover-nav fs-5 text-white" href="{{ route('about') }}">About</a>
        </li>
      </ul>

      <!-- Right: Book Now button -->
      <a href="{{ route('bookings.create') }}" class="btn btn-pink fw-semibold px-4 py-2 rounded-pill book-now-btn">
        Book Now
      </a>
    </div>
  </div>
</nav>

<!-- Styles -->
<style>
  /* Navbar Background */
  .navbar {
    backdrop-filter: blur(10px);
    background: rgba(232, 125, 164, 0.85) !important; /* soft pink */
  }

  /* Brand */
  .text-pink-brand {
    color: #fff !important;
  }

  .text-pink-brand:hover {
    color: #ffe6ef !important;
  }

  /* Links hover */
  .hover-nav {
    transition: all 0.3s ease;
  }

  .hover-nav:hover {
    background-color: rgba(255, 182, 193, 0.25); /* light pink hover */
    color: #fff !important;
  }

  /* Book Now Button */
  .btn-pink {
    background-color: #e87da4;
    color: #fff;
    font-size: 1.1rem;
    transition: all 0.3s ease;
  }

  .btn-pink:hover {
    background-color: #ffb6c1;
    color: #fff !important;
    transform: translateY(-2px);
  }
</style>
