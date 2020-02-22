<?php 
    include 'init.php';
    include 'auth.php';
    $uploadImages = new uploadImages;
    $profile = new profile;

    define("TITLE","Image Upload");
    include 'includes/header.php';
?>
<?php 
    if(isset($_POST['uploatbtn'])){
        $extensions = ['png','jpeg','jpg'];
        $uploadImages -> uploadImg('image',$extensions);

        
    }
?>
<body>
    <?php include 'includes/navbar.php';?>
    <div class="container">
        <div class="dashboard">
            <?php include 'includes/cards.php'?>
            <div class="content">
                <?php include 'includes/UploadImgForm.php'?>
            </div>
        </div>
    </div>
   

    <script>
            function imageName() {
                let image = document.getElementById("mylabel").value;
                let imageName = image.split("\\");
                let index = imageName.length - 1;
                let grabImageName = imageName[index];
                document.getElementById("label").innerHTML = grabImageName;
            }
        </script>
</body>

<?php include 'includes/footer.php';?>
