<div class="form-section">
                <div class="form-header">
                    <h2>sign In, and enjoy our services</h2>
                    <p>Please enter your credentials!!</p>
                </div>
                <!--End of form header-->
                <div class="form-body">
                    <form action="" method="POST">
                        
                        <div class="group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="<?php borderRed('loginbtn',$validation->error['email']);?> control" placeholder="example@gmail.com" value="<?php echo showValue('loginbtn','email'); ?>">
                            <div class="error">
                                <?php echo @getError('loginbtn',$validation->error['email']);?>
                            </div>
                        </div>
                        
                        <div class="group">
                            <label for="pass" class="form-label">Password
                                <span class="forgetpassword"><a href="requestPassword.php">Forgot password ?</a></span>
                            </label>
                            <input type="password" name="pass" id="pass" class="<?php borderRed('loginbtn',$validation->error['pass']);?> control" placeholder="password">
                            <div class="error">
                                <?php echo @getError('loginbtn',$validation->error['pass']);?>
                            </div>
                        </div>

                        <center>
                            <div class="group">
                                <input type="submit" name="loginbtn" id="btn" class="btn btn-sweet loginbtn" value="Sign In">
                            </div>
                        </center>
                    </form>
                </div>