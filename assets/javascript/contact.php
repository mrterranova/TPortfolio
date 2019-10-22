<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = "From your website";
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "michalterranova@mail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$name.".\n\n".$message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location:index.php?mailsend")
}