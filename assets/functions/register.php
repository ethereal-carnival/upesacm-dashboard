<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sap = $_POST['sap'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $whatsapp = $_POST['whatsapp'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];

    include '../assets/parts/connect.php';

    $query = "insert into users VALUES ( '$username', '$password', '$fname', '$lname', '$branch', $year, $sap, '$email', '$gender', '$contact', '$whatsapp', DEFAULT);";
    mysqli_query($con, $query);
?>
