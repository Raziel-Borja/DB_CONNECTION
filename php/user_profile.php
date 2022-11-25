<?php

include('conection.php');

session_start();
$email= $_SESSION['email-user'];

    $sql = $conn->prepare("SELECT users_name, cel, user_address, date_birth, created_at FROM users WHERE email='$email'");
        $sql->execute();
        $result_user = $sql->fetchAll(PDO::FETCH_ASSOC);


       // $sql1 = $conn->prepare("SELECT users_name FROM users WHERE email='$email'");
       // $sql1->execute();
       // $result_user = $sql1->fetchAll(PDO::FETCH_ASSOC);
 
    
 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../CSS/Perfil usuario.css">
</head>

<body>


    <header>
        <!--<img src="../IMAGENES/logi.png" alt="" >-->
        <a href="#" class="logo">FAST FIX</a>

        <nav class="navbar">
                
            <ul>
                <li><a href="../php/pagina.php" class="active">HOME</a></li>
                
            </ul>
            <div class="fa-bars"></div>

        </nav>
    </header>

   


    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="../IMAGENES/login.png" alt="img-avatar">
                
                </div>
                
            </div>
        </div>
  

        
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">

<?php 
foreach ($result_user as $row) { ?>


                <h3><?php echo $row['users_name'];?></h3> 

            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i>Direccion:<?php echo $row['user_address']; ?> </li>
                    <li><i class="icono fas fa-phone-alt"></i>Telefono:<?php echo $row['cel']; ?></li>
                    <li><i class="icono fas fa-calendar-alt"></i>Fecha nacimiento:<?php echo $row['date_birth']; ?></li>
                    <li><i class="icono fas fa-user-check"></i>Fecha de registro:<?php echo $row['created_at']; ?></li>
           
<?php } ?>
        </div>
    </section>
</body>

  