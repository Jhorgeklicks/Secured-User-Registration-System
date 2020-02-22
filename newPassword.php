<?php
    include 'init.php';
    if(isset($_SESSION['id'])):
      header("Location: dashboard.php");
      endif;

    $validation = new validation;
    $dbquery = new Queries;

    define("TITLE","Update Password");
    include 'includes/header.php';
?>
<body> 
   <?php 
        if(isset($_POST['updatePassword'])){
          $validation->validate('newpass','Password','required|min_len|5');
          $validation->validate('confirmpass','Password','required|min_len|5');

          if($validation->runSuccess()){
            $newPassword = $validation->input('newpass');
            $confirmPassword = $validation->input('confirmpass');

            if($newPassword !== $confirmPassword){
               $validation->error['confirmpass']='Password does not match';
            }else{
                $id = $_SESSION['RequestUserId'];
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                if($dbquery->query("UPDATE Users SET User_Password = ? WHERE Id = ?",[$hashedPassword,$id])){
                    $_SESSION['PasswordUpdated']= "Hello user, Your Password Has been Updated Successfully, Kindly click on the link below to login. Thanks. <div style='display:block; margin:5px 0; font-size:20px'><a style='color: #fff; display: inline-block;border: none;padding: 5px 10px;border-radius: 5px;background-color: #28a745;text-align: right;float: right;' href='login.php'>Login</a>";
                    header("Location: message.php");
                }
            }
          }

        }
   ?>
<?php include 'includes/navbar.php'?>
        <div class="container">
            <div id="form">
                <?php if(isset($_SESSION['RequestUserId'])): ?>

              <?php include 'includes/newPasswordForm.php';?>

              <?php else :
                $_SESSION['Access_Forbidden'] = "Hey Jack!, You have no access here."; 
                header("Location: message.php");
                ?>
                <?php endif;?>
            </div>
        </div>

</body>
<?php include 'includes/footer.php'?>