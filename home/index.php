<?php

    $username = $_SESSION["username"];
    include 'assets/parts/connect.php';

    $select_query = "select fname, lname from users where username='$username';";
    $result = mysqli_query($con, $select_query);
    $row = mysqli_fetch_array($result);
    $fname = $row['fname'];
    $lname = $row['lname'];
?>
    <html lang="en">

    <head>
        <title>Home - Dashboard, UPES ACM Student Chapter</title>
        <?php include 'assets/parts/includes.php'; ?>
        <link href="/assets/css/home.css" rel="stylesheet" />

        <script type="text/javascript" src="../assets/js/home.js"></script>
    </head>

    <body>
        <?php include "assets/parts/header-home.php"; ?>
        <div id="panel_wrapper">
            <section class="panel" id="panel_1">
                <article id="photograph" style="overflow-y: scroll;">
                    <button id="dp" onmouseover="document.getElementById('change_dp').style.opacity='0.9';" onmouseout="document.getElementById('change_dp').style.opacity='0';" style="position: fixed;"><div id="change_dp"><span style="display: block; font-size: 4vh; margin-bottom: 0.5vh;"><i class="fa fa-camera"></i></span>Click to update display picture</div></button>
                    <div class="post_name name" style="position: fixed; margin-top: 27.5vh; font-size: 2vh;"><?php echo $fname." ".$lname; ?></div>

                    <div style="margin-top: 32vh"; padding: 0;></div>
                    <center><a href="/people" style="color: #2870b8; text-decoration: none; font-size: 2vh;"><i class="fa fa-search"></i>&nbsp;Find friends on Dashboard</a></center>
                </article>

                <article id="all-events">
                    <div class="heading" style="width: 14vw;">All Events Participated In</div>
                    <div class="upcoming"></div>

                    <?php
                        $result = mysqli_query($con, "select event_id from user_events where username='$username';");
                        $total = mysqli_fetch_array(mysqli_query($con, "select count(*) from events"))[0];
                        $count = 0;

                        include 'assets/sql/fetch_all_from_events.php';

                        while($row = mysqli_fetch_array($result)) {
                            $id[$row[0]]=1;
                            $count++;
                        }
                        if($count==0) echo "You have not participated in any events, yet.";
                        else {
                            $ind = 0;
                            foreach( array_reverse($id) as $i) {
                                $indf=$total-$ind;
                                if($i==1) echo "
                                <a href='/event/?id=$indf'><img class='small-event' src='/assets/images/event_$indf.jpg' /></a>
                                ";
                                $ind++;
                            }
                        }

                    ?>
                </article>
            </section>

            <?php include "panel_2.php"; ?>

            <section class="panel" id="panel_3">
                <article id="upcoming-events">
                    <div class="heading">My Upcoming Events</div>
                    <ul class="upcoming">
                        <li><a href="/event/?name=International Coding League">International Coding League: 1st February</a></li>
                        <li>Glitch: 1st February</li>
                        <li>Frame of Reference: 1st February</li>
                        <li>Engage: 1st February</li>
                        <li>Echo: 1st February</li>
                    </ul>
                </article>
                <article id="suggestions">
                    <div class="heading">Discover More</div>
                    <div style="margin-top: 4vh;"></div>

                    <?php
                        $ind = 0;
                        foreach($id as $i) {
                            if($ind==0) {
                                $ind++;
                                continue;
                            }
                            if($i==0) echo "
                            <a href='/event/?id=$ind'>
                                <div class='packet'>
                                    <img src='/assets/images/event_$ind.jpg' />
                                    <div class='discover_text'>
                                        <div class='discover_name'>".$name[$ind]."</div>
                                        <div class='discover_date'>".$date[$ind]."</div>
                                        <div class='discover_time'>".$time[$ind]."</div>
                                    </div>
                                </div>
                            </a>
                            ";
                            $ind++;
                        }
                    ?>
                </article>
            </section>
        </div>

        <?php include 'assets/parts/logout.php'; ?>
    </body>

    </html>
