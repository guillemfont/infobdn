<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info BDN</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body background="img/fondo.jpg">

    <nav>
    </nav>


    <section>
        <form action="validacio.php" method="post">
    
            <img src="img/logo.png" alt="LOGO INFOBDN" srcset="">

             <select name="rang" id="rang">
                <option value="professor">Professor</option>
                <option value="alumne">Alumne</option>
            </select>            
            
            <input type="text" name="email" id="email" placeholder= "Correu electrònic" required>
            <input type="password" name="contrasenya" id="contrasenya" placeholder = "Contrasenya" required>
    
            <input id="buto" type="submit" value="Accedir">

            <p><a href="admin/log-admin.php" class="blanc">Admin</a></p>
       
    
        </form> 
    </section>


    <footer>

    </footer>



</body>
</html>