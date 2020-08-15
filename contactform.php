<?php

if(isset($_POST['submit'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "dgoodfellow@me.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$fName.".\n\n".$message;


    mail(
        $mailTo,
        $subject,
        $txt,
        $headers
    );

    header("Location:contact.php?mailsend");

}
