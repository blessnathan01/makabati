<?php include_once "header-3.php"; 
      include_once "config.php";
?>

<body>

<div class="mycontainer">

   <div class="main_content">
      <div style="margin-left: 26px; cursor: pointer">
        <a href="<?php 
                    $statement = "SELECT * FROM messages ORDER BY msg_id DESC LIMIT 1";
                    $query_statement = mysqli_query($conn, $statement);
                    $row = mysqli_fetch_assoc($query_statement);
                    if (mysqli_num_rows($query_statement) === 0){
                      echo '../user_chat.php';
                    } else {
                      echo "../chat.php?user_id=" . $row['incoming_msg_id'];
                    }?>">
          <i class="fas fa-times fa-lg" style="color: #333;"></i>
        </a>
      </div>
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

          <div class="uploaded_container" style="border-radius: 0px; background-color: #f7f7f7"></div>



          </div>

        </div>

     </div>

</div>


    <script>

      setInterval(function(){
        $(".uploaded_container").load("uploaded_alt.php");
      },2000);

    </script>

  </body>
  </html>
