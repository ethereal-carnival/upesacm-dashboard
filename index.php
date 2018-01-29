<?php
    session_start();
    if(isset($_SESSION["username"])) include 'home/index.php';
    else include 'login/index.php';
?>
