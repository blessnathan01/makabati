<?php 
  session_start();
  // if(isset($_SESSION['unique_id'])){
  //   header("location: user_chat.php");
  // }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper" style="margin-top: 0px; ">
    <section class="form reset_pswd">
      <header>Reset Password</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address <span style="color: red;"> *</span></label>
          <input type="text" name="email" placeholder="Your work email" required>
        </div>
        <div class="field input">
          <label>New Password <span style="color: red;"> *</span></label>
          <input type="password" name="new_password" id="password2" placeholder="Your new password" required>
          <i class="fas fa-eye" id="confirm_eye"></i>
        </div>
        <div class="field input">
          <label>Confirm New Password <span style="color: red;"> *</span></label>
          <input type="password" name="new_password2" id="password3" placeholder="Confirm your new password" required>
          <i class="fas fa-eye" id="confirm_eye2"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="RESET">
        </div>  
      </form>
      <div class="link">Changed your mind? <a href="index.php">Sign In</a></div>
    </section>
  </div>

  <script src="js/pass-show-hide-change.js"></script>
  <script src="js/reset_passwd.js"></script>

</body>
</html>
