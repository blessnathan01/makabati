<?php
    session_start();
    include_once "config.php";
    $dr_cr_2 = mysqli_real_escape_string($conn, $_POST['dr_cr_2']);
    $particular = mysqli_real_escape_string($conn, $_POST['particular']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);

    if(!empty($dr_cr_2) && !empty($particular) && !empty($amount)){
        $insert_query = mysqli_query($conn, "INSERT INTO profit_loss_acc (Dr_or_Cr, particular, amount) VALUES ('{$dr_cr_2}','{$particular}', '{$amount}')");
        echo "All changes are saved";
    }else{
        echo "All input fields are required!";
    }
?>