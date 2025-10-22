<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-75 shadow-sm fixed-top">
  <div class="container-fluid py-2 px-3">
    <!-- Left: Brand -->
    <a class="navbar-brand fw-bold fs-4 text-uppercase me-0" href="{{ route('pages.home') }}">
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
          <a class="nav-link px-3 rounded-pill hover-nav fs-5 text-white" href="{{ route('bookings.index') }}">Bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 rounded-pill hover-nav fs-5 text-white" href="{{ route('about') }}">About</a>
        </li>
      </ul>

      <!-- Right: Book Now button -->
      <a href="{{ route('bookings.create') }}" class="btn btn-light text-dark fw-semibold px-4 py-2 rounded-pill book-now-btn">
        Book Now
      </a>
    </div>
  </div>
</nav>

<!-- Styles -->
<style>
  .navbar {
    backdrop-filter: blur(10px);
  }

  .hover-nav {
    transition: all 0.3s ease;
  }

  .hover-nav:hover {
    background-color: rgba(255, 255, 255, 0.15);
  }

  /* Book Now Button */
  .book-now-btn {
    font-size: 1.1rem;
    transition: all 0.3s ease;
  }

  .book-now-btn:hover {
    background-color: #0d6efd;
    color: #fff !important;
    transform: translateY(-2px);
  }
</style>
