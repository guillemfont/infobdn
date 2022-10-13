<?php
// Pàgina 'home' de l'administrador

    

    session_start();
    if (!isset($_SESSION['usuari'])) { // Comprovar que la sessió existeix
        header('location:index-admin.php');
    }else{
        
              
        // Codi 
        include('funcions-admin.php');
        include('prof-admin.php');


        $dni = $_GET['dni'];

        if(elimProf($dni)){
            header('location:prof-admin.php');
            echo ("yes");
        } else {
            header('location:prof-admin.php');
            echo ("no");
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=prof-admin.php"> 
    <title>Document</title>
</head>
<body>
    
</body>
</html>        
        