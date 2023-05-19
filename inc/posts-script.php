<?php

    include("../config/add-post.php");
    include("../config/like-post.php");
    include("../config/get-comments.php");
    include("../config/add-comment.php");
    include("../config/share-post.php");

    if(!isset($_SESSION)){
        session_start();
    }
    
    if(isset($_POST["post"])){
        $title = $_POST["title"];
        $content = $_POST["content"];
        add_post_to_db($_SESSION["user-id"], $title, $content, $conn);
    }

    if(isset($_POST["like"])){
        $post_id = $_POST["id"];
        like_post($post_id, $_SESSION["user-id"], "+1", $conn);
    }

    if(isset($_POST["add-comment"])){
        $post_id = $_POST["id"];
        $comment_content = $_POST["comment-content"];
        add_comment_to_db($_SESSION["user-id"], $post_id, $comment_content, $conn);
    }
    
    if(isset($_POST["share"])){
        $post_id = $_POST["id"];
        share_post($_SESSION["user-id"], $post_id, $conn);
    }
?>