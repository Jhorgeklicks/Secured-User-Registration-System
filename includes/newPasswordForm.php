<div class="form-section">
                     <div class="form-header">
                        <h2>User Password Reset Form</h2>
                        <p>Please Create A New Password</p>
                     </div>
                </div>
                <div class="form-body">
                    <form action="" method="POST">
                    <div class="group">
                            <label for="pass" class="form-label">New Password</label>
                            <input type="password" name="newpass" id="npass" class="<?php borderRed('updatePassword',$validation->error['newpass']);?> control" placeholder="New password">
                            <div class="error">
                            <?php echo @getError('updatePassword',$validation->error['newpass']);?>
                            </div>
                        </div>

                        <div class="group">
                            <label for="pass" class="form-label">Confirm Password</label>
                            <input type="password" name="confirmpass" id="cpass" class="<?php borderRed('updatePassword',$validation->error['confirmpass']);?> control" placeholder=" confirm password">
                            <div class="error">
                            <?php echo @getError('updatePassword',$validation->error['confirmpass']);?>
                            </div>
                        </div>
                        <center>
                            <div class="group">
                                <input type="submit" name="updatePassword" id="btn" class="btn btn-sweet" value="Reset Password">
                            </div>
                        </center>
                    </form>
                </div>