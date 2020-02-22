<?php 
        if(isset($_SESSION['ImgUploaded'])){
            echo '
                <div class="alert alert-success">
                <div class="alert-heading">
                    <span class="alert-icon">&check;</span>
                    <span class="alert-heading-text"><strong>Success</strong></span>
                </div>
                <div class="alert-body">
                    <span>'.$_SESSION['ImgUploaded'].'</span>
                </div>
            </div>
            ';
        }
        unset($_SESSION['ImgUploaded']);

        if(isset($_SESSION['NameChanged'])){
            echo '
                <div class="alert alert-success">
                <div class="alert-heading">
                    <span class="alert-icon">&check;</span>
                    <span class="alert-heading-text"><strong>Success</strong></span>
                </div>
                <div class="alert-body">
                    <span>'.$_SESSION['NameChanged'].'</span>
                </div>
            </div>
            ';
        }
        unset($_SESSION['NameChanged']);

        if(isset($_SESSION['JobUpdated'])){
            echo '
                <div class="alert alert-success">
                <div class="alert-heading">
                    <span class="alert-icon">&check;</span>
                    <span class="alert-heading-text"><strong>Success</strong></span>
                </div>
                <div class="alert-body">
                    <span>'.$_SESSION['JobUpdated'].'</span>
                </div>
            </div>
            ';
        }
        unset($_SESSION['JobUpdated']);

        if(isset($_SESSION['skillsUpdated'])){
            echo '
                <div class="alert alert-success">
                <div class="alert-heading">
                    <span class="alert-icon">&check;</span>
                    <span class="alert-heading-text"><strong>Success</strong></span>
                </div>
                <div class="alert-body">
                    <span>'.$_SESSION['skillsUpdated'].'</span>
                </div>
            </div>
            ';
        }
        unset($_SESSION['skillsUpdated']);

        if(isset($_SESSION['BioUpdated'])){
            echo '
                <div class="alert alert-success">
                <div class="alert-heading">
                    <span class="alert-icon">&check;</span>
                    <span class="alert-heading-text"><strong>Success</strong></span>
                </div>
                <div class="alert-body">
                    <span>'.$_SESSION['BioUpdated'].'</span>
                </div>
            </div>
            ';
        }
        unset($_SESSION['BioUpdated']);

        if(isset($_SESSION['PasswordUpdated'])){
            echo '
                <div class="alert alert-success">
                <div class="alert-heading">
                    <span class="alert-icon">&check;</span>
                    <span class="alert-heading-text"><strong>Success</strong></span>
                </div>
                <div class="alert-body">
                    <span>'.$_SESSION['PasswordUpdated'].'</span>
                </div>
            </div>
            ';
        }
        unset($_SESSION['PasswordUpdated']);
?>