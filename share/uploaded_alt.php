<?php
	session_start();
	include_once "config.php";

	$get_files = "SELECT * FROM attachments ORDER BY id DESC";
	$execute_get_files = mysqli_query($conn, $get_files);

	while($get_file_list = mysqli_fetch_array($execute_get_files)){

		$file_name = $get_file_list['file_name'];
		$file_path = $get_file_list['file_path'];
		$file_time = $get_file_list['uploaded_at'];

		echo "<div class='div_style'>";

		echo "<span style='float:left; color:#fff; padding-left: 8px; display: block;
		width: 71%;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;'>".$file_name."</span>";

		echo "<span style='color: #7f858a; float: right'>".substr($file_time,11,5)."</span>
		&nbsp;&nbsp;<a href='download.php?my_file_path=$file_path'>
		<i class='fa fa-download fa-lg' aria-hidden='true' style='float: right; margin-top: 3px; margin-right: 5px;'></i>
		</a><br>";

		echo "</div>";
	}

?>

<html>

<head>

</head>

<style>

.div_style{
	background-color: #333;
	margin:5px;
	padding:10px;
	border-radius:3px;
}

.div_style:hover{
	background-color: #444;
}


</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

<body>

</body>

</html>