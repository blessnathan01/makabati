<?php include_once "header-4.php"; ?>

<body style="background-color: #f7f7f7;">

<div class="mycontainer" style="background-color: #f7f7f7;">

    <div class="container-fluid" style="background-color: #f7f7f7;">
      <br>
      <div class="announcement_page" style="background-color: #f7f7f7;">
        <div class="row row-adjusted">

        </div>
      </div>

    <div class="right-page">
    <form method="post" action="">
      <div class="form-group">
           <label for="txt_title" class="msg_title">Title</label>
           <input type="text" class="form-control form-control-adjusted" id="txt_title" placeholder="Announcement title" style="border: 1px solid rgb(150, 147, 147); font-size: 15px;">
      </div>
    <div class="form-group">
      <label for="txt_announcement" class="msg_title">Announcement </label>
      <textarea  class="form-control" id="txt_announcement" placeholder="Type your announcement"></textarea>
    </div>
    <div class="form-group" id="btn_holder">
    <button class="btn" id="btn_post">Post</button>
    </div>
  </form>
    </div>
    </div>
</div>
  <script>
  $(document).ready(function(){

    setInterval(function(){
     $(".row-adjusted").load("get_announcement.php").fadeIn("slow");
   },500);

     $("#btn_post").click(function(){
       var title_holder = $("#txt_title").val();
       var message_holder = $("#txt_announcement").val();
       $.ajax({
         method:"POST",
         url:"",
        data:{title:title_holder,
          message:message_holder},
        success:function(status){
          $(".row-adjusted").load("get_announcement.php").fadeIn("slow");
            }
       });
     });

  $("#file").change(function(){
    $("#submit_file").trigger("click");
  });

  $("#submit_file").click(function(){
      $(this).submit();
  });

    });
  </script>

  <?php

    include_once "../share/config.php";

    $message_title = $_POST['title'];
    $message_body = $_POST['message'];

    if($message_title!=""&& $message_body!=""){

      $insert_query_command = "INSERT INTO announcements (announcement_title, announcement_body) VALUES ('{$message_title}', '{$message_body}')";
      $execute_insert_query = mysqli_query($conn,$insert_query_command);
    }

   ?>

  </body>
  </html>
