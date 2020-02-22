<?php 
    include "init.php";
    define("TITLE","Email Verification");

    $validation = new validation;
    $dbquery = new Queries;
    $emailObj =  new email;

if(isset($_GET['confirmation'])){
    $Confirmation_code = $_GET['confirmation'];

    if($dbquery->query("SELECT * FROM Email_Confirmation WHERE Confirmation_Code=?",[$Confirmation_code])){
        if($dbquery->rowCount() === 1){
            
            // grab the email address of the matched code
            
            $row = $dbquery->fetchSingleRow();
            echo $user_email = $row->email;

            if($dbquery->query("SELECT * FROM Users where email =?",[$user_email])){
                $row = $dbquery->fetchSingleRow();
                $user_id = $row->Id;
                $status = 1;

                if($dbquery->query("UPDATE Users SET User_Status = ? WHERE Id = ?",[$status, $user_id])){
                    if($dbquery->query("DELETE FROM Email_Confirmation WHERE Confirmation_Code = ? LIMIT 1",[$Confirmation_code])){
                        $_SESSION['id'] = $user_id;
                        $_SESSION['verify'] = "Your Account Has Been Verified.";
                        $_SESSION['loader'] = true;
                        header("Location: message.php");
                    }
                }

            }

        }else if($dbquery->rowCount() < 1 || $dbquery->rowCount() > 1){
            $_SESSION['invalid_URL'] = "Invalid URL, Please check the confirmation URL";
            header("Location: message.php");
        }
    }
}


include 'includes/header.php';
?>