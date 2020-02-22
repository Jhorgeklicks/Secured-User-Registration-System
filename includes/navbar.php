<nav id="nav">
        <ul class="left-ul">
            <li><a href="#">Klicks<span class="colorme">Gh</span></a></li>
        </ul>
        <ul class="right-ul">
            <?php if(isset($_SESSION['id'])):?>
                <li><a href="logout.php" class="btn btn-sweet">LogOut</a></li>
            <?php else:?>
            <li><a href="login.php" class="btn btn-sweet">Login</a></li>
            <li><a href="index.php" class="btn btn-outline">signUp</a></li>
            <?php endif;?>
            
        </ul>
    </nav>