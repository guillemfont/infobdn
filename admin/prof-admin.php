<?php
// Pàgina 'home' de l'administrador


    session_start();
    if (!isset($_SESSION['usuari'])) { // Comprovar que la sessió existeix
        header('location:index-admin.php');
    }else{

       
        // Codi 
        ?>
        <!-- Pagina principal d'inici de sessió  -->

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Info BDN</title>

            <!-- Enllaç al document CSS  -->
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="../css/admin.css">

            <!-- Enllaç a les tipografies  -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">

            <!-- Enllaç a icones  -->
            <script src="https://kit.fontawesome.com/ebca16e450.js" crossorigin="anonymous"></script>

        </head>
        <body background="../img/fondo.jpg">

            <nav>
                
                <a href="home-admin.php"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
                
                <div class="lista">

                    <li>
                        <ul><a href="home-admin.php"><i class="fa-solid fa-house-user"></i></a></ul>
                    </li>
                    <li>
                        <ul><a href="#"><i class="fa-brands fa-blogger"></i></a></ul>
                    </li>
                    <li>
                        <ul><a href="../sortir.php"><i class="fa-solid fa-right-from-bracket"></i></a></ul>
                    </li>
                </div>
            </nav>
            <hr>
            <div class="menu"></div>


            <section>
                <div class="taulaProf">
                    <a href="afegirProf-admin.php">AFEGIR</a>
                    <table>
                        <tr>
                            <td>DNI</td>
                            <td>Nom</td>
                            <td>Cognoms</td>
                            <td>Correu electrònic</td>
                            <td>Titol Acadèmic</td>
                            <td>Fotografía</td>
                            <td>Editar</td>
                            <td>Actiu</td>
                            <td>Eliminar</td>
                        </tr>
                    
                        <?php
                        
                        $connexio = mysqli_connect("localhost", "root", "", "infobdn"); // Connexió amb la BBDD
                        $sql = "SELECT * from professors";
                        $resultat = mysqli_query($connexio, $sql);

                        while ($mostrar = mysqli_fetch_array($resultat)) {
                            if ($mostrar['Actiu']) {
                                              
                        ?>

                        <tr>
                            
                            <td><?php echo $mostrar ['dni'] ?></td>
                            <td><?php echo $mostrar ['nom'] ?></td>
                            <td><?php echo $mostrar ['cognoms'] ?></td>
                            <td><?php echo $mostrar ['email'] ?></td>
                            <td><?php echo $mostrar ['titol_academic'] ?></td>
                            <td><?php echo $mostrar ['fotografia'] ?></td>
                            <td>Editar</td>
                            <td>Actiu</td>
                            <td>Eliminar</td>
                        </tr>
                        <?php
                        }
                         }
                        
                         ?>



                    </table>
                </div>
                 
            </section>


            <footer>

            </footer>



        </body>
        </html>

        <?php

        
    }
?>