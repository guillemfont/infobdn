<?php
// Funcions relacionades amb l'apartat de l'administrador



// Funció per validar l'inici de sessió:
function validar($user, $pass) {
    
    $connexio = mysqli_connect("localhost", "root", "", "infobdn"); // Connexió amb la BBDD

    $consulta = "SELECT * FROM administradors WHERE email = '$user' and contrasenya = md5($pass)";    

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

// Funció per afegir professors 
function dadesProf($dni, $nom, $cognom, $email, $contrasenya, $titol, $img){

    $connexio = mysqli_connect("localhost", "root", "", "infobdn"); // Connexió amb la BBDD

    $consulta = "INSERT INTO professors (dni, nom, cognoms, email, contrasenya, titol_academic, fotografia) VALUES ('$dni','$nom','$cognom','$email', md5($contrasenya),'$titol', '$img')";
    if ($connexio->query($consulta) == true) {
        echo "PROFESSOR AFEGIT";
        header('Location: prof-admin.php');
    } else {
        die("Error al insertar les dades: ". $connexio->error);
    }

    
}

// Funció per eliminar professors 
function elimProf($dni){

    $connexio = mysqli_connect("localhost", "root", "", "infobdn"); // Connexió amb la BBDD

    $consulta = "DELETE FROM professors where dni='$dni'";

    if ($connexio->query($consulta) == true) {
        echo "PROFESSOR ELIMINAT";
        header('Location: prof-admin.php');
    } else {
        die("Error al eliminar les dades: ". $connexio->error);
    }

    
}







?>