

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Your Name</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap 5 -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <!-- Google Font (opsiyonel ama önerilir) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f9f9f9;
      color: #111;
    }

    section {
      padding: 100px 0;
    }

    .profile-img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;
    }

    .section-title {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 40px;
    }

    /* Photo grid */
    .photo-grid img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 8px;
      transition: transform 0.3s ease;
    }

    .photo-grid img:hover {
      transform: scale(1.03);
    }

    /* Contact links */
    .contact a {
      text-decoration: none;
      color: #111;
      margin-right: 20px;
      font-weight: 500;
      position: relative;
    }

    .contact a::after {
      content: "";
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -4px;
      left: 0;
      background-color: #111;
      transition: width 0.3s ease;
    }

    .contact a:hover::after {
      width: 100%;
    }
  </style>
</head>

<body>

  <!-- 1. SECTION: PROFILE -->
  <section class="container">
    <div class="row align-items-center">
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <img src="profile.jpg" alt="Profile photo" class="profile-img">
      </div>
      <div class="col-md-9">
        <h1 class="mb-3">Your Name</h1>
        <p class="mb-1"><strong>Master:</strong> University Name — Department</p>
        <p class="mb-1"><strong>Location:</strong> City, Country</p>
        <p class="mb-3"><strong>Hobbies:</strong> Photography, Traveling, Design</p>
        <p class="text-muted">
          I enjoy creating simple digital experiences and capturing moments from everyday life.
        </p>
      </div>
    </div>
  </section>

  <!-- 2. SECTION: PHOTOS -->
  <section class="container">
    <h2 class="section-title">Photos from my life</h2>

    <div class="row g-4 photo-grid">
      <div class="col-md-4"><img src="photo1.jpg" alt=""></div>
      <div class="col-md-4"><img src="photo2.jpg" alt=""></div>
      <div class="col-md-4"><img src="photo3.jpg" alt=""></div>
      <div class="col-md-6"><img src="photo4.jpg" alt=""></div>
      <div class="col-md-6"><img src="photo5.jpg" alt=""></div>
      <div class="col-md-4"><img src="photo6.jpg" alt=""></div>
    </div>
  </section>

  <!-- 3. SECTION: CONTACT -->
  <section class="container">
    <h2 class="section-title">Contact</h2>

    <div class="contact">
      <a href="https://linkedin.com/in/username" target="_blank">LinkedIn</a>
      <a href="https://instagram.com/username" target="_blank">Instagram</a>
      <a href="mailto:youremail@example.com">Email</a>
    </div>
  </section>

</body>
</html>
