<?php
    if(isset($_POST['submit'])) {
        include '../assets/functions/register.php';
        echo "<html><head><script type='text/javascript'>window.alert('Registration successful. Please log-in to start using the dashboard.'); window.location.href='/';</script></head></html>";
        die();
    }
    else {
        echo "<html><head><script type='text/javascript'>window.alert('Please register from the homescreen.'); window.location.href='/';</script></head></html>";
        die();
    }
?>
