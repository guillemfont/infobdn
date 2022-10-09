<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info BDN</title>

    <!-- Enllaç al document CSS  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Enllaç a les tipografies  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
</head>
<body background="img/fondo.jpg">

    <nav>
    </nav>


    <section>
        <form action="validacio.php" method="post">
    
            <img src="img/logo.png" alt="LOGO INFOBDN" srcset="">

             <select name="rang" id="rang">
                 <option value="alumne" required>Alumne</option>
                <option value="professor">Professor</option>
            </select>            
            
            <input type="text" name="email" id="email" placeholder= "Correu electrònic" required>
            <input type="password" name="contrasenya" id="contrasenya" placeholder = "Contrasenya" required>
    
            <input id="buto" type="submit" value="ACCEDIR">

            <p><a href="admin/log-admin.php" class="blanc">Admin</a></p>
       
    
        </form> 
    </section>


    <footer>

    </footer>



</body>
</html>