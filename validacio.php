<?php

    error_reporting(0);

    // FUNCIÓ

    function validar($user, $pass) {

        $consulta = "SELECT * FROM administradors WHERE usuari = '$user' and contrasenya = md5($pass)";    

        $connexio = mysqli_connect("localhost", "root", "", "infobdn");

        $resultat = mysqli_query($connexio, $consulta);

        $filas = mysqli_num_rows($resultat);



        if(!empty($resultat) and $filas > 0){

           return True;


        }  
        
        
        else {

            return False;

        }

        mysqli_free_result($resultat);
        mysqli_close($connexio);

    }




    // CODI PRINCIPAL

    $correu= $_POST['email'];
    $contrasenya= $_POST["contrasenya"];

    if (validar($correu, $contrasenya)){

        session_start();
        $_SESSION["correu"]=$correu;

        header("location:admin/administrador.php");
    }

    else {

        include("index.php")

        ?>

        <h1>USUARI I/O CONTRASENYA INCORRECTES</h1>
        <?php

    }


    

   




?>