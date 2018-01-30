<?php
    $username = $_POST['username'];
    $id = $_POST['event_id'];
    include '../parts/connect.php';

    if(mysqli_fetch_array(mysqli_query($con, "select count(*) from user_events where username='$username' and event_id=$id"))[0]) {
        $query = "delete from user_events where username='$username' and event_id=$id";
        echo "deleted";
    }
    else {
        $query = "insert into user_events values('$username',$id,DEFAULT)";
        echo "added";
    }

    $result=mysqli_query($con, $query);
?>
