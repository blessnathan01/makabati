<?php 
  // session_save_path("C:\\xampp\\tmp");
  ini_set('session.save_path', 'tmp');
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: home.php");
  }


  function exceptions_error_handler($severity, $message, $filename, $lineno) {
    throw new ErrorException($message, 0, $severity, $filename, $lineno);
  }

  set_error_handler('exceptions_error_handler');

?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
    <img src="img/makabati-favicon.png" width="100" height="100" alt="Makabati logo" style="margin: 0px 105px; margin-left: 35%">
      <header style="text-align: center">Sign in to MAKABATI</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address <span style="color: red;">*</span></label>
          <input type="text" name="email" placeholder="Your work email" required>
        </div>
        <div class="field input">
          <label>Password <span style="color: red;">*</span></label>
          <input type="password" name="password" placeholder="Your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="SIGN IN">
        </div>
      </form>
      <div class="link">Forgot password? <a href="reset_passwd.php">Reset it</a></div>
      <div class="link">New to MAKABATI? <a href="signup.php">Sign Up</a></div>
    </section>
  </div>
  
  <script src="js/pass-show-hide-login.js"></script>
  <script src="js/login.js"></script>

</body>
</html>
