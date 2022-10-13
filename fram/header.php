
        <h1 class="Titre">RétroGame</h1>
        <ul class="nav-list">
            <il class="nav-item"><a href="index.php">Accueil</a></il>
            <il class="nav-item"><a href="produits.php">Article</a></il>
            
            <?php 
            if(isset($_SESSION['username'])) {}else{
            ?>
                <il class="log-reg-item"><a href="register.php">Register</a></il>
            <?php }; ?>
            
            <?php
            if(isset($_SESSION['username'])) {
                ?>
                <il class="nav-item"> <a href="infoClient.php">mes infos</a></il>
            <?php } ?>

            <?php
            if(isset($_SESSION['username'])) {
                ?>
                <il class="nav-item"> <a href="deconnexion.php">déconnexion</a></il>
            <?php }?>
            <?php
            if(isset($_SESSION['username'])) {}else{
            ?>
                <il class="log-reg-item"><a href="login.php">login</a></il>
            <?php } ?>
            <il class="nav-item"><a href="contact.php">Nous Contacter</a></il>
          
        </ul>
        </nav>
