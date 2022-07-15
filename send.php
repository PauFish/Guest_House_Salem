<?php
    //Nos llegan los datos
    $sendEmailTo= "pauykasia@gmail.com";
    $name= $_Post["contactName"];
    $email= $_Post["contactEmail"];
    $Subject= $_Post["contactSubject"];
    $Message= $_Post["contactMessage"];
    //Los unimos
    $allMessage= "Name: " . $name. "\nEmail: " .$email. "\nSubject: " .$Subject. "\nMessage: " .$Message;
    //Los enviamos
    mail($sendEmailTo, "Contact ", $allMessage);
    //Redireccionamos al usuario
    header("location:thanks.php");
?>