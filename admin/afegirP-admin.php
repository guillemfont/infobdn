<?php

    error_reporting(0);

    session_start();
    if (!isset($_SESSION['correu'])) {
        header('location:log-admin.php');
    }else{
        
        // CODIGO

        $dni = $_POST['dni'];
        $nom = $_POST['nom'];
        $cognom = $_POST['cognom'];
        $email = $_POST['email'];
        $contrasenya = $_POST['contrasenya'];
        $titolAcademic = $_POST['titolAcademic'];

        if (($_FILES['fotografia']['name']!="")){
            // Emmagatzemar la foto
                $target_dir = "../img/";
                $file = $_FILES['fotografia']['name'];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['fotografia']['tmp_name'];
                $fotografia = $target_dir.$filename.".".$ext;
             
            // Comprovar que la foto existeix
            if (file_exists($fotografia)) {
             }else{
             move_uploaded_file($temp_name,$fotografia);
             }
            }
        


        $connexio = mysqli_connect("localhost", "root", "", "infobdn");

        $query = "INSERT INTO professors VALUES ('$dni', '$nom', '$cognom', '$email', '$contrasenya', '$titolAcademic', '$fotografia')";

        mysqli_query($connexio, $query);

        if(!mysqli_query($connexio, $query)){

            include("home-admin.php")

            ?>

            <h1>Professor creat</h1>
            <?p

        } else {
            
            include("home-admin.php")

            ?>

            <h1>No s'ha pogut crear el professor.</h1>
            <?php
        }
    }
?>