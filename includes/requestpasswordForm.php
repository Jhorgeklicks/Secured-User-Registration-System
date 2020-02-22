<div class="form-section">
       <div class="form-header">
       <h2>Forgot Your Password ?</h2>
       <p>Enter your email address below and we'll get you back on track.</p>
       </div>
       <!-- Close form--header -->
       <div class="form-body">
       <form action="" method="POST">
           <div class="group">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" id="email" class="<?php echo borderRed('resetpwdbtn',$validation->error['email']);?> control" placeholder="Email" value="<?php echo showValue('resetpwdbtn', 'email');?>">
            <div class="error">
            <?php echo @getError('resetpwdbtn',$validation->error['email']);?>
            </div>            
           </div>
           <!-- Close group -->
          <center>
          <div class="group">
            <input type="submit" name="resetpwdbtn" class="btn btn-sweet" value="Request Reset Link">
           </div>
          </center>
           <!-- Close group -->
       </form>
       </div>
       <!-- Close form--body -->
       </div>