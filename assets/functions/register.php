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

    $con = mysqli_connect('localhost','root','');
    mysqli_query($con, "CREATE DATABASE IF NOT EXISTS dashboard;");
    mysqli_select_db($con,'dashboard');
    mysqli_query($con, "CREATE TABLE IF NOT EXISTS `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `branch` text NOT NULL,
  `year` int(1) NOT NULL,
  `sap` int(9) NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `contact` text NOT NULL,
  `whatsapp` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (username(40))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

    $query = "insert into users VALUES ( '$username', '$password', '$fname', '$lname', '$branch', $year, $sap, '$email', '$gender', '$contact', '$whatsapp', DEFAULT);";
    mysqli_query($con, $query);
?>
