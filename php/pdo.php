<?php

    //CREATE CONECTION VARIABLES
        $server = 'localhost';
        $user = 'root';
        $password = '';

    //CREATE CONECTION
    try{
        $conn = new PDO("mysql:host=$server; dbname=fast_fix_dev", $user, $password);
        //CONFIGURATE VARIABLES IN CASE OF ERRORS
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //CALL HTML VARIABLES
        $name = $_POST["name-user"];
        $email = $_POST["email-user"];
        //Password Encryption PHP//
        $paswd = sha1($_POST["password-user"]);
        $cel = $_POST["cel-user"];

  
        //INSERT QUERY
        $query_insert = $conn->prepare("INSERT INTO users(users_name, email, cel, user_password) 
        VALUES(?, ?, ?, ?)");

        $query_insert->bindParam(1,$name, PDO::PARAM_STR, 255);
        $query_insert->bindParam(2,$email, PDO::PARAM_STR, 255);
        $query_insert->bindParam(3,$cel, PDO::PARAM_STR, 255);
        $query_insert->bindParam(4,$paswd, PDO::PARAM_STR, 255);
        $query_insert->execute();

        echo "Data has been inserted";

        //REDIRECT TO LOGIN
        header('Location:../HTML/Login.html');
    }
    catch(PDOException $e){
            echo "Your conection failed because of " . $e->getMessage();
    }
    
    $conn = null;
?>