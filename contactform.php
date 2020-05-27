<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];




    $mailTo ="imsnago@gmail.com";
    $headers = "From: ".$emailFrom;
    $txt = "You have received an e-mail from ".$fname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.php?mailsend");

}

?>