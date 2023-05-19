<?php

    include("../config/database_connection.php");
    include('../inc/posts-script.php');
    include("../config/get-posts.php");

    if(!isset($_SESSION)){
        session_start();
    }

    $posts = get_posts($_SESSION["user-id"], $conn);

?>