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
      transition: color 0.25s ease;
    }

    .nav-pills .nav-link::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -2px;
      width: 0;
      height: 3px;
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

    /* ✅ General tab animation (CONTACT excluded) */
    .tab-pane:not(#contact) {
      animation: fadeSlide 0.45s ease;
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

    /* Photos */
    .photo-grid img {
      width: 100%;
      border-radius: 8px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .photo-grid img:hover {
      transform: scale(1.03);
    }

    /* =========================
       CONTACT (single animation)
       ========================= */

    #contact .contact a {
      opacity: 0;
      transform: translateY(6px);
      animation: contactFade 0.4s ease forwards;
    }

    #contact .contact a:nth-of-type(1) {
      animation-delay: 0.1s;
    }

    #contact .contact a:nth-of-type(2) {
      animation-delay: 0.2s;
    }

    @keyframes contactFade {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .contact a {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-right: 24px;
      color: #111;
      text-decoration: none;
      font-weight: 500;
      position: relative;
    }

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

    .contact a i {
      font-size: 1.1rem;
      opacity: 0.7;
      transition: transform 0.2s ease, opacity 0.2s ease;
    }

    .contact a:hover i {
      opacity: 1;
      transform: translateY(-1px);
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
  background: #162818;
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
/* =========================
   PRIVACY POLICY PAGE
   ========================= */

.legal-page {
  max-width: 820px;
  margin: 80px auto;
  padding: 0 20px;
  font-family: 'Inter', sans-serif;
  color: #111;
}

.legal-page h1 {
  font-size: 2.2rem;
  font-weight: 600;
  margin-bottom: 8px;
}

.legal-page .updated {
  color: #777;
  font-size: 0.9rem;
  margin-bottom: 40px;
}

.legal-page h2 {
  font-size: 1.25rem;
  font-weight: 600;
  margin-top: 48px;
  margin-bottom: 12px;
}

.legal-page h3 {
  font-size: 1rem;
  font-weight: 600;
  margin-top: 24px;
  margin-bottom: 8px;
}

.legal-page p {
  color: #444;
  line-height: 1.7;
  margin-bottom: 14px;
}

.legal-page ul {
  padding-left: 20px;
  margin-bottom: 16px;
}

.legal-page ul li {
  color: #444;
  margin-bottom: 6px;
}

.legal-page a {
  color: #111;
  text-decoration: underline;
}

.legal-page a:hover {
  color: #000;
}

  </style>

  
</head>

<body>
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

<div class="legal-page">

  <h1>Privacy Policy</h1>
  <div class="updated">Last updated: 2026</div>

  <h2>1. General Information</h2>
  <p>
    This website is a personal website operated by Tutku Stephan.
    Protecting your personal data is important to me. This website is used
    for personal presentation only and does not pursue commercial purposes.
  </p>

  <h2>2. Data Collection on This Website</h2>

  <h3>a) No active data collection</h3>
  <p>This website does not collect personal data through:</p>
  <ul>
    <li>contact forms</li>
    <li>user accounts</li>
    <li>newsletters</li>
    <li>comments</li>
  </ul>
  <p>
    I do not knowingly collect or store personal information from visitors.
  </p>

  <h3>b) Server log files</h3>
  <p>
    When you visit this website, your browser automatically transmits information
    to the server. This may include:
  </p>
  <ul>
    <li>IP address</li>
    <li>browser type and version</li>
    <li>operating system</li>
    <li>date and time of access</li>
  </ul>
  <p>
    These data are technically necessary to display the website and ensure
    stability and security. They are not combined with other data and are not
    used for profiling.
  </p>

  <h2>3. Cookies and Local Storage</h2>
  <p>
    This website uses only technically necessary storage to remember your cookie
    preference.
  </p>
  <ul>
    <li>Your choice is stored in your browser’s localStorage</li>
    <li>No tracking, marketing, or analytics cookies are used</li>
    <li>No third-party cookies are set by this website</li>
  </ul>
  <p>
    You can delete this information at any time via your browser settings.
  </p>

  <h2>4. External Services and Content</h2>
  <p>This website loads external resources from the following providers:</p>
  <ul>
    <li>Bootstrap CDN</li>
    <li>Bootstrap Icons CDN</li>
    <li>Google Fonts</li>
  </ul>
  <p>
    When these resources are loaded, your IP address may be transmitted to the
    respective provider for technical delivery purposes.
  </p>

  <h2>5. Social Media Links</h2>
  <p>
    This website contains links to external social media platforms (LinkedIn and
    Instagram).
  </p>
  <p>
    When you click on these links, you leave this website. I have no control over
    how these platforms process your data. Please refer to their respective
    privacy policies.
  </p>

  <h2>6. WordPress</h2>
  <p>
    This website is built using WordPress. WordPress itself does not collect
    personal data on this website beyond what is technically required for
    operation.
  </p>

  <h2>7. Your Rights (GDPR)</h2>
  <p>You have the right to:</p>
  <ul>
    <li>request information about your stored data</li>
    <li>request correction or deletion</li>
    <li>restrict processing</li>
    <li>object to processing</li>
  </ul>
  <p>
    If you believe your data protection rights have been violated, you may
    contact the responsible supervisory authority.
  </p>

  <h2>8. Contact</h2>
  <p>
    If you have questions regarding this privacy policy or data protection, you
    can contact me via the social links provided on this website.
  </p>

  <h2>9. Changes to This Privacy Policy</h2>
  <p>
    This privacy policy may be updated if the website changes or legal
    requirements are updated.
  </p>

</div>

  </div>

  <footer class="text-center py-4 border-top mt-5">
    <small class="text-muted">
      © 2026 Tutku Stephan ·
      <a href="https://frau-eule.de/privacy-policy/">Privacy Policy</a>
    </small>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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


<!---->

</body>
</html>
