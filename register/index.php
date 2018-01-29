<?php
    session_start();
    if(isset($_SESSION["username"])) {
        echo "<html><head><script type='text/javascript'>window.alert('You are already registered. Please log out to register another user'); window.location.href='/';</script></head></html>";
        die();
    }
?>
    <html lang="en">

    <head>
        <title>Register - Dashboard, UPES ACM Student Chapter</title>

        <?php include '../assets/parts/includes.php'; ?>
        <link href="/assets/css/register.css" rel="stylesheet" />

    </head>

    <body>
        <?php include '../assets/parts/header.php'; ?>
        <section id="outer">
            <!--<div id="slider">
                <article class="image">
                    <a href="assets/images/1.jpg" target="_blank"><img src="assets/images/1.jpg" /></a>
                    <a href="assets/images/2.jpg" target="_blank"><img src="assets/images/2.jpg" /></a>
                    <a href="assets/images/3.jpg" target="_blank"><img src="assets/images/3.jpg" /></a>
                    <a href="assets/images/4.jpg" target="_blank"><img src="assets/images/4.jpg" /></a>
                    <a href="assets/images/5.jpg" target="_blank"><img src="assets/images/5.jpg" /></a>
                    <a href="assets/images/6.jpg" target="_blank"><img src="assets/images/6.jpg" /></a>
                </article>
            </div>-->
        </section>
        <section id="body">
            <article id="form">
                <form action="verify.php" method="post">
                    <input class="inp-txt" type="text" placeholder="First and Middle Name*" name="fname" title="Please enter your first and middle name" required />
                    <input class="inp-txt" type="text" placeholder="Last Name*" name="lname" title="Please enter your last name" required />
                    <input class="inp-txt" type="text" name="branch" placeholder="Branch*" title="Please enter your Branch" required />
                    <select name="year" required class="inp-txt" title="Please enter yout current year of study">
                        <option value="">Year of Study*</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input class="inp-txt" type="number" name="sap" placeholder="SAP ID*" title="Please enter your name" required />
                    <input class="inp-txt" type="email" name="email" placeholder="Email ID*" title="Please enter your Email-ID" required />
                    <select name="gender" class="inp-txt" title="Please select your gender" required>
                        <option value="">Gender*</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <input class="inp-txt" type="number" name="contact" placeholder="Contact Number*" title="Please enter your Contact Number" required />
                    <input class="inp-txt" type="number" name="whatsapp" placeholder="WhatsApp Number" title="Please enter your WhatsApp Number (if any)" />
                    <input class="inp-txt" type="text" name="username" placeholder="Username*" title="Please enter your unique username" required />
                    <input class="inp-txt" type="password" name="password" placeholder="Password*" title="Please enter a password" required />
                    <input class="inp-txt" type="password" name="cnf-password" placeholder="Confirm Password*" title="Re-enter the password to confirm" required />
                    <div id="center"><input class="button" type="submit" name='submit' value="Register" /></div>
                </form>
            </article>
        </section>
        <?php include '../assets/parts/footer.php'; ?>
    </body>

    </html>
