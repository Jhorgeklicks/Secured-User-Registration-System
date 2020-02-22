<div class="card">
<?php 
   $profile = new profile;
?>
    <!-- display user image on the dashboard -->
    <?php $profile->showImage(); ?>
    <!-- display username in the dashboard -->
    <?php $profile->displayname();?>
    <!-- display job information -->
    <?php $profile->displayJob();?> 
    <!-- display skills  -->
    <?php $profile->displaySkills();?>
    <!-- display user Biography  -->
    <?php $profile->displayBio(); ?>

<div class="card_settings">
    <a href="dashboard.php" class="btn btn-sweet">Settings</a>
</div>
</div>