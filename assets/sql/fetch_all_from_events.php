<?php
    $result_t = mysqli_query($con, "select * from events;");
    $id[0]=0;
    for($i=1;$i<$total+1;$i++) {
        $id[$i]=0;
        $row_t = mysqli_fetch_array($result_t);
        $name[$i]=$row_t[1];
        $date[$i]=$row_t[2];
        $time[$i]=$row_t[3];
        $venue[$i]=$row_t[4];
        $participants_no[$i]=$row_t[5];
        $description[$i]=$row_t[6];
    }
?>
