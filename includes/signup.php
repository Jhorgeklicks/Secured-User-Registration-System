            <div class="form-section">
                <div class="form-header">
                    <h2>Get started , its absolutely free</h2>
                    <p>free forever, no instant card required!!</p>
                </div>
                <!--End of form header-->
                <div class="form-body">
                    <form action="" method="POST">
                        <div class="group">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" name="username" id="name" class="<?php borderRed('signup',$validation->error['username']);?> control" placeholder="username here" value="<?php echo showValue('signup','username'); ?>">
                            <div class="error">
                            <?php echo @getError('signup',$validation->error['username']);?>
                            </div>
                        </div>
                        <div class="group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="<?php borderRed('signup',$validation->error['email']);?> control" placeholder="example@gmail.com" value="<?php echo showValue('signup','email'); ?>">
                            <div class="error">
                            <?php echo @getError('signup',$validation->error['email']);?>
                            </div>
                        </div>
                        <div class="group">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" name="pass" id="pass" class="<?php borderRed('signup',$validation->error['pass']);?> control" placeholder="password">
                            <div class="error">
                            <?php echo @getError('signup',$validation->error['pass']);?>
                            </div>
                        </div>
                        <center>
                            <div class="group">
                                <input type="submit" name="signup" id="btn" class="btn btn-sweet signup" value="Submit">
                            </div>
                        </center>
                    </form>
                </div>
            </div>