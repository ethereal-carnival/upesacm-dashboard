<?php
    session_start();
?>
    <html lang="en">

    <head>
        <title>Dashboard - UPES ACM Student Chapter</title>

        <?php include '/assets/parts/includes.php'; ?>
        <link href="/assets/css/index.css" rel="stylesheet" />

        <script src="/assets/js/index.js" type="text/javascript"></script>

        <meta name="theme-color" content="#2870b8" />
    </head>

    <body>
        <div id="overlay" onscroll="scrolled();">
            <?php include '/assets/parts/header-home.php'; ?>
            <section id="home">
            </section>
            <section id="semi-foot">
            </section>
            <?php include '/assets/parts/footer.php'; ?>
        </div>
    </body>

    </html>
