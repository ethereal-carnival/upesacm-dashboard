<?php
    session_start();
    include '../assets/parts/connect.php';
    if(isset($_SESSION['username'])) $username=$_SESSION['username'];
    else $username='';
    $uri=$_SERVER['PHP_SELF'];
    $ip=$_SERVER['REMOTE_ADDR'];
    mysqli_query($con, "insert into hits_count values('$uri', '$ip', '$username', DEFAULT)");
    if(!isset($_SESSION["username"])) {
        echo "<html><head><script type='text/javascript'>window.alert('You need to be logged-in to access this page'); window.location.href='/';</script></head></html>";
        die();
    }
    else if(!isset($_GET["id"])) {
        $_GET["id"]="event_1";
    }
    include '../assets/parts/connect.php';
    $id = $_GET["id"];
    include '../assets/sql/fetch_one_from_events.php';
?>
    <html lang="en">

    <head>
        <title>
            <?php echo $name; ?> - Dashboard, UPES ACM Student Chapter</title>

        <?php include "../assets/parts/includes.php"; ?>

        <link href="../assets/css/events.css" type="text/css" rel="stylesheet" />

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <?php
        $username = $_SESSION['username'];
        echo "
        <script type=\"text/javascript\">
            function status() {
                $.ajax({
                    url: \"../assets/functions/participation_toggle.php\",
                    data: {
                        username: '$username',
                        event_id: $id
                    },
                    type: 'post',
                    success: function(output) {
                        if(output == 'added') {
                            document.getElementById('status').className = 'participating';
                            document.getElementById('status').innerHTML = '<i class=\"fa fa-check-circle\"></i>&nbsp;&nbsp;Participating';
                        }
                        else {
                            document.getElementById('status').className = 'not-participating';
                            document.getElementById('status').innerHTML = '<i class=\"fa fa-circle-o\"></i>&nbsp;&nbsp;Participate';
                        }
                    }
                });
            }

            function follow_status(user_2, view) {
                $.ajax({
                    url: \"../assets/functions/follow_toggle.php\",
                    data: {
                        user_1: '$username',
                        user_2: user_2
                    },
                    type: 'post',
                    success: function(output) {
                        if(output == 'followed') {
                            view.className = 'follow following';
                            view.innerHTML = 'Following';
                        }
                        else {
                            view.className = 'follow';
                            view.innerHTML = 'Follow';
                        }
                    }
                });
            }

        </script>
        ";
        ?>
    </head>

    <body style="">
        <?php include '../assets/parts/header.php'; ?>
        <section style="float: left; margin-top: 9vh; height: 82vh; width: 20vw; background-color: #2870b8; background-color: rgba(0,0,0,0.8); overflow-y: scroll;">
            <?php
                $result = mysqli_query($con, "select event_id, name from events");
                while($row = mysqli_fetch_array($result)) {
                    if($row[0]==$id) echo "
                    <a href='?id=$row[0]'><article class='event-list checked'>$row[1]</article></a>
                    ";
                    else echo "
                    <a href='?id=$row[0]'><article class='event-list'>$row[1]</article></a>
                    ";
                }
            ?>
        </section>
        <section style="float: left; margin-top: 9vh">
            <div style="height: 78vh; width: 58vw; background-color: rgba(0,0,0,0.8); padding: 2vh 1vw; overflow-y: scroll;">
                <center>
                    <div id="poster" style="text-align: center; display: inline;"><a target="_blank" href="/assets/images/event_<?php echo $id; ?>.jpg<?php echo "?v=".Date("Y.m.d.G.i.s");?>" ><img src="/assets/images/event_<?php echo $id; ?>.jpg<?php echo "?v=".Date("Y.m.d.G.i.s");?>" style="height: 30vh;" /></a></div>
                    <div class="base" style="display: inline-block; text-align: left; overflow-y: scroll;">
                        <div class="in-text" id="name">
                            <?php echo $name; ?>
                        </div>
                        <div class="in-text" id="date">Date:
                            <?php echo $date; ?>
                        </div>
                        <div class="in-text" id="Time">Time:
                            <?php echo $time; ?>
                        </div>
                        <div class="in-text" id="venue">Venue:
                            <?php echo $venue; ?>
                        </div>
                        <div class="in-text" id="participants">Particpants: **feature coming-soon**
                            <?php //echo $participants_no; ?>
                        </div>
                        <button id="status" style="padding-left:1vw; padding-right: 1vw; height: 4vh;" onclick="status();" class="
                        <?php if(mysqli_fetch_array(mysqli_query($con, " select count(*) from user_events where username='$username' and event_id=$id "))[0])
                            { echo "participating "; $text = "Participating"; }
                        else { echo "not-participating "; $text = "Participate"; }                                                                                                       ?>
                        "><i class="fa fa<?php if($text=="Participating") echo '-check'; ?>-circle<?php if($text=="Participate") echo '-o'; ?>"></i>&nbsp;&nbsp;<?php echo $text; ?></button>
                    </div>
                </center>
                <div class="in-text" id="description">
                    <h1>Description:</h1><br />
                    <?php echo $description; ?>
                </div>
            </div>
        </section>
        <section style="float: left; margin-top: 9vh; white-space: nowrap; background-color: #2870b8; background-color: rgba(0,0,0,0.8);">
            <div class="panel">
                <div class="heading">Participating Friends</div>
                <div class="fill"></div>
                <?php
                    $result = mysqli_query($con, "select username from user_events where event_id=$id;");
                    $count=0;
                    while($row=mysqli_fetch_array($result)) {
                        $result_t = mysqli_query($con, "select user_2 from friends where user_1='$username' and user_2='$row[0]';");
                        $friend_username = mysqli_fetch_array($result_t)[0];
                        if($friend_username) {
                            $result_t = mysqli_query($con, "select fname,lname from users where username='$friend_username';");
                            $row_t = mysqli_fetch_array($result_t);
                            $friend_name = $row_t[0]." ".$row_t[1];
                            echo "
                            <div class=\"entry\">
                                <div class=\"pic\"><img src=\"/assets/profile-pictures/$friend_username.jpg?v=".Date("Y.m.d.G.i.s")."\" style=\"float: left; height: 4vh; border-radius: 50px;\"></div>
                                <div class=\"identity\" style=\"float: left\">
                                    <div class=\"name\">$friend_name</div>
                                    <button class=\"follow following\" onclick=\"follow_status('$friend_username', this);\">Following</button>
                                </div>
                            </div>
                            ";
                            $count++;
                        }
                    }
                    if($count==0) echo "
                        <div style=\"margin-top: 3vh; text-align: center; white-space: normal;\">
                            None of your current friends on dashboard are participating. Add more friends to see them here.</div>
                        </div>
                        ";

                ?>
            </div>

            <div class="panel" style="margin-top: 2vh;">
                <div class="heading">Other Participants</div>
                <div class="fill"></div>
                <?php
                    $result = mysqli_query($con, "select username from user_events where event_id=$id;");
                    while($row=mysqli_fetch_array($result)) {
                        $result_t = mysqli_query($con, "select count(*) from friends where user_1='$username' and user_2='$row[0]';");
                        $row_t = mysqli_fetch_array($result_t);
                        if($row_t[0] == 0 && $row[0]!=$username) {
                            $other_username = $row[0];
                            if($other_username) {
                                $result_t = mysqli_query($con, "select fname,lname from users where username='$other_username';");
                                $row_t = mysqli_fetch_array($result_t);
                                $other_name = $row_t[0]." ".$row_t[1];
                                echo "
                                <div class=\"entry\">
                                    <div class=\"pic\"><img src=\"/assets/profile-pictures/$other_username.jpg\" style=\"float: left; height: 4vh; border-radius: 50px;\"></div>
                                    <div class=\"identity\" style=\"float: left\">
                                        <div class=\"name\">$other_name</div>
                                        <button class=\"follow\" id='follow-status' onclick=\"follow_status('$other_username', this);\">Follow</button>
                                    </div>
                                </div>
                                ";
                            }
                        }

                    }

                ?>
            </div>
        </section>
        <?php include '../assets/parts/footer.php'; ?>
    </body>

    </html>
