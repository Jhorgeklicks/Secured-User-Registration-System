<div class="section-content">
            <?php $profile->JobHeading(); ?>
                    
                    <div id="separate">
                        <div class="form-body">
                            <form action="" method="POST">
                                <div class="group">
                                    <label for="job" class="form-label">User Job</label>
                                    <input type="text" name="job" id="job" class="<?php echo borderRed('addjobBtn',$validation->error['job'])?> control" placeholder="Add Job" value="<?php @$profile->fetchJob();?>">
                                    <div class="error">
                                        <?php echo @getError('addjobBtn',$validation->error['job'])?>
                                    </div>
                                </div>
                                <center>
                                    <div class="group">
                                        <input type="submit" name="addjobBtn" id="btn" class="btn btn-sweet addjobbtn" value="Add Job">
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>