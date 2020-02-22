<?php 
    include 'init.php';
    $validation = new validation;
    $dbquery = new Queries;
    $profile = new profile;


    define("TITLE","Add Skills");
    include 'includes/header.php';

    if(isset($_POST['addskillsbtn'])){
        $validation->validate('skills',"skills","required");

        if($validation->runSuccess()){
           echo $skills = $validation->input('skills');
            $userid = $_SESSION['id'];

            if($dbquery->query("UPDATE Users SET User_Skills = ? WHERE Id = ? LIMIT 1",[$skills, $userid])){
                 $_SESSION['skillsUpdated'] = "Your Skills has been Updated Successfully";
                 header("Location: dashboard.php");
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
                <?php include 'includes/addskillForm.php';?>
            </div>
        </div>
    </div>
</body>

<?php include 'includes/footer.php';?>