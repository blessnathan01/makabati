<?php 
  session_start();
  // if(isset($_SESSION['unique_id'])){
  //   header("location: user_chat.php");
  // }
?>

<?php include_once "header.php"; ?>
<body style="background-color: #f7f7f7;">
  <div class="wrapper" style="margin-top: 0px; background-color: #f7f7f7;">
    <section class="form change_pswd">
      <header>Change Password</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Old Password<span style="color: red;">*</span></label>
          <input type="password" name="old_password" placeholder="Your old password" style="background-color: #f7f7f7;" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field input">
          <label>New Password<span style="color: red;">*</span></label>
          <input type="password" name="new_password" id="password2" placeholder="Your new password" style="background-color: #f7f7f7;" required>
          <i class="fas fa-eye" id="confirm_eye"></i>
        </div>
        <div class="field input">
          <label>Confirm New Password<span style="color: red;">*</span></label>
          <input type="password" name="new_password2" id="password3" placeholder="Confirm your new password" style="background-color: #f7f7f7;" required>
          <i class="fas fa-eye" id="confirm_eye2"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="SAVE CHANGES">
        </div>  
      </form>
    </section>
  </div>

  <script src="javascript/pass-show-hide-change.js"></script>
  <script src="javascript/change_passwd.js"></script>

</body>
</html>
