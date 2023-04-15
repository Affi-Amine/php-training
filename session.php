<?php
    session_start();

    if(isset($_SESSION['nbre'])){
        echo "merci pour votre " . $_SESSION['nbre'] . " visite";
        $_SESSION['nbre']++;

    }else {
        $_SESSION['nbre'] = 2;
        echo "merci pour votre premiere visite";
    }


