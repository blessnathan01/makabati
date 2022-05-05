<?php
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $new_password2 = mysqli_real_escape_string($conn, $_POST['new_password2']);

    $current_user = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
    $row = mysqli_fetch_assoc($current_user);

    if(!empty($email) && !empty($new_password) && !empty($new_password2)){
        if(mysqli_num_rows($current_user) > 0) {
            if ($_POST['new_password'] === $_POST['new_password2']) {
            $encrypt_new_pass = md5($new_password);
            $update_query = mysqli_query($conn, "UPDATE users SET password = '{$encrypt_new_pass}' WHERE email = '{$email}'");
            if($update_query){
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "success";
            }else{
                echo "Something went wrong. Please try again!";
            }
        }
         else {
            echo "The passwords you entered do not match";
         }
        } else {
            echo "'$email' does not exist!";
         }
    }else{
        echo "All input fields are required!";
    }
?>