<?php
    require('./config/connexion.php');
?>
<?php require('./fram/header.php') ?>
<div class="contenaire-box-center-client">
    <div class="info-client">
        <p> username : <?php echo $data['username'];?></p></br>
        <p> email : <?php echo $data['email'];?></p></br> 
        <p> grade : <?php echo $data['grade'];?></p>
    </div>
</div>
<?php require('./fram/footer.php')?>