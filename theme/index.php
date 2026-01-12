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
  padding: 14px 0;
  font-weight: 600;          /* bold */
  letter-spacing: 0.02em;    /* additional design */
  position: relative;
  transition: color 0.25s ease;
}
.nav-pills .nav-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  width: 0;
  height: 3px;               /*  bolder */
  background: #111;
  transition: width 0.3s ease;
}

.nav-pills .nav-link.active::after {
  width: 100%;
}


    .nav-pills .nav-link.active {
      background: none;
      color: #111;
      border-bottom: 2px solid #111;
    }
.nav-pills .nav-link:hover {
  color: #111;
}

    /* Content */
    .tab-content {
      padding: 60px;
    }


    /* Tab pane additional */

    .tab-pane {
  animation: fadeSlide 0.35s ease;
}

@keyframes fadeSlide {
  from {
    opacity: 0;
    transform: translateY(6px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
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


/* Tab titles when opened */
#contact.show .contact-title,
#contact.show .contact a {
  opacity: 0;
  transform: translateY(6px);
  animation: contactFade 0.4s ease both;
}

/* Staggered animation */
#contact.show .contact a:nth-of-type(1) {
  animation-delay: 0.1s;
}

#contact.show .contact a:nth-of-type(2) {
  animation-delay: 0.2s;
}

/* Keyframes */
@keyframes contactFade {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Contact links base style */
.contact a {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  margin-right: 24px;
  color: #111;
  text-decoration: none;
  position: relative;
  font-weight: 500;
}

/* Underline hover effect */
.contact a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -4px;
  width: 0;
  height: 2px;
  background: #111;
  transition: width 0.3s ease;
}

.contact a:hover::after {
  width: 100%;
}

/* Icon styling */
.contact a i {
  font-size: 1.1rem;
  opacity: 0.7;
  transition: transform 0.2s ease, opacity 0.2s ease;
}

.contact a:hover i {
  opacity: 1;
  transform: translateY(-1px);
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
      <p class="text-muted ">Kassel, Germany</p>
      <p class="text-muted">Biking · Hiking · Design</p>
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
         I’m an introvert who enjoys long bike rides, hiking, and taking photos in nature. 
         Luckily, my city is perfect for this — when it doesn’t rain! 😊
          </p>
        </div>

        <!-- PHOTOS -->
        <div class="tab-pane fade" id="photos">
          <h2>Photos from my life</h2>

          <div class="row g-4 mt-3 photo-grid">
            <div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/ost1.png"></div>
            <div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/kar1.JPG"></div>
            <div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/bik1.JPG"></div>
          </div>
        </div>
<div class="tab-pane fade" id="contact">
  <h2 class="contact-title">Contact</h2>

  <div class="contact mt-3">
    <a href="https://www.linkedin.com/in/tutkustephan/" target="_blank">
      <i class="bi bi-linkedin"></i>
      LinkedIn
    </a>

    <a href="https://instagram.com/tutkustephan" target="_blank">
      <i class="bi bi-instagram"></i>
      Instagram
    </a>
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
