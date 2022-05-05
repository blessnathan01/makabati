<?php include_once "header-3.php"; ?>

<body>

<div class="mycontainer">

   <div class="main_content">
      <div class="main_content_holder" style="background-color: #f7f7f7;">
      <div class = "panel panel-adjusted" style="background-color: #f7f7f7;">
      <div class = "panel-body pbody">
      <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
      <div id="drop">
      Drag & drop to share files publicly
         <br> OR <br>
      <a><i class="fa fa-paperclip"></i> &nbsp;Attach files</a>
      <input type="file" name="attach" multiple />
      </div>

      <ul>
        <!-- The file uploads will be shown here -->
      </ul>

    </form>

          </div>
        </div>

         <div class="side_bar_holder" style="border-radius: 20px;">
          <div class="designer" style="background-color: #333;">
           <div style="text-align:center;padding-top:15px"><span style="color:white; font-size: 18px">ALL ATTACHMENTS<span></div>
          </div>

          <div class="uploaded_container" style="border-radius: 0px; background-color: #f7f7f7">


          </div>



          </div>

        </div>

     </div>

</div>




    <script>

    $(document).ready(function(){

      $("#my_profile_picture").load("Get_Profile_Picture.php");

      $(" #my_profile_picture").click(function(){
      $('#file').trigger("click");
      });

      $("#file").change(function(){
        $("#submit_file").trigger("click");
      });

      $("#submit_file").click(function(){
          $(this).submit();
      });

    });

    setInterval(function(){
     $(".uploaded_container").load("uploaded.php");
   },2000);


    </script>

    <script type="text/javascript">
    function Logout(){
    $.get("../Logout/Logout.php");
    }
 </script>

  </body>
  </html>
