<?php

session_start();

if($_SESSION['username']){
    session_destroy();

    ob_start();
    header("location:../login.php");
    ob_end_flush();
}
else {
    header("location:../login.php");
}

if(window.history.forward(1) != NULL){
    window.history.forward(1);
}

unset($_SESSION['username']);

?>