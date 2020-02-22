<div class="section-content">
                    <h1 class="section-header">Upate Password</h1>
                    <div id="separate">
                        <div class="form-body">
                            <form action="" method="POST">
                                
                            <div class="group">
                                    <label for="cpass" class="form-label">Current Password</label>
                                    <input type="password" name="currentpass" id="cpass" class="<?php echo borderRed('changepassbtn',$validation->error['currentpass'])?> control" placeholder="Current password">

                                     <div class="error">
                                        <?php echo @getError('changepassbtn',$validation->error['currentpass'])?>
                                     </div>
                                </div>

                                <div class="group">
                                    <label for="npass" class="form-label">New Password</label>
                                    <input type="password" name="newpass" id="npass" class="<?php echo borderRed('changepassbtn',$validation->error['newpass'])?> control" placeholder="New password">
                                    <div class="error">
                                        <?php echo @getError('changepassbtn',$validation->error['newpass'])?>
                                     </div>
                                </div>

                                <div class="group">
                                    <label for="npass" class="form-label">New Password</label>
                                    <input type="password" name="confirmpass" id="npass" class="<?php echo borderRed('changepassbtn',$validation->error['confirmpass'])?> control" placeholder="Confirm password">
                                    <div class="error">
                                        <?php echo @getError('changepassbtn',$validation->error['confirmpass'])?>
                                     </div>
                                </div>


                                <center>
                                    <div class="group">
                                        <input type="submit" name="changepassbtn" class="btn btn-sweet addjobbtn" value="Update Password">
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>