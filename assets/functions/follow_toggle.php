<?php
    $user_1 = $_POST['user_1'];
    $user_2 = $_POST['user_2'];
    include '../parts/connect.php';

    if(mysqli_fetch_array(mysqli_query($con, "select count(*) from friends where user_1='$user_1' and user_2='$user_2';"))[0]) {
        $query = "delete from friends where user_1='$user_1' and user_2='$user_2';";
        echo "unfollowed";
    }
    else {
        $query = "insert into friends values('$user_1','$user_2',DEFAULT)";
        echo "followed";
    }

    $result=mysqli_query($con, $query);
?>
