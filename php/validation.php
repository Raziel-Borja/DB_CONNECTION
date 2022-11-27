<?php

// THIS CODE VALIDATES THE SIGN IN INFORMATION WITH THE DATA THAT THE USER INSERTS INTO THE LOGIN
 $email=$_POST["email-user"];
 $paswd=sha1($_POST["password-user"]);


    session_start();
    $_SESSION["email-user"]=$email;

    $server = 'localhost';
    $user = 'root';
    $password = '';

    //MYSQL DATABASE CONNECTION
    $ConnV=mysqli_connect('localhost','root','',"fast_fix_dev");

    //QUERY THAT COMPARES THE LOGIN INPUT WITH THE DATABASE INFO
   $consult=("SELECT*FROM users where email='$email' and user_password='$paswd'");

   $result=mysqli_query($ConnV,$consult);

    $rows=mysqli_num_rows($result);

    //VARIABLE $ROWS RETURN THE RESULTS OF THE QUERY SELECT AND IF IT'S TRUE REDIRECTS THE USER TO THE LOGIN
    // AND IF THE INFO IT DOESN'T IS CORRECT IT SHOWS THE USER AN ALERT EN RELOAD THE LOGIN PAGE.
    if($rows){
        header('Location:../php/pagina.php');
    }else{
        include("../HTML/Login.html");

        echo'<script type="text/javascript">';
        echo'alert("Your data is incorrect, try again!")';
        echo'</script>';
            
    }

//mysqli_free_result($consult); 
//mysqli_close($conn); 
?>




