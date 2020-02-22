                    <?php $profile = new profile;?>
                    
                    <div id="separate">
                        <div class="form-body">
                            <form action="" method="POST">
                                <div class="group">
                                <?php $profile->showName();?>
                                <div class="error">
                            <?php echo @getError('updatenamebtn',$validation->error['updatename']);?>
                            </div>
                                </div>
                                <center>
                                    <div class="group">
                                        <input type="submit" name="updatenamebtn" id="btn" class="btn btn-sweet updatenamebtn" value="Update Name">
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                