<?php 

    class profile extends Queries{
        public function settings(){
            $User_id = $_SESSION['id'];
                if($this->query("SELECT * FROM Users WHERE Id = ?",[$User_id])){
                    $row = $this->fetchSingleRow();

                    $image   = $row->User_Image;
                    $job     = $row->User_Job;
                    $skills  = $row->User_Skills;
                    $bio     = $row->User_Biography;

                    if(empty($image)){
                        echo ' <span class="btn-section"><a href="uploadImage.php" class="btn btn-white">Add Picture <span class="icon">&#43;</span></a></span>
                        ';
                    }else{
                        echo '<span class="btn-section"><a href="uploadImage.php" class="btn btn-white">Update Picture <span class="icon">&rarr;</span></a></span>';
                    }

                    if(empty($job)){
                        echo ' <span class="btn-section"><a href="addJob.php" class="btn btn-white">Add Job <span class="icon">&#43;</span></a></span>
                        ';
                    }else{
                        echo '<span class="btn-section"><a href="addJob.php" class="btn btn-white">Update Job <span class="icon">&rarr;</span></a></span>';
                    }

                    if(empty($skills)){
                        echo ' <span class="btn-section"><a href="addskill.php" class="btn btn-white">Add Skills <span class="icon">&#43;</span></a></span>
                        ';
                    }else{
                        echo '<span class="btn-section"><a href="addskill.php" class="btn btn-white">Update Skills <span class="icon">&rarr;</span></a></span>';
                    }
                    if(empty($bio)){
                        echo ' <span class="btn-section"><a href="addBio.php" class="btn btn-white">Add Biography <span class="icon">&#43;</span></a></span>
                        ';
                    }else{
                        echo '<span class="btn-section"><a href="addBio.php" class="btn btn-white">Update Biography <span class="icon">&rarr;</span></a></span>';
                    }
                    echo '<br/>';
                    echo '<span class="btn-section"><a href="updateName.php" class="btn btn-white">Update Name <span class="icon">&rarr;</span></a></span>';

                    echo '<span class="btn-section"><a href="updatePassword.php" class="btn btn-white">Update Password <span class="icon">&rarr;</span></a></span>';
                }
        }

        public function ImageHeader(){
            $User_id = $_SESSION['id'];
                if($this->query("SELECT User_Image FROM Users WHERE Id = ?",[$User_id])){
                    $row = $this->fetchSingleRow();

                    $image   = $row->User_Image;
                    if(empty($image)){
                        echo '<h1 class="section-header">Add Image</h1>';
                    }else{
                        echo '<h1 class="section-header">Update Image</h1>';
                    }
                    
                }
            }

        public function showImage(){
            $userId = $_SESSION['id'];

            if($this->query("SELECT * FROM Users WHERE Id= ?",[$userId])){
                $row = $this->fetchSingleRow();
                $imageName = $row->User_Image;
                $imageName = ucwords($imageName);
                $username = $row->User_Name;

                if(!empty($imageName)){
                    echo '<div class="card_image">
                    <img src="assets/img/'. $imageName .'" alt="image">
                </div>';
                }else{
                    
                    $xters = '';
                    $username = ucwords($username);
                    $username = explode(' ', $username);

                    foreach($username as $key => $value):
                        if($key == 2):
                        break;
                        else:
                            $xters .= $value[0]; 
                        endif;
                    endforeach;
                   

                    echo '<div class="card_image">
                     <span class="avatar">'.$xters.'</span>
                </div>';
                }
            }
        }

        public function displayname(){
            $userId = $_SESSION['id'];
            if($this->query("SELECT * FROM Users WHERE Id= ?",[$userId])){
                $row = $this->fetchSingleRow();
                $username = $row->User_Name;
                if(empty($username)){
                    header("Location: login.php");
                }else{
                    echo '<div class="card_name">
                    <p>'. ucwords($username).'</p>
                </div>';
                }
            }
        }

        public function showName(){
            $userId = $_SESSION['id'];
            if($this->query("SELECT * FROM Users WHERE Id= ?",[$userId])){
                $row = $this->fetchSingleRow();
                $username = $row->User_Name;
                if(empty($username)){
                    
                }else{
                    echo '
                    <label for="u_name" class="form-label">Update Name</label>
                                    <input type="text" name="updatename" id="u_name" class="control" placeholder="Update Name" value="'. $username.'">
                                    
                                    ';
                }
            }
        }

        public function JobHeading(){
            $userId = $_SESSION['id'];
            if($this->query("SELECT * FROM Users WHERE Id= ?",[$userId])){
                $row = $this->fetchSingleRow();
                $job = $row->User_Job;

                if(empty($job)){
                    echo '<h1 class="section-header">Add Job</h1>';
                }else{
                    echo '<h1 class="section-header">Update Job</h1>';
                }
            }
        }

        public function displayJob(){
            $userId = $_SESSION['id'];
            if($this->query("SELECT * FROM Users WHERE Id= ?",[$userId])){
                $row = $this->fetchSingleRow();
                $job = $row->User_Job;
                if(empty($job)){
                    echo '<div class="card_job">
                    <p>Please Update Job</p>
                    </div>';
                }else{
                    echo '<div class="card_job">
                    <p>'.ucwords($job).'</p>
                    </div>';
                }
            }
        }

        public function fetchJob(){
            $userId = $_SESSION['id'];
            if($this->query("SELECT * FROM Users WHERE Id= ?",[$userId])){
                $row = $this->fetchSingleRow();
                $job = $row->User_Job;
                if(empty($job)){
                    
                }else{
                    echo $job;
                }
            }
        }

        public function SkillsHeader(){
            $User_id = $_SESSION['id'];
                if($this->query("SELECT * FROM Users WHERE Id = ?",[$User_id])){
                    $row = $this->fetchSingleRow();

                    $skills   = $row->User_Biography;
                    if(empty($skills)){
                        echo '<h1 class="section-header">Add Skills</h1>';
                    }else{
                        echo '<h1 class="section-header">Update Skills</h1>';
                    }
                    
                }
            }

        public function displaySkills(){
            $userId = $_SESSION['id'];
            if($this->query("SELECT * FROM Users WHERE Id= ?",[$userId])){
                $row = $this->fetchSingleRow();
                $skills = $row->User_Skills;
                if(empty($skills)){
                    echo '<div class="card_skill">
                    <span class="skills">add skills</span>
                </div>';
                }else{
                    $skills = explode(',',$skills);
                    $count = count($skills);
                    echo '<div class="card_skill">';
                    for($i=0; $i<$count; $i++){
                        echo '<span class="skills"> '.ucwords($skills[$i]).' </span>';
                    }
                    echo ' </div>';
                }
            }
        }

        public function fetchSkills(){
            $userId = $_SESSION['id'];
            if($this->query("SELECT * FROM Users WHERE Id= ?",[$userId])){
                $row = $this->fetchSingleRow();
                $skills = $row->User_Skills;
                if(empty($skills)){
                    
                }else{
                   echo $skills;
                }
            }
        }


        public function BioHeader(){
            $User_id = $_SESSION['id'];
                if($this->query("SELECT * FROM Users WHERE Id = ?",[$User_id])){
                    $row = $this->fetchSingleRow();

                    $bio   = $row->User_Biography;
                    if(empty($bio)){
                        echo '<h1 class="section-header">Add Bio</h1>';
                    }else{
                        echo '<h1 class="section-header">Update Bio</h1>';
                    }
                    
                }
            }

            
        public function displayBio(){
            $userId = $_SESSION['id'];
            if($this->query("SELECT * FROM Users WHERE Id= ?",[$userId])){
                $row = $this->fetchSingleRow();
                $Bio = $row->User_Biography;
                if(empty($Bio)){
                    echo '<div class="card_intro">
                    <p>"Please set your Biography"</p>
                </div>';
                }else{
                    echo '<div class="card_intro">
                    <p>'. ucwords($Bio) .'</p>
                </div>';
                }
            }
        }

        public function fetchBio(){
            $userId = $_SESSION['id'];
            if($this->query("SELECT * FROM Users WHERE Id= ?",[$userId])){
                $row = $this->fetchSingleRow();
                $Bio = $row->User_Biography;
                echo $Bio;
            }
        }

        public function showPassValue(){
            $userId = $_SESSION['id'];
            if($this->query("SELECT * FROM Users WHERE Id= ?",[$userId])){
                $row = $this->fetchSingleRow();
                $password = $row->User_Password;
                echo $password;
            }
        }

        }
?>
