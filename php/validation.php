<?php
 $email=$_POST["email-user"];
 $paswd=sha1($_POST["password-user"]);

    session_start();
    $_SESSION["email-user"]=$email;

    $server = 'localhost';
    $user = 'root';
    $password = '';

    $ConnV=mysqli_connect('localhost','root','',"fast_fix_dev");

   $consult=("SELECT*FROM users where email='$email' and user_password='$paswd'");

   $result=mysqli_query($ConnV,$consult);

    $rows=mysqli_num_rows($result);

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




