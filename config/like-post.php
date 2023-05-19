<?php

    function like_post($post_id, $user_id, $increase_by, $conn) {
        $likePost = "UPDATE post SET LIKES = (SELECT LIKES WHERE POST_ID = ". $post_id .") ". $increase_by ." WHERE POST_ID = ". $post_id . ";";
        $likePost .= "INSERT INTO interacts (`DATES`, `INTERACTION`, `USER_ID`, `POST_ID`) ".
        "VALUES ('". date("Y-m-d") ."','like','". $user_id ."','". $post_id ."');";

        if(mysqli_multi_query($conn, $likePost)){
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>