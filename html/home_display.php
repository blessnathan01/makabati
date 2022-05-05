<?php 
  session_start();
  include_once "php/config.php";
?>
<?php include_once "header_fin.php"; ?>
<center>
<div class="inner-container">
        <div class="image-container"><img src="img/makabati-favicon.png" width="200" height="200" alt="Makabati logo"></div>
        <div class="title"><p>Accounting made simple</p></div>
        <div class="subtitle"><p>MAKABATI enables you to do accounting, <a href="./share/attach.php" class="link">&nbsp;share files&nbsp;</a> and <a class="link" href="./announce/<?php 
      $page_name = "SELECT * FROM users WHERE can_announce = 'yes'";
      $page_name2 = "SELECT * FROM users WHERE can_announce = 'yes' ORDER BY user_id DESC";
      $page_name3 = "SELECT * FROM users WHERE can_announce = 'yes' ORDER BY user_id DESC LIMIT 1, 1";
      $execute_page_name = mysqli_query($conn,$page_name);
      $execute_page_name2 = mysqli_query($conn,$page_name2);
      $execute_page_name3 = mysqli_query($conn,$page_name3);
      $row = mysqli_fetch_assoc($execute_page_name);
      $row2 = mysqli_fetch_assoc($execute_page_name2);
      $row3 = mysqli_fetch_assoc($execute_page_name);
      if ($row['unique_id'] === $_SESSION['unique_id']) {
        echo 'announce';
      } else {
        if ($row2['unique_id'] === $_SESSION['unique_id']) {
          echo 'announce';
        } else {
            if ($row3['unique_id'] === $_SESSION['unique_id']) {
              echo 'announce';
            } else {
              echo 'view';
            }
        }
      }
    ?>.php">&nbsp;<?php 
      if ($row['unique_id'] === $_SESSION['unique_id']) {
        echo 'post'; 
    } else {
        if ($row2['unique_id'] === $_SESSION['unique_id']) {
          echo 'post';
        } else {
            if ($row3['unique_id'] === $_SESSION['unique_id']) {
              echo 'post';
            } else {
              echo 'view';
            }
        }
    }
  ?> announcements&nbsp;</a>.</p></div>      
      </div>
    </center>
  </section>
</body>
</html>
