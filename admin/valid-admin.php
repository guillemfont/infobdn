<?php

$usuari = $_POST['usuari'];
$contrasenya = $_POST['contrasenya'];

include("funcions-admin.php");


if (validar($usuari, $contrasenya)){

    session_start();
    $_SESSION['usuari']=$usuari;

    header("location:home-admin.php");
}

else {

    include("index-admin.php")

    ?>

    <h1>USUARI I/O CONTRASENYA INCORRECTES</h1>
    <?php

}





?>