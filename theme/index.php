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

    .tab-content {
      padding: 60px;
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

    <!-- LEFT -->
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

    <!-- RIGHT -->
    <div class="col-md-8 col-lg-9">
      <div class="tab-content">
        <h2>About</h2>
        <p class="text-muted mt-3">
          I’m an introvert who enjoys long bike rides, hiking, and taking photos in nature.
        </p>
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
