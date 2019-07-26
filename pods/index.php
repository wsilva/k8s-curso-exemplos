<h1>Olá!</h1>
<?php if($_ENV["HOSTNAME"]) {?>
    <h3> Eu sou o container <?php echo $_ENV["HOSTNAME"]; ?>!</h3>
<?php } ?>
<hr>
<?php phpinfo(); ?>
