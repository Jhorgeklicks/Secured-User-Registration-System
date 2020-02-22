<?php 
    include 'init.php';
    include 'auth.php';
    $profile = new profile;
    define("TITLE","Dashboard");
    include 'includes/header.php';
?>
<body>
    <?php if(isset($_SESSION['loader'])):?>
    <div class="loader-box">
        <div class="loader-section">
            <div class="loader-element">
                <span class="loader"></span>
                <span class="loader"></span>
                <span class="loader"></span>
                <span class="loader"></span>
                <span class="loader"></span>
            </div>
        </div>
    </div>
    <?php endif; unset($_SESSION['loader'])?>

<?php include 'includes/navbar.php';?>
    <div class="container">
        <div class="dashboard">
            <?php include 'includes/cards.php';?>
            <div class="content">
            <?php include 'includes/contentSection.php';?>
            </div>
        </div>
    </div>
    <script>
        let loader = document.querySelector('.loader-box');
        setTimeout( function(){
            loader.style.display = "none";
        }, 5000);
    </script>
</body>
<?php include 'includes/footer.php';?>