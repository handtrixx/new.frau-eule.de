<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Tutku Stephan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Favicon -->
  <link 
    rel="icon" 
    type="image/png" 
    href="<?php echo get_template_directory_uri(); ?>/assets/icons/tutilogo1.png"
  >

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <!-- Bootstrap Icons -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
  />

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: #f9f9f9;
      color: #111;
    }

    .layout {
      min-height: 100vh;
    }

    /* Left profile */
    .profile {
      background: #d1d1d1;
      padding: 40px;
      border-right: 1px solid #eee;
    }

    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }

    /* Tabs */
    .nav-pills .nav-link {
      color: #555;
      border-radius: 0;
      padding: 14px 0;
      font-weight: 600;
      position: relative;
    }

    .nav-pills .nav-link.active {
      background: none;
      color: #111;
      border-bottom: 2px solid #111;
    }

    /* Content */
    .tab-content {
      padding: 60px;
    }

    /* Photos */
    .photo-grid img {
      width: 100%;
      border-radius: 8px;
      object-fit: cover;
    }

    /* Contact */
    .contact a {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-right: 24px;
      color: #111;
      text-decoration: none;
      font-weight: 500;
    }

    footer a {
      color: #555;
    }

    footer a:hover {
      color: #111;
      text-decoration: underline;
    }

    /* =====================
       COOKIE BANNER
       ===================== */

    .cookie-banner {
      position: fixed;
      bottom: 20px;
      left: 20px;
      right: 20px;
      max-width: 520px;
      margin: auto;
      background: #111;
      color: #fff;
      padding: 14px 18px;
      border-radius: 8px;
      z-index: 9999;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .cookie-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 16px;
      font-size: 0.9rem;
    }

    .cookie-content a {
      color: #bbb;
      text-decoration: underline;
    }

    .cookie-buttons {
      display: flex;
      gap: 10px;
      white-space: nowrap;
    }

    .cookie-buttons .btn {
      font-size: 0.8rem;
      padding: 4px 10px;
    }
  </style>
</head>

<body>

<!-- =====================
     COOKIE BANNER
     ===================== -->
<div id="cookie-banner" class="cookie-banner d-none">
  <div class="cookie-content">
    <span>
      We use cookies.
      <a href="https://frau-eule.de/privacy-policy/" target="_blank">Details</a>
    </span>
    <div class="cookie-buttons">
      <button id="deny-cookies" class="btn btn-sm btn-outline-light">
        deny
      </button>
      <button id="accept-cookies" class="btn btn-sm btn-light">
        accept
      </button>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row layout">

    <!-- LEFT PROFILE -->
    <div class="col-md-4 col-lg-3 profile text-center">
      <img 
        src="<?php echo get_template_directory_uri(); ?>/assets/tutiprofil1.jpeg"
        class="profile-img"
        alt="Profile photo"
      >
      <h4>Tutku Stephan</h4>
      <p class="text-muted">Kassel, Germany</p>
      <p class="text-muted">Biking · Hiking · Design</p>
    </div>

    <!-- RIGHT CONTENT -->
    <div class="col-md-8 col-lg-9">

      <!-- TABS -->
      <ul class="nav nav-pills px-5 pt-4">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#home">
            Home
          </button>
        </li>
        <li class="nav-item ms-4">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#photos">
            Photos
          </button>
        </li>
        <li class="nav-item ms-4">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#contact">
            Contact
          </button>
        </li>
      </ul>

      <!-- TAB CONTENT -->
      <div class="tab-content">

        <!-- HOME -->
        <div class="tab-pane fade show active" id="home">
          <h2>About</h2>
          <p class="mt-3 text-muted">
            I’m an introvert who enjoys long bike rides, hiking, and taking photos in nature.
            Luckily, my city is perfect for this — when it doesn’t rain! 😊
          </p>
        </div>

        <!-- PHOTOS -->
        <div class="tab-pane fade" id="photos">
          <h2>Photos from my life</h2>
          <div class="row g-4 mt-3 photo-grid">
            <div class="col-md-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/ost1.png">
            </div>
            <div class="col-md-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/kar1.JPG">
            </div>
            <div class="col-md-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/bik1.JPG">
            </div>
            <div class="col-md-4"> <img src="<?php echo get_template_directory_uri(); ?>/assets/bp3.jpg"> </div>
          </div>
        </div>

        <!-- CONTACT -->
        <div class="tab-pane fade" id="contact">
          <h2>Contact</h2>
          <div class="contact mt-3">
            <a href="https://www.linkedin.com/in/tutkustephan/" target="_blank">
              <i class="bi bi-linkedin"></i> LinkedIn
            </a>
            <a href="https://instagram.com/tutkustephan" target="_blank">
              <i class="bi bi-instagram"></i> Instagram
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <footer class="text-center py-4 border-top mt-5">
    <small class="text-muted">
      © 2026 Tutku Stephan ·
      <a href="https://frau-eule.de/privacy-policy/">Privacy Policy</a>
    </small>
  </footer>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- COOKIE SCRIPT -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookie-banner");
    const acceptBtn = document.getElementById("accept-cookies");
    const denyBtn = document.getElementById("deny-cookies");

    if (!banner || !acceptBtn || !denyBtn) return;

    if (
      !localStorage.getItem("cookiesAccepted") &&
      !localStorage.getItem("cookiesDenied")
    ) {
      banner.classList.remove("d-none");
    }

    acceptBtn.addEventListener("click", function () {
      localStorage.setItem("cookiesAccepted", "true");
      banner.style.display = "none";
    });

    denyBtn.addEventListener("click", function () {
      localStorage.setItem("cookiesDenied", "true");
      banner.style.display = "none";
    });
  });
</script>

</body>
</html>
