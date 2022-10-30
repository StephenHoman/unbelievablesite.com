<?php
    $toEmail = "jakenesler@gmail.com";
    $mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
    if(mail($toEmail, $_POST["message"], $_POST["phone"], $mailHeaders)) {
    echo"<p class='success'>Contact Mail Sent.</p>";
    } else {
    echo"<p class='Error'>Problem in Sending Mail.</p>";
    }
    ?>