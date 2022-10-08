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
    

        <h1>BENVINGUT</h1>

        <a href="profe-admin.php">Afegir nou professor</a>



        <a href="../sortir.php">Tanca la sessió</a>

</body>
</html>
<?php    
    }
?>