<?php

include_once "config.php";

$my_file_path = $_GET["my_file_path"];

$get_files = "SELECT * FROM attachments WHERE file_path='$my_file_path' LIMIT 1";
$execute_get_files = mysqli_query($conn,$get_files);

header("Content-Type:application/octet-stream");
header("Content-Disposition:application;filename=".basename($my_file_path));
header("Content-Length:".filesize($my_file_path));
readfile($my_file_path);

?>