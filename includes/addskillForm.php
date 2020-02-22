<div class="section-content">
<?php   
                            $profile = new profile;
                            $profile->SkillsHeader();
                     ?>
                    <div id="separate">
                        <div class="form-body">
                            <form action="" method="POST">
                                <div class="group">
                                    <label for="addskills" class="form-label">Add Skills</label>
                                    <input type="text" name="skills"  class="<?php echo borderRed('addskillsbtn', $validation->error['skills'])?> control" placeholder="Php, Java , Python etc..." value="<?php $profile->fetchSkills();?>">
                                    <div class="error">
                                        <?php echo @getError('addskillsbtn', $validation->error['skills'])?>
                                    </div>
                                </div>
                                <center>
                                    <div class="group">
                                        <input type="submit" name="addskillsbtn" id="btn" class="btn btn-sweet addskillsbtn" value="Add Skills">
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>