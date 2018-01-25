<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("location: /");
        die();
    }
?>
    <html lang="en">

    <head>
        <?php include '../assets/parts/includes.php'; ?>
        <link href="/assets/css/home.css" rel="stylesheet" />
    </head>

    <body>
        <?php include "../assets/parts/header-home.php"; ?>
        <div id="panel_wrapper">
            <section class="panel" id="panel_1">
            </section>
            <section class="panel" id="panel_2">
                <article class="post">
                    <div class="post_pic"></div>
                    <div class="post_name">Vyom Maitreya</div>
                    <div class="post_username">@crimson-carnival</div>
                    <div class="post_caption">Don't leave me alone fellas!</div>
                    <div class="post_event"><img src="/assets/images/event_2.jpg" style="height: 40vh;" /></div>
                </article>
                <br />
                <article class="post">
                    <div class="post_pic"></div>
                    <div class="post_name">Vyom Maitreya</div>
                    <div class="post_username">@crimson-carnival</div>
                    <div class="post_caption">So excited to participate!</div>
                    <div class="post_event"><img src="/assets/images/event_3.jpg" style="height: 40vh;" /></div>
                </article>
                <br />
                <article class="post">
                    <div class="post_pic"></div>
                    <div class="post_name">Vyom Maitreya</div>
                    <div class="post_username">@crimson-carnival</div>
                    <div class="post_caption">So excited to participate!</div>
                    <div class="post_event"><img src="/assets/images/event_4.jpg" style="height: 40vh;" /></div>
                </article>
            </section>
            <section class="panel" id="panel_3">
                <article id="upcoming-events">
                </article>
                <article id="suggestions">
                </article>
            </section>
        </div>
    </body>

    </html>
