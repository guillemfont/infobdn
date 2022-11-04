<?php

function registrarAlumne($dni, $nom, $cognom, $contrasenya, $email, $edat, $fotografia)
{

    $connexio = mysqli_connect("localhost", "root", "", "infobdn"); // Connexió amb la BBDD

    $consulta = "INSERT INTO alumnes (dni, nom, cognoms, email, contrasenya, edat, fotografia) VALUES ('$dni','$nom','$cognom','$email', md5('$contrasenya'),'$edat', '$fotografia')";
    if ($connexio->query($consulta) == true) {
        echo "PROFESSOR AFEGIT";
        header('Location: registrat-alumne.php');
    } else {
        header('Location: error-alumne.php');
    }
}

function validarAlumne($user, $pass)
{

    $connexio = mysqli_connect("localhost", "root", "", "infobdn"); // Connexió amb la BBDD

    $consulta = "SELECT * FROM alumnes WHERE email = '$user' and contrasenya = md5('$pass')";

    $resultat = mysqli_query($connexio, $consulta);

    $filas = mysqli_num_rows($resultat);



    if (!empty($resultat) and $filas > 0) {

        return True;
    } else {

        return False;
    }

    mysqli_free_result($resultat);
    mysqli_close($connexio);
}


function dniUsuari($nom)
{
    $connexio = mysqli_connect("localhost", "root", "", "infobdn"); // Connexió amb la BBDD
    $sql = "SELECT * from alumnes WHERE email = '$nom'";
    $resultat = mysqli_query($connexio, $sql);

    while ($mostrar = mysqli_fetch_array($resultat)) {
        $dni = $mostrar['dni'];
    }


    return $dni;
}


function mostrarCursos()
{

    $connexio = mysqli_connect("localhost", "root", "", "infobdn"); // Connexió amb la BBDD

    $dataAvui = date('Y-m-d');
    $dni = dniUsuari($_SESSION['usuari']);
    $sql = "SELECT * FROM cursos WHERE actiu like 1 and data_final>'$dataAvui' and codi IN ( SELECT codi_curs FROM matricula WHERE dni_alumne like '$dni')";



    $consulta = mysqli_query($connexio, $sql);
    if (!$consulta) {
        echo mysqli_error($connexio) . "<br>";
        echo "Error querry no valida " . $sql;
        echo "Redirigint..";
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='1.5;URL=profs_admin.php'>";
    } else {
        $numlines = mysqli_num_rows($consulta);
        for ($i = 0; $i < $numlines; $i++) {
            $curs = mysqli_fetch_assoc($consulta);
            $dniprof = $curs['nom_professor'];
            $sql2 = "SELECT * FROM professors WHERE dni like '$dniprof'";
            $consulta2 = mysqli_query($connexio, $sql2);
            $prof = mysqli_fetch_assoc($consulta2);
?>
            <div class="curs">
                <div class="nom-curs">Nom:</div>
                <div class="descripcio-curs">Descripció:</div>
                <div class="nom-prof">Professor: </div>
                <div class="data-inici">Data d'inici:</div>
                <div class="data-final">Data final:</div>
                <div class="hores-totals">Hores totals:</div>
                <div class="nom"><?php echo $curs['nom']?></div>
                <div class="desc"><?php echo $curs['descripcio']?></div>
                <div class="profnom"><?php echo $prof['nom']." ".$prof['cognoms']?></div>
                <div class="inici"><?php echo $curs['data_inici']?></div>
                <div class="final"><?php echo $curs['data_final']?></div>
                <div class="totals"><?php echo $curs['num_hores']?></div>
                <div class="imatge" id="imatge"><img src="data:image/jpg;base64,<?php echo base64_encode($curs ['fotografia']); ?>"/></div>
                <div class="enllaç"><a href="desmatricular-alumne.php?email=<?php echo $_SESSION['usuari']?>">Desmatricular-me</a></div>
            </div>





<?php
        }
        
    }
}
