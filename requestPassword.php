<?php
    include 'init.php';
    $validation= new validation;
    $dbquery = new Queries;
    $emailobj = new email;

    define("TITLE","Reset Password");
    include 'includes/header.php';
?>
<?php 
    if(isset($_POST['resetpwdbtn'])){

        if(isset($_SESSION['id'])):
            header("Location: dashboard.php");
            endif;
            
        $validation->validate("email","Email","required");

        if($validation->runSuccess()){
             $email = $validation->input('email');

            if($dbquery->query("SELECT * FROM Users WHERE email = ?",[$email])){
                if($dbquery->rowCount() > 0){
                    $row = $dbquery->fetchSingleRow();
                     $id = $row->Id;
                     $username= $row->User_Name;
                     $code = password_hash(rand(), PASSWORD_DEFAULT);
                      $url = 'http://'.$_SERVER['SERVER_NAME'].':8080/myphp/High/MyProfileProject/forgotPassword.php?forgot='.$code;

                     if($dbquery->query("INSERT INTO PassswordReset(User_Id, Reset_Code) VALUES(?,?)",[$id, $code])){
                            if($emailobj->sendEmail($username,$email,$url,'FORGOT','Password Reset Link')){
                                $_SESSION['Reset_Password']= 'Hello '.$username.', We have sent you a reset password link in your mail';
                                header("Lcation: message.php");
                            }
                     }

                }else{
                    $validation->error['email']= "Email <strong style='color:crimson;'>'$email'</strong> provided does not exist.";
                }
            }
        }
    }

?>

<?php include 'includes/navbar.php' ?>
<body>
<section id="form">
    <?php include 'includes/requestpasswordForm.php'?>
</section>  
</body>

<?php include 'includes/footer.php';?>