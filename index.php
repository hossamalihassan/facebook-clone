<?php include('inc/header.php'); ?>

<?php
    session_start();

    if(isset($_SESSION["user-email"])){
        header("location: pages/home.php");
    } else {
        header("location: pages/sign-in.php");
    }
?>