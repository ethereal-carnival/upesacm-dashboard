<?php
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
    mysqli_query($con, "CREATE TABLE IF NOT EXISTS `events` (
      `event_id` int(11) NOT NULL,
      `name` text NOT NULL,
      `date` text NOT NULL,
      `time` text NOT NULL,
      `venue` text NOT NULL,
      `participants_no` int(11) NOT NULL,
      `description` text NOT NULL,
      PRIMARY KEY (`event_id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;");
    mysqli_query($con, "CREATE TABLE IF NOT EXISTS `friends` (
      `user_1` text NOT NULL,
      `user_2` text NOT NULL,
      `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY (user1(40), user2(40))
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;");
    mysqli_query($con, "CREATE TABLE IF NOT EXISTS `hits_count` (
      `uri` text NOT NULL,
      `ip_address` text NOT NULL,
      `username` text,
      `hits` int(11) NOT NULL,
      `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY (timestamp)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
    mysqli_query($con, "CREATE TABLE IF NOT EXISTS `user_events` (
      `username` text NOT NULL,
      `event_id` int NOT NULL,
      `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY (username(40), event_id(11))
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

?>
