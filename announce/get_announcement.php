<?php

session_start();
include_once "../share/config.php";

 $get_all_announcement_command = "SELECT * FROM announcements ORDER BY id DESC";
 $execute_get_announcement_query = mysqli_query($conn,$get_all_announcement_command);

 while( $get_rows = mysqli_fetch_assoc($execute_get_announcement_query)){

 echo "<div class='col-lg-4 col-md-4 col-sm-6'>";
 echo "<div class='panel panel-decorated'>
           <div class = 'panel-heading' style='background-color: #333'>
            <h4 class = 'panel-title ptitle'>".$get_rows['announcement_title']."<hr style='border-top: 2px solid rgb(255, 208, 0);'></h4>
          </div>";

  echo  "<div class = 'panel-body pbody' style='background-color: #fff; padding-top: 0'>
         <span>".$get_rows['announcement_body']."</span>
         <br><br>
         <span style='float: right; font-size: 14px; color: #aaa'>".DateTime::createFromFormat('!m', substr($get_rows['posted_at'],5,2))->format('M') . ' ' . substr($get_rows['posted_at'],8,2) . ', ' . substr($get_rows['posted_at'],0,4) . ' &nbsp;&nbsp;' . substr($get_rows['posted_at'],11,5)."</span>
          </div>
       </div>
       </div>";
 }

 if (mysqli_num_rows($execute_get_announcement_query) === 0) {
   echo '<div style="color: grey;position: absolute; top: 45%; left: 50%; width: calc(100% - 50px); text-align: center; transform: translate(-50%, -50%); font-size: 16px">No announcements here yet. Once they are <br>posted, they will appear here.';
 }

 ?>