<?php
    session_start();
    include '../assets/parts/connect.php';
    if(isset($_SESSION['username'])) $username=$_SESSION['username'];
    else $username='';
    $uri=$_SERVER['PHP_SELF'];
    $ip=$_SERVER['REMOTE_ADDR'];
    mysqli_query($con, "insert into hits_count values('$uri', '$ip', '$username', DEFAULT)");
    session_unset();
    session_destroy();
    header('location: /');
?>
