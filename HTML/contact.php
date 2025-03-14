<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Social Media Campaings</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Reddit+Sans:ital,wght@0,200..900;1,200..900&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <div class="l-inner">
      <header>
        <div class="nav-header">
          <div class="header-blk"><a href="index.php"><img src="../Images/logo.png" alt="logo" class="h-logo"></a></div>
          <div class="h-nav">
            <div class="sp">
              <a href="login.php" class="login-btn"><i class="fa-solid fa-user"></i></a>
            </div>
            <nav>
              <a href="information.php">Information</a>
              <a href="popular-apps.php">Popular Apps</a>
              <a href="parents-help.php">Parents help</a>
              <a href="livestream.php">Live Streaming</a>
              <a href="contact.php" class="active">Contact</a>
              <a href="guide.php">Legislation and Guidance</a>
            </nav>
            <div class="pc">
              <a href="login.php" class="login-btn"><i class="fa-solid fa-user"></i></a>
            </div>
            <div class="close-btn">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>

            </div>

          </div>
          <div class="menu-bar sp">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </div>
        </div>
      </header>
    </div>
    <main>
      <section class="contact-container">
        <div class="contact-info">
          <img src="../Images/contact.png" alt="Contact Information">
          <h2 class="sub-heading">Contact Information</h2>
          <p class="contact-desc">If you have any questions or need assistance, feel free to reach out to us:</p>
          <ul>
            <li><i class="fas fa-envelope txt-blue"></i> <strong class="txt-blue">Email:</strong> <a href="mailto:info@smcltd.com">info@smcltd.com</a></li>
            <li><i class="fas fa-phone-alt txt-red"></i> <strong class="txt-red">Phone:</strong> <a href="tel:+1234567890">+1 (234) 567-890</a></li>
            <li><i class="fas fa-map-marker-alt txt-yellow"></i> <strong class="txt-yellow">Address:</strong> 123 Social Media St, Suite 456, City, State, ZIP</li>
          </ul>
        </div>

        <div class="contact-form">
          <h2 class="sub-heading">Get in Touch</h2>
          <form action="submit_form.php" method="POST">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <div class="form-group">
              <input type="checkbox" id="privacy" name="privacy" required>
              <label for="privacy" class="agree-lbl">I agree to the <a href="privacy-policy.php">Privacy Policy</a>.</label>
            </div>
            <button type="submit" class="send-msg">Send Message</button>
          </form>
        </div>
      </section>

      <section class="map">
        <h2 class="sub-heading">Our Location</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509198!2d144.9537353153164!3d-37.81627997975157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f0f0f0f%3A0x0!2s123%20Social%20Media%20St%2C%20Suite%20456%2C%20City%2C%20State%2C%20ZIP!5e0!3m2!1sen!2sus!4v1631234567890!5m2!1sen!2sus"
          width="600"
          height="450"
          style="border:0;"
          allowfullscreen=""
          loading="lazy">
        </iframe>
      </section>
    </main>
    <footer>
      <div class="footer-content">
        <p class="current-page">You are here: <strong>Contact</strong></p>
        <p class="copyright">© 2023 Social Media Campaigns Ltd. All rights reserved.</p>
        <div class="social-media">
          <a href="https://facebook.com" target="_blank" class="social-icon">Facebook</a>
          <a href="https://twitter.com" target="_blank" class="social-icon">Twitter</a>
          <a href="https://instagram.com" target="_blank" class="social-icon">Instagram</a>
          <a href="https://linkedin.com" target="_blank" class="social-icon">LinkedIn</a>
        </div>
      </div>
    </footer>
  </div>
  <script src="../JS/main.js"></script>
</body>

</html>