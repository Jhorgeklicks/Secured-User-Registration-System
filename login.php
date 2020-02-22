<?php 
    include 'init.php';
    $validation = new validation;
    $dbquery =  new Queries;
    if(isset($_SESSION['id'])){
        header("Location: dashboard.php");
    }
?>
<?php
    define("TITLE", "Login Page");
    include 'includes/header.php';
?>

<?php 
    if(isset($_POST['loginbtn'])){
        $validation->validate('email','Email','required');
        $validation->validate('pass','Password','required');

        if($validation->runSuccess()){
           $email = $validation->input('email');
           $password = $validation->input('pass');

           if($dbquery->query("SELECT * FROM Users WHERE email = ?",[$email])){
               if($dbquery->rowCount() > 0){

                    $row        = $dbquery->fetchSingleRow();
                    $id         = $row->Id;
                    $status     = $row->User_Status;
                    $dbpassword   = $row->User_Password;

                    if($status == 0){
                        $_SESSION['notVerified'] = "Please Confirm Your Password inorder to Login. Thanks";
                        header("Location: message.php");
                    }else if($status == 1){
                        
                        if(password_verify($password,$dbpassword)){

                            $_SESSION['id'] = $id;
                            $_SESSION['loader'] = true;
                            header("Location: dashboard.php");
                        }else{
                            $validation->error['pass'] = "Sorry, Password and Email does not match";
                        }
                    }

               }else{
                    $validation->error['email'] = "Sorry, $email not valid";
               }
           }
        }
    }
?>
<body>
    <?php include 'includes/navbar.php';?>
<div class="container">
        <section id="form" class="loginForm">
           <?php include 'includes/loginForm.php';?>
            </div>
        </section>
    </div>
</body>


<?php include 'includes/footer.php'?>