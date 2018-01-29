<?php
    session_start();
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    include '../assets/parts/connect.php';

    $select_query = "select password from users where username='$username';";

    $result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);

    if($password == $row[0]) {
        $_SESSION['username'] = $username;
        header('location: /');
    }
    else {
        echo "
            <html><head><script type='text/javascript'>
            window.alert('Please check your credentials.');
            window.location.href='/';
            </script></head></html>
        ";
    }

?>
