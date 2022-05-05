<?php
    session_start();
    include_once "config.php";
    $old_password = mysqli_real_escape_string($conn, $_POST['old_password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $new_password2 = mysqli_real_escape_string($conn, $_POST['new_password2']);

    $current_id = $_SESSION['unique_id'];
    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$current_id}'"));

    if(!empty($old_password) && !empty($new_password) && !empty($new_password2)){
        if ($row['password'] === md5($_POST['old_password'])) {
            if ($_POST["new_password"] === $_POST["new_password2"]) {
            $encrypt_new_pass = md5($new_password);
            $update_query = mysqli_query($conn, "UPDATE users SET password = '{$encrypt_new_pass}' WHERE unique_id = {$row['unique_id']}");
            if($update_query){
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "success";
            }else{
                    echo "Something went wrong. Please try again!";
            }
        }
         else {
            echo "The new passwords you entered do not match";
         }
        } else {
            echo "You entered an incorrect old password.";
         }
    }else{
        echo "All input fields are required!";
    }
?>