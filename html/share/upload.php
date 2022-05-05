<?php
		include_once "config.php";

		if(isset($_FILES['attach']) && $_FILES['attach']['error'] == 0){

			$file_name = $_FILES['attach']['name'];
			$tem_name = $_FILES['attach']['tmp_name'];
			$file_type = $_FILES['attach']['type'];
			$file_size = $_FILES['attach']['size'];
		
			$file_size_kb = ($file_size/1024);
		
			$file_name = preg_replace("#[^a-z0-9.]#i","",$file_name);
		
			$file_path = "uploads/$file_name";
		
			if(!$tem_name){
				echo '{"status":"error"}';
				die();
			}else{
				move_uploaded_file($tem_name,$file_path);
				$sql = mysqli_query($conn, "INSERT INTO attachments (file_name, file_type, file_size, file_path) VALUES ('{$file_name}', '{$file_type}', '{$file_size}', '{$file_path}')") or die();
		
				echo '{"status":"success"}';
		}
		}
		
		exit;

?>

