<?php

include('conection.php');

$sql = $conn->prepare("SELECT worker_name, cel, cv, date_birth FROM workers WHERE id_worker=1");
        $sql->execute();
        $result_worker1 = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORKER</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../CSS/Perfil Trabajador.css">
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
        foreach ($result_worker1 as $row) { ?>
                <h3 class="titulo"><?php echo $row['worker_name']; ?></h3>

            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    Job: <?php echo $row['cv']; ?> <br>
                    Phone number:<?php echo $row['cel']; ?><br>
                    Date of birth: 02/12/2003 <br>
                    Registration date: 13/11/2022 <br>
                    Years working with us: 10 years <br>
                    
                
        </div>
        <?php } ?>
    </section>
</body>