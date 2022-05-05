<?php 
  ini_set('session.save_path', 'tmp');
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: home.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper" style="margin: 40px;">
    <section class="form signup">
    <img src="img/makabati-favicon.png" width="100" height="100" alt="Makabati logo" style="margin: 0px 105px; margin-left: 35%">
      <header style="text-align: center">Sign up for MAKABATI</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name<span style="color: red;">*</span></label>
            <input type="text" name="fname" required>
          </div>
          <div class="field input">
            <label>Last Name<span style="color: red;">*</span></label>
            <input type="text" name="lname" required>
          </div>
        </div>
        
        <div class="field input">
          <label>Email Address<span style="color: red;">*</span></label>
          <input type="text" name="email" required>
        </div>
        
        <div class="field input">
          <label>Password<span style="color: red;">*</span></label>
          <input type="password" name="password" placeholder="Create a new password" required>
          <i class="fas fa-eye"></i>
        </div>
        
        <div class="field input">
          <label>Confirm Password<span style="color: red;">*</span></label>
          <input type="password" name="password2" id="password2" placeholder="Confirm your password" required>
          <i class="fas fa-eye" id="confirm_eye"></i>
        </div>
        
        <div class="field input">
          <label>Job Title<span style="color: red;">*</span></label>
          <input type="text" name="job_title" required>
        </div>
        
        <div class="field input">
            <label>Gender<span style="color: red;">*</span></label>
              <select name="gender" id="gender" style="border-color: #dcdcdc; border-radius: 5px; padding: 2%; font-size: 16px; border: 1px solid rgb(150, 147, 147);">
                <option value="C">select your gender</option>
              </select> 
        </div>
        
        <div class="field image">
          <label>Select Image<span style="color: red;">*</span></label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        
        <div class="field button">
          <input type="submit" name="submit" value="SIGN UP">
        </div>
      </form>
      <div class="link">Have an account? <a href="index.php">Sign In</a></div>
    </section>
  </div>

  <script src="js/pass-show-hide.js"></script>
  <script src="js/signup.js"></script>

</body>
</html>