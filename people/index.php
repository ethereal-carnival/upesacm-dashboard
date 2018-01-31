<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location: /');
        die();
    }
?>
    <html lang="en">

    <head>
        <title>People - Dashboard, UPES ACM Student Chapter</title>
        <?php include '../assets/parts/includes.php'; ?>

        <style type="text/css" rel="stylesheet">
            #panel {
                background-color: #fff;
                border-radius: 5vh;
                font-size: 3vh;
                padding: 15vh;
                display: inline;
                box-shadow: 0px 0px 8px 2px #14385c;
            }

            footer {
                margin-top: 43vh;
            }

        </style>
    </head>

    <body>
        <?php include '../assets/parts/header.php'; ?>
        <div style="height: 45vh"></div>
        <center>
            <div id="panel">
                Feature coming soon......stay tuned!
            </div>
        </center>
        <?php include '../assets/parts/footer.php'; ?>
    </body>

    </html>
