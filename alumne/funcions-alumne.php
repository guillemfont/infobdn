<?php 

function registrarAlumne($dni, $nom, $cognom, $contrasenya, $email, $edat, $fotografia){

    $connexio = mysqli_connect("localhost", "root", "", "infobdn"); // Connexió amb la BBDD

    $consulta = "INSERT INTO alumnes (dni, nom, cognoms, email, contrasenya, edat, fotografia) VALUES ('$dni','$nom','$cognom','$email', md5('$contrasenya'),'$edat', '$fotografia')";
    if ($connexio->query($consulta) == true) {
        echo "PROFESSOR AFEGIT";
        header('Location: registrat-alumne.php');
    } else {
        header('Location: error-alumne.php');
    }
}

function validarAlumne($user, $pass) {
    
    $connexio = mysqli_connect("localhost", "root", "", "infobdn"); // Connexió amb la BBDD

    $consulta = "SELECT * FROM alumnes WHERE email = '$user' and contrasenya = md5('$pass')";    

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

?>