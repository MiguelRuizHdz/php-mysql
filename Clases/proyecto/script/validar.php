<?php

    require("connect_db.php");
    session_start();

    $username=$_POST['correo'];
    $pass=$_POST['pass'];
    $_SESSION['username']=$username;
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$sql2=mysqli_query($conn,"SELECT id,nom,pass,rol FROM login WHERE correo='$username' and rol=1");
    if( $f2=mysqli_fetch_assoc($sql2) ) {
        if( $pass==$f2['pass'] ) {
            $_SESSION['id']=$f2['id'];
            $_SESSION['nom']=$f2['nom'];
            $_SESSION['rol']=$f2['rol'];
            echo '<script>alert("BIENVENIDO ADMINISTRADOR ")</script>';
            echo "<script>location.href='../admin.php'</script>";
        }
    }
$sql=mysqli_query($conn,"SELECT id,nom,pass,rol FROM login WHERE correo='$username' and rol=2");
    if($f=mysqli_fetch_assoc($sql)){
        if($pass==$f['pass']){
            $_SESSION['id']=$f['id'];
            $_SESSION['nom']=$f['nom'];
            $_SESSION['rol']=$f['rol'];
            echo '<script>alert("BIENVENIDO Usuario")</script>';
            header("Location:../index2.php");
        } else{
            echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
            echo "<script>location.href='../login.php'</script>";
        }
    } else{
        echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE  PARA PODER INGRESAR")</script> ';
        echo "<script>location.href='../register.php'</script>";  
    }
?>