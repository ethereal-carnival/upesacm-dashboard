<?php
    include 'assets/parts/connect.php';
    if(isset($_SESSION['username'])) $username=$_SESSION['username'];
    else $username='';
    $uri=$_SERVER['PHP_SELF']."?file=login.php";
    $ip=$_SERVER['REMOTE_ADDR'];
    mysqli_query($con, "insert into hits_count values('$uri', '$ip', '$username', DEFAULT)");
?>
<html lang="en">

<head>
    <title>Dashboard - UPES ACM Student Chapter</title>

    <?php include 'assets/parts/includes.php'; ?>
    <link href="/assets/css/index.css" rel="stylesheet" />

    <script src="/assets/js/index.js" type="text/javascript"></script>
</head>

<body>
    <div id="overlay" onscroll="scrolled();">
        <?php include 'assets/parts/header-home.php'; ?>
        <section id="home">
            <article id="login">
                <form action="login/verify.php" id="login-form" method="post">
                    <p style="font-size: 5vh;">Log In:</p>
                    <input type="text" placeholder="Username" name="username" id="username" class="input-txt" style="margin-top: 3vh;" />
                    <input type="password" placeholder="Password" name="password" id="password" class="input-txt" />
                    <input type="submit" value="Log In" name="submit" id="submit" class="button" />
                    <a href="register" id="register" class="button"><i class="fa fa-caret-right"></i>&nbsp;Register as a new user</a>
                </form>
            </article>
        </section>
        <section id="semi-foot">
            <center>
                <div id="carousel">
                    <img style="height: 40vh; margin: 3vh 1vw;" src="/assets/images/event_1.jpg" />
                    <img style="height: 40vh; margin: 3vh 1vw;" src="/assets/images/event_2.jpg" />
                    <img style="height: 40vh; margin: 3vh 1vw;" src="/assets/images/event_3.jpg" />
                    <img style="height: 40vh; margin: 3vh 1vw;" src="/assets/images/event_4.jpg" />
                    <img style="height: 40vh; margin: 3vh 1vw;" src="/assets/images/event_5.jpg" />
                    <img style="height: 40vh; margin: 3vh 1vw;" src="/assets/images/event_6.jpg" />
                    <img style="height: 40vh; margin: 3vh 1vw;" src="/assets/images/event_7.jpg" />
                    <img style="height: 40vh; margin: 3vh 1vw;" src="/assets/images/event_8.jpg" />
                    <img style="height: 40vh; margin: 3vh 1vw;" src="/assets/images/event_9.jpg" />
                    <img style="height: 40vh; margin: 3vh 1vw;" src="/assets/images/event_10.jpg" />
                </div>
            </center>
        </section>
        <?php include 'assets/parts/footer.php'; ?>
    </div>
</body>

</html>
