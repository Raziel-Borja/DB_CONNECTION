<?php
        include('conection.php');

        $sql1 = $conn->prepare("SELECT id_worker, worker_name, cv FROM workers WHERE id_worker=1 and rating=5");
        $sql1->execute();
        $result1 = $sql1->fetchAll(PDO::FETCH_ASSOC);

        $sql2 = $conn->prepare("SELECT id_worker, worker_name, cv FROM workers WHERE id_worker=2 and rating=5");
        $sql2->execute();
        $result2 = $sql2->fetchAll(PDO::FETCH_ASSOC);

        $sql3 = $conn->prepare("SELECT id_worker, worker_name, cv FROM workers WHERE id_worker=3 and rating=5");
        $sql3->execute();
        $result3 = $sql3->fetchAll(PDO::FETCH_ASSOC);

        $sql4 = $conn->prepare("SELECT id_worker, worker_name, cv FROM workers WHERE id_worker=4 and rating=5");
        $sql4->execute();
        $result4 = $sql4->fetchAll(PDO::FETCH_ASSOC);

        $sql5 = $conn->prepare("SELECT id_worker, worker_name, cv FROM workers WHERE id_worker=5 and rating=5");
        $sql5->execute();
        $result5 = $sql5->fetchAll(PDO::FETCH_ASSOC);

        $sql6 = $conn->prepare("SELECT id_worker, worker_name, cv FROM workers WHERE id_worker=6 and rating=5");
        $sql6->execute();
        $result6 = $sql6->fetchAll(PDO::FETCH_ASSOC);

        $sql7 = $conn->prepare("SELECT id_worker, worker_name, cv FROM workers WHERE id_worker=7 and rating=5");
        $sql7->execute();
        $result7 = $sql7->fetchAll(PDO::FETCH_ASSOC);

        $sql8 = $conn->prepare("SELECT id_worker, worker_name, cv FROM workers WHERE id_worker=8 and rating=5");
        $sql8->execute();
        $result8 = $sql8->fetchAll(PDO::FETCH_ASSOC);

        $sql9 = $conn->prepare("SELECT id_worker, worker_name, cv FROM workers WHERE id_worker=9 and rating=5");
        $sql9->execute();
        $result9 = $sql9->fetchAll(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAST FIX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../CSS/Pagina.css">
    <link rel="s">
</head>
<body>
    <header>
        <!--<img src="../IMAGENES/logi.png" alt="" >-->
        <a href="#" class="logo">FAST FIX</a>

        <nav class="navbar">
                
            <ul>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <li><a href="../php/user_profile.php" class="active">Profile</a></li>
                <li><a href="#worker">Worker</a></li>
            </ul>
            <div class="fa-bars"></div>

        </nav>
    </header>

    <section class="requested" id="requested">
        
        <h2>MOST REQUESTED WORKERS</h2>
        <br> <br>
        <h1>MOST REQUESTED WORKERS</h1>

        <div class="box-container">

        <?php
        foreach ($result1 as $row) { ?>
       
       
            <div class="box">
                <img src="../IMAGENES/login.png" alt="">
                <h3><?php echo $row['worker_name'];?></h3>
                <p><?php echo $row['cv']; ?></p>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                </div>
                <a href="../php/worker_1.php"><button>SEE MORE</button></a>
         <?php }; ?>       
            </div>
            


        <?php
        foreach ($result2 as $row) { ?>


                <div class="box">
                    <img src="../IMAGENES/login.png" alt="">
                    <h3><?php echo $row['worker_name']; ?></h3>
                    <p><?php echo $row['cv']; ?></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="../HTML/Perfil trabajador.html"><button>SEE MORE</button></a>
            <?php };?>
                </div>


            <?php
            foreach ($result3 as $row) { ?>

                <div class="box">
                    <img src="../IMAGENES/login.png" alt="">
                    <h3><?php echo $row['worker_name']; ?></h3>
                    <p><?php echo $row['cv']; ?></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="../HTML/Perfil trabajador.html"><button>SEE MORE</button></a>
            <?php }; ?>
                </div>


            <?php
            foreach ($result4 as $row) { ?>
            

                <div class="box">
                    <img src="../IMAGENES/login.png" alt="">
                    <h3><?php echo $row['worker_name']; ?></h3>
                    <p><?php echo $row['cv'];?></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="../HTML/Perfil trabajador.html"><button>SEE MORE</button></a>
            <?php }; ?>
                </div>


            <?php
            foreach ($result5 as $row) { ?>
            
                <div class="box">
                    <img src="../IMAGENES/login.png" alt="">
                    <h3><?php echo $row['worker_name']; ?></h3>
                    <p><?php echo $row['cv']; ?></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>                            
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="../HTML/Perfil trabajador.html"><button>SEE MORE</button></a>
            <?php }; ?>
                </div>


            <?php 
            foreach ($result6 as $row) { ?>


                <div class="box">
                    <img src="../IMAGENES/login.png" alt="">
                    <h3><?php echo $row['worker_name']; ?></h3>
                    <p><?php echo $row['cv']; ?></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="../HTML/Perfil trabajador.html"><button>SEE MORE</button></a>
            <?php }; ?>
                </div>

    
            <?php
            foreach ($result7 as $row) { ?>
            
                <div class="box">
                    <img src="../IMAGENES/login.png" alt="">
                    <h3><?php echo $row['worker_name']; ?></h3>
                    <p><?php echo $row['cv']; ?></p>
                       <div class="stars">                                    
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>                               
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="../HTML/Perfil trabajador.html"><button>SEE MORE</button></a>
            <?php }; ?>
                </div>


            <?php
            foreach ($result8 as $row) { ?>
    

                <div class="box">
                    <img src="../IMAGENES/login.png" alt="">
                    <h3><?php echo $row['worker_name']; ?></h3>
                    <p><?php echo $row['cv'];?></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <a href="../HTML/Perfil trabajador.html"><button>SEE MORE</button></a>
            <?php }; ?>
                </div>


            <?php 
            foreach ($result9 as $row) { ?>
            
            
                <div class="box">
                    <img src="../IMAGENES/login.png" alt="">
                    <h3><?php echo $row['worker_name']; ?></h3>
                    <p><?php echo $row['cv']; ?></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="../HTML/Perfil trabajador.html"><button>SEE MORE</button></a>
            <?php }; ?>
                </div>
          
        </div>
    </section>
</body>
</html>
        