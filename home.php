<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
?>
<?php include_once "header-2.php"; ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<body>
  <div class="main-container">
    <div class="wrapper">
      <section class="users">
      <div class="search" style="margin-top: 0">
          <span class="text">
            MAKABATI 
            &nbsp;&nbsp;<span >&nbsp;&nbsp;
            <!-- <?php
              $count = mysqli_query($conn, "SELECT * FROM users");
              $num_users = (mysqli_num_rows($count) - 1);
              echo $num_users;
            ?> -->
            &nbsp;&nbsp;</span></span>
          <input type="text" placeholder="Search...">
          <button><i class="fas fa-search"></i></button>
        </div>
        <header>
          <div class="content">
            <?php 
              $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
              if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
              }
            ?>
            <img src="php/images/<?php echo $row['img']; ?>" alt="">
            <div class="details">
              <span><?php echo $row['fname']. " " . $row['lname'] ?> </span> 
              <p style="color: grey; font-size: 13px;"><?php echo $row['status'] . ' &nbsp;&nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;&nbsp; ' . $row['job_title']; ?></p>
            </div>
          </div>
          <!-- <i class="fas fa-ellipsis-v"></i> -->
          <!-- <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">
            <i class="fa fa-power-off" style="font-size:18px;color:white;"></i>
          </a> -->
          <?php include_once "dropdown.php"; ?>
        </header>
        <a href="vouchers.php" target="chat-arena" class="link">
          <div class="search text">
            Accounting Vouchers<i class="fas fa-arrow-right" id="icon"></i>
          </div>
        </a>
        <hr>
        <a href="profit_loss_acc.php" target="chat-arena" class="link">
          <div class="search text">
            Profit and Loss Account<i class="fas fa-arrow-right" id="icon"></i>
          </div>
        </a>
        <hr>
        <a href="home_display.php" target="chat-arena" class="link">
          <div class="search text">
            Trial Balance<i class="fas fa-arrow-right" id="icon"></i>
          </div>
        </a>
        <hr>
        <a href="home_display.php" target="chat-arena" class="link">
          <div class="search text">
            Balance Sheet<i class="fas fa-arrow-right" id="icon"></i>
          </div>
        </a>
        <hr>
        <a href="home_display.php" target="chat-arena" class="link">
          <div class="search text">
            Financial Statement<i class="fas fa-arrow-right" id="icon"></i>
          </div>
        </a>
        <hr>
        <!-- <div class="users-list">
    
        </div> -->
        <p style="text-align: center; color: #444; margin-top: 15px">
          <?php 
            if ($num_users > 5) {
              echo "<em>Scroll down using two fingers</em>";
            } else {
                echo "";
            }
          ?>
        </p>
        <div class="flex-container">
          <div><a href="share/attach.php" target="chat-arena"><i class="fas fa-share-alt" id="icon"></i></a></div>
          <div><a href="announce/<?php 
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
          ?>.php" target="chat-arena"><i class="fas fa-bullhorn" id="icon"></i></a>
        </div>
          <div><a href="change_passwd.php" target="chat-arena"><i class="fas fa-key" id="icon"></i></a></div>
          <div><a href="php/logout.php?logout_id=<?php
      echo $_SESSION['unique_id']; ?>"><i class="fas fa-power-off" id="icon"></i></a></div>
        </div>
      </section>
    </div>
    <div class="wrapper2">
      <iframe id="iframe" src="home_display.php" width="100%" height="670" name="chat-arena"></iframe>
      <p style="color: #525252; text-align: center; font-size: 14px;" >
        <a href="#" target="_top" class="link" style="color: #525252">MAKABATI</a> &copy; 2022
      </p>
    </div>
  </div>

  <script src="js/home.js"></script>

</body>
</html>
