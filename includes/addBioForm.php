<div class="section-content">
                    <?php   
                            $profile = new profile;
                            $profile->BioHeader();
                     ?>
                    <div id="separate">
                        <div class="form-body">
                            <form action="" method="POST">
                                <div class="group">
                                    <label for="mybio" class="form-label">Add Bio</label>
                                    <textarea name="bio"  cols="30" rows="10" placeholder="Your Biography Here..." class="<?php echo borderRed('biobtn',$validation->error['bio'])?> control" maxlength="200"><?php $profile->fetchBio();?></textarea>
                                    <div class="error">
                                        <?php echo @getError('biobtn',$validation->error['bio'])?>
                                    </div>
                                </div>
                                <center>
                                    <div class="group">
                                        <input type="submit" name="biobtn" class="btn btn-sweet" value="Add Bio">
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>