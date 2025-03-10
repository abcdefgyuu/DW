<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Social Media Campaings</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Reddit+Sans:ital,wght@0,200..900;1,200..900&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <div class="auth-header"><a href="index.php"><img src="../Images/logo.png" alt="logo" class="h-logo"></a></div>
    <div class="form-fill-blk">
      <div class="form-sec">
        <h2>Login</h2>
        <form action="">
          <div class="form-input-blk">
            <label for="username">UserName</label>
            <input type="text" name="username">
            <i class="fa-regular fa-user"></i>
          </div>
          <div class="form-input-blk">
            <label for="password">Password</label>
            <input type="password" name="password">
            <i class="fa-solid fa-eye-slash"></i>
          </div>
          <div class="btn-blk">
            <input type="submit" value="Login" class="form-btn">
          </div>
        </form>
        <div class="signuphere-blk">
          If you don’t have an account,<a href="./register.php">Sign Up Here!</a>
        </div>
      </div>
      <div class="right-bnr-sec pc">
        <img src="../Images/login-bnr.jpg" alt="login-bnr" class="right-bnr">
      </div>
      <div class="back-arr">
        <a href="./index.php"><img src="../Images/back-arr.png" alt="back arrow" class="back-arr-img"></a>
      </div>
    </div>

  </div>
</body>

</html>