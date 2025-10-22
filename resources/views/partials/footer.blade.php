<footer class="bg-dark text-white pt-4 pb-3 mt-5">
  <div class="container text-center">
    <div class="mb-3">
      <a href="{{ route('pages.home') }}" class="text-white text-decoration-none fw-bold fs-5">
        <i class="bi bi-building"></i> Hotel System
      </a>
    </div>

    <div class="d-flex justify-content-center gap-4 mb-3">
      <a href="{{ route('pages.home') }}" class="footer-link text-white-50 text-decoration-none">Home</a>
      <a href="{{ route('bookings.index') }}" class="footer-link text-white-50 text-decoration-none">Bookings</a>
      <a href="{{ route('about') }}" class="footer-link text-white-50 text-decoration-none">About</a>
    </div>

    <div class="social-icons d-flex justify-content-center gap-3 mb-2">
      <a href="#" class="text-white-50 fs-5"><i class="bi bi-facebook"></i></a>
      <a href="#" class="text-white-50 fs-5"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="text-white-50 fs-5"><i class="bi bi-instagram"></i></a>
    </div>

    <p class="text-white-50 mb-0 small">
      &copy; {{ date('Y') }} Hotel Booking System. All rights reserved.
    </p>
  </div>
</footer>

<style>
  footer {
    backdrop-filter: blur(10px);
  }
  .footer-link:hover,
  .social-icons a:hover {
    color: #fff !important;
    transition: color 0.3s ease;
  }
</style>
