<?php 



    session_start();

    unset($_SESSION['vote_login']);

    unset($_SESSION['score_login']);

    header('location: index.php');



?>