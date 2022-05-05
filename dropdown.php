<!DOCTYPE html>
<html>
<head>
<style>
i {
  cursor: pointer;
}

hr {
  border-top: 1px solid #eee;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f7f7f7;
  min-width: 220px;
  box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
  z-index: 99 !important;
  border-radius: 5px;
}

.dropdown-content a {
  color: #255dcd;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #255dcd; color: #f7f7f7; border-radius: 5px;}

.dropdown:hover .dropdown-content {
  display: block;
}

#share {
  border-radius: 5px 5px 0 0;
}

#announce, #change_pswd {
  border-radius: 0px;
}

#out {
  border-radius: 0 0 5px 5px;
}
</style>

</head>
<body>

<div class="dropdown" style="float:right;">
  <i class="fas fa-ellipsis-v"></i>
  <div class="dropdown-content">
  	<a href="share/attach.php" id="share" target="chat-arena"><i class="fas fa-share-alt"></i> &nbsp;&nbsp;Share Files</a>
    <hr>
  	<a href="announce/<?php 
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
    ?>.php" id="announce" target="chat-arena"><i class="fas fa-bullhorn"></i> &nbsp;&nbsp;<?php 
      if ($row['unique_id'] === $_SESSION['unique_id']) {
        echo 'Post'; 
    } else {
        if ($row2['unique_id'] === $_SESSION['unique_id']) {
          echo 'Post';
        } else {
            if ($row3['unique_id'] === $_SESSION['unique_id']) {
              echo 'Post';
            } else {
              echo 'View';
            }
        }
    }
  ?> Announcements</a>
    <hr>
    <a href="change_passwd.php" id="change_pswd" target="chat-arena"><i class="fas fa-key"></i> &nbsp;&nbsp;Change Password</a>
    <hr>
  	<a href="php/logout.php?logout_id=<?php
      echo $_SESSION['unique_id']; ?>" id="out"><i class="fas fa-power-off"></i> &nbsp;&nbsp;Sign Out</a>
  </div>
</div>

</body>
</html>
