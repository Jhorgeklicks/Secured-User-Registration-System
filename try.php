<?php

include 'init.php';
$email =  new email;

// http://localhost:8080/myphp/High/MyProfileProject/init.php
$url = 'http://'.$_SERVER['SERVER_NAME'].':8080/myphp/High/MyProfileProject/confirm.php';
$response = $email->sendEmail('Jhorge Klicks','jhorgeklicks@gmail.com',$url,'CONFIRM','PLease Confirm your Mail');

if($response){
    echo 'okay, msg delivered';
}else{
    echo 'odeshie manna';
}
?>

<?php include "init.php"?>
<?php 
    if(isset($_POST['submit'])){
        $obj = new validation;
        $obj->validate('name','Full Name','required|alphabetic');
        $obj->validate('email','Email','required|uniqueEmail|mine');
        $obj->validate('password','Password','required|min_len|5');

        if($obj->runSuccess()){
             $username = $obj->input('name');
             $email    = $obj->input('email');
             $password = $obj->input('password'); 
        }
    }

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
</head>
<body>
    <form method="POST" style="margin:5% 0 0 30%">
   <input type="text" name="name" placeholder="Enter Your name" value="<?php echo showValue('name'); ?>"><br>
    <span style="color: red;display:inline-block; margin: 4px 0 7px 0"><?php @getError($obj->error['name']);?></span>
    <br/>
    <input type="email" name="email" placeholder="example@gmail.com" value="<?php echo showValue('email'); ?>"><br/>
    <span style="color: red;display:inline-block; margin: 4px 0 7px 0"><?php @getError($obj->error['email']);?></span><br/>
    <input type="password" name="password" placeholder="secret pin" ><br/>
    <span style="color: red;display:inline-block; margin: 4px 0 7px 0"><?php @getError($obj->error['password']);?></span><br/>
    <button name="submit" type="submit">Submit</button>
    </form>
</body>
</html>