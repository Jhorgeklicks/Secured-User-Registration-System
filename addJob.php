<?php 
    include 'init.php';
    $validation = new validation;
    $dbquery = new Queries;
    $profile = new profile;


    define("TITLE","Add Jobs");
    include 'includes/header.php';

    if(isset($_POST['addjobBtn'])){
        $validation->validate('job',"Job","required|alphabetic");

        if($validation->runSuccess()){
            $job = $validation->input('job');
            $userid = $_SESSION['id'];

            if($dbquery->query("UPDATE Users SET User_Job = ? WHERE Id = ? LIMIT 1",[$job, $userid])){
                $_SESSION['JobUpdated'] = "Your Job has been Updated Successfully";
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
                <?php include 'includes/addJobForm.php';?>
            </div>
        </div>
    </div>
</body>

<?php include 'includes/footer.php';?>