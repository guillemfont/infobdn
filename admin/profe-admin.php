<?php

    session_start();
    if (!isset($_SESSION['correu'])) {
        header('location:log-admin.php');
    }else{
        
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        <form action="afegirP-admin.php" method="post" enctype="multipart/form-data">

            <p>DNI: <input type="text" name="dni" id="dni" required></p>
            <p>Nom: <input type="text" name="nom" id="nom" required></p>
            <p>Cognom: <input type="text" name="cognom" id="cognom" required></p>
            <p>Email: <input type="text" name="email" id="email" required></p>
            <p>Contrasenya: <input type="password" name="contrasenya" id="contrasenya" required></p>
            <p>Títol acadèmic: <input type="text" name="titolAcademic" id="titolAcademic" required></p>
            <p>Fotografìa:  <input type="file" name="fotografia" id="fotografia" required></p>

            <input type="submit" value="CREA">


        </form>

        



        <a href="../sortir.php">Tanca la sessió</a>

</body>
</html>
<?php    
    }
?>