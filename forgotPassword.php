<?php
    include 'init.php';
    
    if(isset($_SESSION['id'])):
        header("Location: dashboard.php");
        endif;


    $dbquery = new Queries;

    define("TITLE","Password Reset Page");
    include 'includes/header.php';
?>
<?php

if(isset($_GET['forgot'])){
    $resetCode = $_GET['forgot'];
    
    if($dbquery->query("SELECT * FROM PassswordReset WHERE Reset_Code = ?",[$resetCode])){
        if($dbquery->rowCount() > 0){
            $row = $dbquery->fetchSingleRow();
            $userId = $row->User_Id;
            $_SESSION['RequestUserId'] = $userId;

            if($dbquery->query("DELETE FROM PassswordReset WHERE Reset_Code = ?",[$resetCode])){
                header("Location: newPassword.php");
            }

        }else{
            $_SESSION['WrongResetCode'] = "hello User, You have Passed an Invalid Password Reset Code. Please Verify from your Email. Thanks";
            header("Location: message.php");
        }
    }
}
?>