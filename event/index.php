<?php
    session_start();
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
                    <article class='event-list checked'><a href='?id=$row[0]'>$row[1]</a></article>
                    ";
                    else echo "
                    <article class='event-list'><a href='?id=$row[0]'>$row[1]</a></article>
                    ";
                }
            ?>
        </section>
        <section style="float: left; margin-top: 9vh">
            <div style="height: 78vh; width: 58vw; background-color: rgba(0,0,0,0.8); padding: 2vh 1vw; overflow-y: scroll;">
                <center>
                    <div id="poster" style="text-align: center; display: inline;"><img src="/assets/images/event_<?php echo $id; ?>.jpg" style="height: 30vh;" /></div>
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
                        <div class="in-text" id="participants">Particpants:
                            <?php echo $participants_no; ?>
                        </div>
                        <button id="status" style="width: 10vw; height: 4vh;" onclick="status();" class="
                        <?php if(mysqli_fetch_array(mysqli_query($con, "select count(*) from user_events where username='$username' and event_id=$id"))[0])
                            { echo "participating"; $text = "Participating"; }
                        else { echo "not-participating"; $text = "Participate"; }                                                                                                       ?>
                        "><i class="fa fa<?php if($text=="Participating") echo '-check'; ?>-circle<?php if($text=="Participate") echo '-o'; ?>"></i>&nbsp;&nbsp;<?php echo $text; ?></button>
                    </div>
                </center>
                <div class="in-text" id="description">
                    <h1>Description:</h1><br />
                    <?php echo $description; ?>
                </div>
                <br />
                <div class="in-text" id="description">
                    <h1>Rules:</h1><br />Lick sellotape mew damn that dog but eat all the power cords. Drool thinking longingly about tuna brine and kitten is playing with dead mouse for stare at the wall, play with food and get confused by dust prance along on top of the garden fence, annoy the neighbor's dog and make it bark meowzer. If it smells like fish eat as much as you wish licks paws and howl on top of tall thing small kitty warm kitty little balls of fur or cat mojo yet spill litter box, scratch at owner, destroy all furniture, especially couch and sniff other cat's butt and hang jaw half open thereafter. Mark territory open the door, let me out, let me out, let me-out, let me-aow, let meaow, meaow!. And sometimes switches in french and say "miaou" just because well why not. Climb a tree, wait for a fireman jump to fireman then scratch his face behind the couch, a nice warm laptop for me to sit on, be a nyan cat, feel great about it, be annoying 24/7 poop rainbows in litter box all day i shredded your linens for you and with tail in the air lies down . Meow meow be a nyan cat, feel great about it, be annoying 24/7 poop rainbows in litter box all day, sit in box.
                </div>
            </div>
        </section>
        <section style="float: left; margin-top: 9vh; white-space: nowrap; background-color: #2870b8; background-color: rgba(0,0,0,0.8);">
            <div class="panel">
                <div class="heading">Participating Friends</div>
                <div class="fill"></div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">Vyom Maitreya</div>
                        <button class="follow">Follow</button>
                    </div>
                </div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp2.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">John Smith</div>
                        <button class="follow following">Following</button>
                    </div>
                </div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">Vyom Maitreya</div>
                        <button class="follow">Follow</button>
                    </div>
                </div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp2.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">John Smith</div>
                        <button class="follow following">Following</button>
                    </div>
                </div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">Vyom Maitreya</div>
                        <button class="follow">Follow</button>
                    </div>
                </div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp2.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">John Smith</div>
                        <button class="follow following">Following</button>
                    </div>
                </div>
            </div>
            <div class="panel" style="margin-top: 2vh;">
                <div class="heading">Other Participants</div>
                <div class="fill"></div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">Vyom Maitreya</div>
                        <button class="follow">Follow</button>
                    </div>
                </div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp2.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">John Smith</div>
                        <button class="follow following">Following</button>
                    </div>
                </div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">Vyom Maitreya</div>
                        <button class="follow">Follow</button>
                    </div>
                </div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp2.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">John Smith</div>
                        <button class="follow following">Following</button>
                    </div>
                </div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">Vyom Maitreya</div>
                        <button class="follow">Follow</button>
                    </div>
                </div>
                <div class="entry">
                    <div class="pic"><img src="/assets/images/dp2.jpg" style="float: left; height: 4vh; border-radius: 50px;"></div>
                    <div class="identity" style="float: left">
                        <div class="name">John Smith</div>
                        <button class="follow following">Following</button>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../assets/parts/footer.php'; ?>
    </body>

    </html>
