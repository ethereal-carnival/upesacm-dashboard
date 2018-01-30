<?php
    include '../assets/parts/connect.php';
    if(isset($_SESSION['username'])) $username=$_SESSION['username'];
    else $username='';
    $uri=$_SERVER['PHP_SELF'];
    $ip=$_SERVER['REMOTE_ADDR'];
    mysqli_query($con, "insert into hits_count values('$uri', '$ip', '$username', DEFAULT)");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard - UPES ACM Student Chapter(Coming soon))</title>
    <style>
        body {
            background-image: url("DSC03415_2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top left;
            background-attachment: fixed;
            padding: 0;
            margin: 0;
        }

        img {
            height: 50vh;
            position: absolute;
            transition: opacity 1s linear;
        }

        @keyframes rotates {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(3600deg);
            }
        }

        @media only screen and (min-width: 1081px) {
            body {
                text-align: center;
            }
            img {
                margin-left: 30vw;
                margin-top: 30vh;
            }
            p {
                color: aliceblue;
                font-size: 8vh;
                z-index: -2;
                font-family: sans-serif;
                padding-right: 15vw;
                float: right;
            }
        }

        @media only screen and (max-width: 1080px) {
            body {}
            img {
                margin-top: 15vh;
                margin-left: 5vw;
            }
            p {
                text-align: center;
                font-size: 5vh;
                color: aliceblue;
                font-family: sans-serif;
            }
        }

    </style>
</head>

<body>
    <p>Website under construction</p>
    <img src="Hayden's_Shuriken.png" onclick="go();" />
    <script type="text/javascript">
        function go() {
            document.getElementsByTagName('img')[0].style.animation = "4s rotates ease";
        }

        var e = document.getElementsByTagName('img')[0];
        e.addEventListener("animationend", function() {
            e.style.animation = "none";
        }, false);

    </script>
</body>

</html>
