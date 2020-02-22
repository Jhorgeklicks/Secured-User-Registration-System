    <div class="section-content">
        <?php $profile->imageHeader();?>
        <div id="separate">
             <div class="form-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="group">
                    <label for="mylabel" class="<?php @borderRed('uploatbtn',$uploadImages->imageError['image']);?> form-label" id="label"></label>
                    <input type="file" name="image" id="mylabel" class="<?php @borderRed('uploatbtn',$uploadImages->imageError['image']);?> myImage" onchange="imageName();">
                    <div class="error">
                        <?php echo @getError('uploatbtn',$uploadImages->imageError['image']);?>
                    </div>
                </div>
                
                <center>
                    <div class="group">
                        <input type="submit" name="uploatbtn" id="btn" class="btn btn-sweet imagebtn" value="Upload Image">
                    </div>
                </center>

                 </form>
            </div>
        </div>
     </div>