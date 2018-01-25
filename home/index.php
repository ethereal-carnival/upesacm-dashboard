<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("location: /");
        die();
    }
?>
    <html lang="en">

    <head>
        <title>Home - Dashboard, UPES ACM Student Chapter</title>
        <?php include '../assets/parts/includes.php'; ?>
        <link href="/assets/css/home.css" rel="stylesheet" />

        <script type="text/javascript" src="../assets/js/home.js"></script>

        <meta name="theme-color" content="#2870b8" />
    </head>

    <body>
        <?php include "../assets/parts/header-home.php"; ?>
        <div id="panel_wrapper">
            <section class="panel" id="panel_1">
                <article id="photograph" style="overflow-y: scroll;">
                    <button id="dp" onmouseover="document.getElementById('change_dp').style.opacity='0.9';" onmouseout="document.getElementById('change_dp').style.opacity='0';" style="position: fixed;"><div id="change_dp"><span style="display: block; font-size: 4vh; margin-bottom: 0.5vh;"><i class="fa fa-camera"></i></span>Click to update display picture</div></button>
                    <div class="post_name name" style="position: fixed; margin-top: 27vh">Vyom Maitreya</div>

                    <div style="margin-top: 31vh"></div>
                    <center><a href="/people" style="color: #2870b8; text-decoration: none;"><i class="fa fa-search"></i>&nbsp;Find friends on Dashboard</a></center>
                    <center><div style="margin-top: 2vh;"><a href="/logout" style="color: #dc143c; text-decoration: none;"><i class="fa fa-power-off"></i>&nbsp;Logout</a></div></center>
                </article>

                <article id="all-events">
                    <div class="heading" style="width: 15vw;">All Events Participated In</div>
                    <div class="upcoming"></div>
                    <a href="/event/?name=International Coding League"><img class="small-event" src="/assets/images/event_1.jpg" /></a>
                    <img class="small-event" src="/assets/images/event_2.jpg" />
                    <img class="small-event" src="/assets/images/event_3.jpg" />
                    <img class="small-event" src="/assets/images/event_4.jpg" />
                    <img class="small-event" src="/assets/images/event_5.jpg" />
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
                    <div class="packet">
                        <img src="/assets/images/event_6.jpg" />
                        <div class="discover_text">
                            <div class="discover_name">Capture The Flag</div>
                            <div class="discover_date">2nd February</div>
                            <div class="discover_time">3pm - 5pm</div>
                        </div>
                    </div>
                    <div class="packet">
                        <img src="/assets/images/event_7.jpg" />
                        <div class="discover_text">
                            <div class="discover_name">Braille Code</div>
                            <div class="discover_date">2nd February</div>
                            <div class="discover_time">To Be Announced</div>
                        </div>
                    </div>
                    <div class="packet">
                        <img src="/assets/images/event_8.jpg" />
                        <div class="discover_text">
                            <div class="discover_name">Tuning Fork</div>
                            <div class="discover_date">2nd February</div>
                            <div class="discover_time">To Be Announced</div>
                        </div>
                    </div>
                    <div class="packet">
                        <img src="/assets/images/event_9.jpg" />
                        <div class="discover_text">
                            <div class="discover_name">Travelling Salesman</div>
                            <div class="discover_date">2nd February</div>
                            <div class="discover_time">To Be Announced</div>
                        </div>
                    </div>
                    <div class="packet">
                        <img src="/assets/images/event_10.jpg" />
                        <div class="discover_text">
                            <div class="discover_name">IBM Workshop</div>
                            <div class="discover_date">2nd February</div>
                            <div class="discover_time">To Be Announced</div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </body>

    </html>
