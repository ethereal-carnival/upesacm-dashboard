<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        echo "<html><head><script type='text/javascript'>window.alert('You need to be logged-in to access this page'); window.location.href='/';</script></head></html>";
        die();
    }
    else if(!isset($_GET["name"])) {
        $_GET["name"]="Glitch";
    }
?>
    <html lang="en">

    <head>
        <title>
            <?php echo $_GET["name"]; ?> - Dashboard, UPES ACM Student Chapter</title>

        <?php include "../assets/parts/includes.php"; ?>

        <style>
            footer {
                position: fixed;
            }

            body {
                background-image: url(/assets/images/wallpaper.jpg);
            }

            .base {
                padding-left: 2vw;
            }

            .in-text {
                color: #fff;
                font-size: 2vh;
                margin-top: 1vh;
            }

            .event-list {
                background-color: #fff;
                background-color: #f0f7e9;
                border-radius: 15px;
                margin: 2vh 0.5vw 0 1vw;
                height: 8vh;
                font-size: 2.75vh;
                line-height: 2.5;
                text-align: center;
            }

            .event-list>a {
                text-decoration: none;
                color: #000;
            }

            .checked {
                background-color: #2870b8;
                color: #fff;
            }

            .checked>a {
                color: #fff;
            }

            button {
                margin-top: 2vh;
                margin-bottom: 4vh;
                cursor: pointer;
                color: #fff;
                background: none;
                padding: 5px 10px 5px 10px;
                border: none;
                border-radius: 2vh;
                border: 1px solid #70b828;
                transition: all 0.2s linear;
                font-size: 2vh;
            }

            button:hover {
                border-color: green;
                background-color: green;
            }

            button:focus {
                outline: none;
            }

            .panel {
                background-color: rgba(255, 255, 255, 1);
                border-radius: 5px;
                height: 38vh;
                width: 17vw;
                padding: 0vh 0.5vw;
                margin: 2vh 1vw;
                overflow-y: scroll;
            }

            .heading {
                color: #2870b8;
                font-size: 2vh;
                border-bottom: 1px solid #2870b8;
                padding: 1vh 0.5vw;
                position: fixed;
                background-color: #fff;
                width: 16vw;
            }

            .fill {
                height: 4vh;
            }

            .entry {
                clear: both;
                border-top: 1px solid #2870b8;
                padding: 2vh 0 6vh 0;
            }

            .pic>img {
                width: 4vh;
            }

            .identity {
                margin-left: 1vw;
                width: 13.9vw;
                line-height: 4vh;
            }

            .name {
                float: left;
                line-height: 4vh;
            }

            .follow {
                float: right;
                border-color: #2870b8;
                height: 3vh;
                font-size: 1.5vh;
                margin: 0;
                margin-top: 0.5vh;
                color: #2870b8;
                padding: 2px 0.5vw;
            }

            .follow:hover {
                background-color: #fff;
                color: #2870b8;
            }

            .following {
                background-color: #2870b8;
                color: #fff;
            }

        </style>
    </head>

    <body style="">
        <?php include '../assets/parts/header.php'; ?>
        <section style="float: left; margin-top: 9vh; height: 82vh; width: 20vw; background-color: #2870b8; background-color: rgba(0,0,0,0.8); overflow-y: scroll;">
            <article class="event-list"><a href="?name=International Coding League">International Coding League</a></article>
            <article class="event-list"><a href="?name=Frame of Reference">Frame of Reference</a></article>
            <article class="event-list checked"><a href="?name=Glitch">Glitch</a></article>
            <article class="event-list"><a href="?name=Engage">Engage</a></article>
            <article class="event-list"><a href="?name=Echo">Echo</a></article>
            <article class="event-list"><a href="?name=Capture the Flag">Capture the Flag</a></article>
            <article class="event-list"><a href="?name=Braille Code">Braille Code</a></article>
            <article class="event-list"><a href="?name=Tuning Fork">Tuning Fork</a></article>
            <article class="event-list"><a href="?name=Travelling Salesman">Travelling Salesman</a></article>
            <article class="event-list" style="margin-bottom: 2vh;"><a href="?name=Augmented Reality Workshop">Augmented Reality Workshop</a></article>
        </section>
        <section style="float: left; margin-top: 9vh">
            <div style="height: 78vh; width: 58vw; background-color: rgba(0,0,0,0.8); padding: 2vh 1vw; overflow-y: scroll;">
                <center>
                    <div id="poster" style="text-align: center; display: inline;"><img src="/assets/images/event_3.jpg" style="height: 30vh;" /></div>
                    <div class="base" style="display: inline-block; text-align: left; overflow-y: scroll;">
                        <div class="in-text" id="name">
                            <?php echo $_GET["name"]; ?>
                        </div>
                        <div class="in-text" id="date">Date: 2nd February</div>
                        <div class="in-text" id="Time">Time: 10:200 - 12:00</div>
                        <div class="in-text" id="venue">Venue: Old Amphitheatre</div>
                        <div class="in-text" id="participants">Particpants: 48</div>
                        <button id="status" style="width: 10vw; height: 4vh;"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Participate</button>
                    </div>
                </center>
                <div class="in-text" id="description">
                    <h1>Description:</h1><br />Lick sellotape mew damn that dog but eat all the power cords. Drool thinking longingly about tuna brine and kitten is playing with dead mouse for stare at the wall, play with food and get confused by dust prance along on top of the garden fence, annoy the neighbor's dog and make it bark meowzer. If it smells like fish eat as much as you wish licks paws and howl on top of tall thing small kitty warm kitty little balls of fur or cat mojo yet spill litter box, scratch at owner, destroy all furniture, especially couch and sniff other cat's butt and hang jaw half open thereafter. Mark territory open the door, let me out, let me out, let me-out, let me-aow, let meaow, meaow!. And sometimes switches in french and say "miaou" just because well why not. Climb a tree, wait for a fireman jump to fireman then scratch his face behind the couch, a nice warm laptop for me to sit on, be a nyan cat, feel great about it, be annoying 24/7 poop rainbows in litter box all day i shredded your linens for you and with tail in the air lies down . Meow meow be a nyan cat, feel great about it, be annoying 24/7 poop rainbows in litter box all day, sit in box.
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
