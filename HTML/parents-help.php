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
              <a href="parents-help.php" class="active">Parents help</a>
              <a href="livestream.php">Livestreaming</a>
              <a href="contact.php">Contact</a>
              <a href="guide.php">Legislation and Guidance</a>
            </nav>
            <div class="pc">
              <a href="login.php" class="login-btn"><i class="fa-solid fa-user"></i></a>
            </div>
            <form action="" class="search-form sp">
              <input type="search" class="search-box" placeholder="Search...">
              <div class="search-ico"><i class="fa-solid fa-search"></i></div>
            </form>
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
        <section class="sec-tips l-inner">
            <h2 class="sub-heading center">Top Tips for Parents</h2>
            <div class="tips">
            <div class="tip-card">
              <img src="../Images/open-comm.jpg" alt="Open Communication">
                <h3>Encourage Open Communication</h3>
                <p>Talk to your teen about their social media use and encourage them to share their experiences.</p>
                <div class="button-container">
                    <button class="read-more">Read More</button>
                </div>
            </div>
            <div class="tip-card">
            <img src="../Images/clear-rules.jpg" alt="Set Clear Rules">
                <h3>Set Clear Rules</h3>
                <p>Establish guidelines for social media usage, including time limits and acceptable content.</p>
                <div class="button-container">
                    <button class="read-more">Read More</button>
                </div>
            </div>
            <div class="tip-card">
            <img src="../Images/monitor.jpg" alt="Monitor Privacy Settings">
                <h3>Monitor Privacy Settings</h3>
                <p>Help your teen understand and manage their privacy settings on social media platforms.</p>
                <div class="button-container">
                    <button class="read-more">Read More</button>
                </div>
            </div>
            <div class="tip-card">
            <img src="../Images/safety.jpg" alt="Online Safety">
                <h3>Educate About Online Safety</h3>
                <p>Discuss the importance of keeping personal information private and recognizing online risks.</p>
                <div class="button-container">
                    <button class="read-more">Read More</button>
                </div>
            </div>
            <div class="tip-card">
            <img src="../Images/security.jpg" alt="Discuss Risks of Sharing">
                <h3>Discuss Risks of Sharing</h3>
                <p>Talk about the potential consequences of sharing personal information and images online.</p>
                <div class="button-container">
                    <button class="read-more">Read More</button>
                </div>
            </div>
            <div class="tip-card">
            <img src="../Images/critical-thinking.jpg" alt="Critical Thinking">
                <h3>Encourage Critical Thinking</h3>
                <p>Teach your teen to think critically about the content they encounter on social media.</p>
                <div class="button-container">
                    <button class="read-more">Read More</button>
                </div>
            </div>
            </div>
        </section>
    </main>

    <footer>
      <div class="footer-content">
        <p class="current-page">You are here: <strong>Parents Help</strong></p>
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