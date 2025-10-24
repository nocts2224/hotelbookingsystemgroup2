<footer class="footer-section text-white pt-4 pb-3 mt-5">
  <div class="container text-center">
    <!-- Brand -->
    <div class="mb-3">
      <a href="{{ route('pages.home') }}" class="footer-brand text-decoration-none fw-bold fs-5">
        <i class="bi bi-building"></i> Hotel System
      </a>
    </div>

    <!-- Navigation Links -->
    <div class="d-flex justify-content-center gap-4 mb-3">
      <a href="{{ route('pages.home') }}" class="footer-link text-decoration-none">Home</a>
      <a href="{{ route('bookings.index') }}" class="footer-link text-decoration-none">Bookings</a>
      <a href="{{ route('about') }}" class="footer-link text-decoration-none">About</a>
    </div>

    <!-- Social Icons -->
    <div class="social-icons d-flex justify-content-center gap-3 mb-2">
      <a href="#" class="social-link fs-5"><i class="bi bi-facebook"></i></a>
      <a href="#" class="social-link fs-5"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="social-link fs-5"><i class="bi bi-instagram"></i></a>
    </div>

    <!-- Copyright -->
    <p class="footer-text mb-0 small">
      &copy; {{ date('Y') }} Hotel Booking System. All rights reserved.
    </p>
  </div>
</footer>

<!-- Styles -->
<style>
  :root {
    --main-pink: #f8c5d6;
    --soft-pink: #ffe6ef;
    --accent: #e87da4;
    --lavender: #e6d9ff;
    --cream: #fff9f9;
  }

  /* Footer Section */
  .footer-section {
    background: linear-gradient(135deg, var(--accent), var(--lavender));
    color: white;
    backdrop-filter: blur(10px);
    position: relative;
    overflow: hidden;
    animation: fadeIn 1.2s ease;
  }

  /* Floating sparkles ✨ */
  .footer-section::after {
    content: "✨";
    position: absolute;
    font-size: 3rem;
    color: rgba(255, 255, 255, 0.4);
    top: 10%;
    left: 5%;
    animation: sparkleMove 8s infinite ease-in-out;
  }

  @keyframes sparkleMove {
    0%, 100% { transform: translate(0, 0) rotate(0deg); opacity: 0.5; }
    50% { transform: translate(50px, 20px) rotate(360deg); opacity: 1; }
  }

  /* Brand */
  .footer-brand {
    color: #fff;
    font-weight: 700;
    transition: color 0.3s ease;
  }

  .footer-brand:hover {
    color: #ffe6ef;
  }

  /* Links */
  .footer-link {
    color: #fff8fb;
    opacity: 0.85;
    transition: all 0.3s ease;
  }

  .footer-link:hover {
    color: #fff;
    opacity: 1;
    text-shadow: 0 0 10px rgba(255, 182, 193, 0.8);
  }

  /* Social Icons */
  .social-link {
    color: #fff8fb;
    opacity: 0.8;
    transition: all 0.3s ease;
  }

  .social-link:hover {
    color: #fff;
    opacity: 1;
    transform: translateY(-3px);
    text-shadow: 0 0 10px rgba(255, 182, 193, 0.7);
  }

  /* Footer text */
  .footer-text {
    color: #fff8fb;
    opacity: 0.8;
    transition: opacity 0.3s ease;
  }

  .footer-text:hover {
    opacity: 1;
  }

  /* Animation */
  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
</style>
