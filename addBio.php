<?php 
    include 'init.php';
    $validation = new validation;
    $dbquery = new Queries;
    


    define("TITLE","Add Biography");
    include 'includes/header.php';

    if(isset($_POST['biobtn'])){
        $validation->validate('bio',"Biography","required");

        if($validation->runSuccess()){
            $bio = $validation->input('bio');
            $userid = $_SESSION['id'];

            if($dbquery->query("UPDATE Users SET User_Biography =? WHERE Id =?",[$bio, $userid])){
                 $_SESSION['BioUpdated'] = "Your Biography has been Updated Successfully";
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
                <?php include 'includes/addBioForm.php';?>
            </div>
        </div>
    </div>
</body>

<?php include 'includes/footer.php';?>