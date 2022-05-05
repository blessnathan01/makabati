<?php include_once "header-4.php";  ?>

<body style="background-color: #f7f7f7;">

<div class="mycontainer" style="background-color: #f7f7f7;">

    <div class="container-fluid" style="background-color: #f7f7f7;">
      <br>
      <div class="announcement_page" style="background-color: #f7f7f7; width: 100%; padding-left: 20px">
        <div class="row row-adjusted">

        </div>
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

  </body>
  </html>
