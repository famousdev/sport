<?php
    $user = "root";
    $password = "";

    try {
        $db = new PDO("mysql:host=localhost;dbname=sport;charset=utf8", $user, $password);
    } catch (Exeption $e) {
        echo $e->getMessege();
    }

    