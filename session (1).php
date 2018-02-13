<?php
    // take user informatin
    $username = "Nada";
    $password = "20182dj";
    $email    = "koko@gmial.com";
    $gender   = "Female";

    // check if the password less than 8 letters
    if(strlen($password) === 8 || strlen($password) > 3){
        echo "the lenght is less than 8 letters";
    } else {
        echo "your password = " . $password;
    }

    if(strlen($username) < 4){
        echo "<br />your name is less than 4 letters";
    } else {
        echo "<br />your name is $username";
    }
