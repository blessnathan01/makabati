<?php 
    include_once "php/config.php";
    $count = mysqli_query($conn, "SELECT * FROM attachments");
    $num_files = (mysqli_num_rows($count));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>(<?php echo $num_files;?>) Makabati</title>
  <link rel="shortcut icon" href="img/makabati-favicon.png" />
  <link rel="stylesheet" href="css/style-2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>