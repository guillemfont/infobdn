<?php

if($_POST){

    error_reporting(0);

    
    $usuari = $_POST['usuari'];
    $contrasenya = $_POST['contrasenya'];
    
    include("funcions-admin.php");
    
    
    if (validar($usuari, $contrasenya)){
        
        session_start();
    $_SESSION['usuari']=$usuari;

    header("location:home-admin.php");
}

else {

    include("index-admin.php")
    
?>
    <script>
        let incorrecte = document.getElementById('errorIn');
        incorrecte.style.display = 'inline-block';
        
        
        
        // .style.display = "inline-block";
        // document.getElementById(menu).style.height = "50px";
    </script>
<?php

}
}
else {

    header("location:home-admin.php");
    
   
}




?>