<?php 
include 'init.php';
$validation = new validation;
$dbquery = new Queries;

define("TITLE", "update Username");
include 'includes/header.php';
?>
<?php 
        if(isset($_POST['updatenamebtn'])){
            $validation->validate("updatename","User Name", "required|alphabetic");

            if($validation->runSuccess()){
                $newUsername =  $validation->input('updatename');
                $userid = $_SESSION['id'];
                if($dbquery->query("UPDATE Users SET User_Name = ? WHERE Id = ?",[$newUsername, $userid])){
                    $_SESSION['NameChanged']= "User name changed Successfully";
                    header("Location: dashboard.php");
                }
            }
        }

?>
<body>
    <?php include 'includes/navbar.php'?>

    <div class="container">
        <div class="dashboard">
        <?php include 'includes/cards.php';?>
            <div class="content">
                <div class="section-content">

            <?php include 'includes/updateNameForm.php'?>
                </div>
            </div>
    </div>
    </div>
</body>

<?php include 'includes/footer.php'?>