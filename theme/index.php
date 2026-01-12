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

  <!-- Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
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
      background: #fff;
      padding: 40px;
      border-right: 1px solid #eee;
    }

    .profile img {
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
      padding: 12px 0;
      font-weight: 500;
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

    /* Photo grid */
    .photo-grid img {
      width: 100%;
      border-radius: 8px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .photo-grid img:hover {
      transform: scale(1.03);
    }

    /* Contact */
    .contact a {
      display: inline-block;
      margin-right: 20px;
      color: #111;
      text-decoration: none;
      position: relative;
    }

    .contact a::after {
      content: "";
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: #111;
      transition: width 0.3s ease;
    }

    .contact a:hover::after {
      width: 100%;
    }
  </style>
</head>

<body>

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
      <p class="text-muted mb-1">Kassel, Germany</p>
      <p class="text-muted">Photography · Travel · Design</p>
    </div>

    <!-- RIGHT CONTENT -->
    <div class="col-md-8 col-lg-9">

      <!-- TABS -->
      <ul class="nav nav-pills px-5 pt-4" role="tablist">
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
            I enjoy creating simple digital experiences and documenting moments from everyday life.
            Currently based in City, focusing on minimal and thoughtful design.
          </p>
        </div>

        <!-- PHOTOS -->
        <div class="tab-pane fade" id="photos">
          <h2>Photos from my life</h2>

          <div class="row g-4 mt-3 photo-grid">
            <div class="col-md-4"><img src="photo1.jpg"></div>
            <div class="col-md-4"><img src="photo2.jpg"></div>
            <div class="col-md-4"><img src="photo3.jpg"></div>
            <div class="col-md-6"><img src="photo4.jpg"></div>
            <div class="col-md-6"><img src="photo5.jpg"></div>
          </div>
        </div>

        <!-- CONTACT -->
        <div class="tab-pane fade" id="contact">
          <h2>Contact</h2>
          <div class="contact mt-3">
            <a href="https://www.linkedin.com/in/tutkustephan/" target="_blank">LinkedIn</a>
            <a href="https://instagram.com/tutkustephan" target="_blank">Instagram</a>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
