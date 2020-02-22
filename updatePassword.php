<?php 
    include 'init.php';
    $validation = new validation;
    $dbquery = new Queries;

    define("TITLE","Update Password");
    include 'includes/header.php';

    if(isset($_POST['changepassbtn'])){
        $validation->validate('currentpass',"Current Password","required");
        $validation->validate('newpass',"New Password","required");
        $validation->validate('confirmpass',"Confirm Password","required");

        if($validation->runSuccess()){
            $oldpass         = $validation->input('currentpass');
            $newpassword     = $validation->input('newpass');
            $confirmpassword = $validation->input('confirmpass');

            $oldpass = password_hash($oldpass, PASSWORD_DEFAULT);
            $userid = $_SESSION['id'];

            if($dbquery->query("SELECT * FROM Users  WHERE User_Password=? AND Id=?",[$oldpass, $userid])){
                if(!$dbquery->rowCount() === 1){
                    $validation->error['currentpass'] = "Invalid Password Provided";
                }else{
                    if($newpassword == $confirmpassword){
                        $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);
                        
                        if($dbquery->query("UPDATE Users SET User_Password = ? WHERE Id=?",[$newpassword, $userid])){
                            $_SESSION['PasswordUpdated'] = "Your Password has been Updated Successfully";
                              header("Location: dashboard.php");
                        }
                    }else{
                        $validation->error['confirmpass'] = "Passwords do not match, Please make sure they match";
                    }
                }
                
            }
        }
        
    }
?>
<body>
    <?php include 'includes/navbar.php';?>
    <div class="container">
        <div class="dashboard">
        <?php include 'includes/cards.php';?>
            <div class="content">
                <?php include 'includes/updatePasswordForm.php';?>
            </div>
        </div>
    </div>
</body>

<?php include 'includes/footer.php';?>
