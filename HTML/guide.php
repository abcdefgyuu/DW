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
              <a href="contact.php">Contact</a>
              <a href="guide.php" class="active">Legislation and Guidance</a>
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
        <section class="legislation-guidance">
            <h2 class="sub-heading center">Relevant Legislation</h2>
            <p class="center">Understanding the legal framework surrounding social media use is essential for both individuals and organizations. Below are some key pieces of legislation that govern online behavior:</p>
            <div class="lg-container">
                <div class="lg-card">
                    <img src="../Images/data-security.png" alt="General Data Protection Regulation">
                    <h3>General Data Protection Regulation (GDPR)</h3>
                    <p>This regulation governs the processing of personal data and privacy in the European Union. It emphasizes the importance of obtaining consent for data collection and provides individuals with rights regarding their personal information.</p>
                </div>
                <div class="lg-card">
                    <img src="../Images/care.png" alt="Children's Online Privacy Protection Act">
                    <h3>Children's Online Privacy Protection Act (COPPA)</h3>
                    <p>This U.S. law protects the privacy of children under 13 by requiring parental consent for the collection of personal information from children.</p>
                </div>
                <div class="lg-card">
                    <img src="../Images/privacy.png" alt="California Consumer Privacy Act">
                    <h3>California Consumer Privacy Act (CCPA)</h3>
                    <p>This law enhances privacy rights and consumer protection for residents of California, giving them the right to know what personal data is being collected and how it is used.</p>
                </div>
                <div class="lg-card">
                    <img src="../Images/digital-copyright.png" alt="Digital Millennium Copyright Act">
                    <h3>Digital Millennium Copyright Act (DMCA)</h3>
                    <p>This U.S. law addresses copyright infringement on the internet and provides a framework for copyright owners to protect their works online.</p>
                </div>
            </div>

            <h2 class="sub-heading">Best Practice Guidance</h2>
            <p>In addition to understanding the legislation, following best practices can help ensure responsible and ethical use of social media:</p>
            <ul class="best-practices">
                <li><i class="fas fa-check-circle"></i> <strong>Be Transparent:</strong><span> Always disclose your affiliations and sponsorships when promoting products or services.</span></li>
                <li><i class="fas fa-check-circle"></i> <strong>Respect Privacy:</strong> <span>Be mindful of the personal information you share and respect the privacy of others. Obtain consent before sharing someone else's content or information.</span></li>
                <li><i class="fas fa-check-circle"></i> <strong>Engage Responsibly:</strong> <span>Foster positive interactions and avoid engaging in harassment, bullying, or spreading misinformation.</span></li>
                <li><i class="fas fa-check-circle"></i> <strong>Stay Informed:</strong> <span>Keep up to date with changes in legislation and platform policies to ensure compliance and best practices.</span></li>
                <li><i class="fas fa-check-circle"></i> <strong>Educate Others:</strong> <span>Share knowledge about online safety and responsible social media use with peers and younger users.</span></li>
            </ul>
        </section>
    </main>

    <footer>
      <div class="footer-content">
        <p class="current-page">You are here: <strong>Legislation and Guidance</strong></p>
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