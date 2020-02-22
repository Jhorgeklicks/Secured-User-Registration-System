<?php 
    include "init.php";

    if(isset($_SESSION['id'])):
    header("Location: dashboard.php");
    endif;

    define("TITLE","Index | Create New Account");

    $validation = new validation;
    $dbquery = new Queries;
    $emailObj =  new email;

    // ***** delete this later , just to test the ish
    
    //$code = password_hash(time(), PASSWORD_DEFAULT);
        //    echo $url = 'http://'.$_SERVER['SERVER_NAME'].':8080/myphp/High/MyProfileProject/verify.php?confirmation='.$code;

    if(isset($_POST['signup'])){
        // echo "<script>alert('hello world')</script>";
          $validation->validate('username','Full Name','required|alphabetic');
          $validation->validate('email','Email','required|uniqueEmail|users');
          $validation->validate('pass','Password','required|min_len|5');

    if($validation->runSuccess()){
          $username =  $validation->input('username');
          $email    =  $validation->input('email');
          $password =  $validation->input('pass'); 
          $password = password_hash($password, PASSWORD_DEFAULT);
          // if user email is not verified, we set the status to 0
          $status = 0;

            // creating unique code for the email confirmation
            $code = password_hash(time(), PASSWORD_DEFAULT);
            $url = 'http://'.$_SERVER['SERVER_NAME'].':8080/myphp/High/MyProfileProject/verify.php?confirmation='.$code;

          if($dbquery->query("INSERT INTO Users(User_Name,email,User_Password,User_Status)VALUES(?,?,?,?)",[$username,$email,$password, $status])){
                // echo "<script>alert('hello $username, Please verify your Email')</script>";
                if($dbquery->query("INSERT INTO Email_Confirmation(email,Confirmation_Code) VALUES(?,?)",[$email, $code])){

                    if($emailObj->sendEmail($username,$email ,$url,'CONFIRM','PLease Confirm your Mail')){
                        // echo "Hello $username, Please confirm your Email to complete Registration";
                        $_SESSION['account_created'] = 'Your Account has been created successfully, Please check your Email';
                        header("Location: message.php");
                    }

                }
          }
    }
        
    }

?>

<?php   include 'includes/header.php'; ?>

<body>
   
<?php include 'includes/navbar.php'?>

    <div class="container">
        <section id="form" class="RegForm">
        <?php include 'includes/signup.php';?>           
        </section>
    </div>
</body>
<?php include 'includes/footer.php';?>
