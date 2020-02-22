<?php
    include 'init.php';

    $message = new messages;
?>


<?php  
define('TITLE',"message");
include 'includes/header.php'; 

?>

<body class="messagebg">
   
<?php include 'includes/navbar.php'?>

    <div class="container">
        <div class="messageBox">
            <div class="messageBoxContainer">
                <!-- Account Created Message to User(s) -->
            <?php $message->showMessages('account_created','success') ?>
            <!-- Invalid Url Passed triggers this message -->
            <?php $message->showMessages('invalid_URL','error') ?>
            <!-- when account verification fails -->
            <?php $message->showMessages('notVerified','error') ?>
            <!-- when user fails to verify his account b4 logging in -->
            <?php $message->showMessages('verify','verify') ?>
            <!-- Pasword reset link message to user(s) -->
            <?php $message->showMessages('Reset_Password','success') ?>
            <!-- when invalid reset link is submitted -->
            <?php $message->showMessages('WrongResetCode','error') ?>
            <!-- when aceess is forbidden -->
            <?php $message->showMessages('Access_Forbidden','error') ?>
            <!-- When Password is updated Successfully... -->
            <?php $message->showMessages('PasswordUpdated','success') ?>
            <?php unset($_SESSION['RequestUserId']);?>

        </div>
        </div>
    </div>
</body>
</html>
