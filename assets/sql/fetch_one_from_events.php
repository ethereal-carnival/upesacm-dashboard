<?php
    $result = mysqli_query($con, "select * from events where event_id=$id;");
    $row = mysqli_fetch_array($result);
    $name = $row[1];
    $date = $row[2];
    $time = $row[3];
    $venue = $row[4];
    $participants_no = $row[5];
    $description = $row[6];
?>
