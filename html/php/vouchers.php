<?php
    session_start();
    include_once "config.php";
    $doc_date = mysqli_real_escape_string($conn, $_POST['doc_date']);
    $posting_date = mysqli_real_escape_string($conn, $_POST['posting_date']);
    $ref_no = mysqli_real_escape_string($conn, $_POST['ref_no']);
    $gen_ledger_acc = mysqli_real_escape_string($conn, $_POST['gen_ledger_acc']);
    $debit_credit = mysqli_real_escape_string($conn, $_POST['debit_credit']);
    $debit_amount = mysqli_real_escape_string($conn, $_POST['debit_amount']);
    $credit_amount = mysqli_real_escape_string($conn, $_POST['credit_amount']);
    $short_desc = mysqli_real_escape_string($conn, $_POST['short_desc']);

    if(!empty($doc_date) && !empty($posting_date) && !empty($ref_no) && !empty($gen_ledger_acc) && !empty($debit_credit) && !empty($debit_amount) && !empty($credit_amount) && !empty($short_desc)){
        echo "All input fields are required!";
    }else{
        $insert_query = mysqli_query($conn, "INSERT INTO vouchers (doc_date, posting_date, ref_no, gen_ledger_acc, debit_credit, debit_amount, credit_amount, short_desc) VALUES ('{$doc_date}','{$posting_date}', '{$ref_no}', '{$gen_ledger_acc}', '{$debit_credit}', '{$debit_amount}', '{$credit_amount}', '{$short_desc}')");
        echo "All changes are saved";
    }
?>