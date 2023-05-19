<?php

    function get_posts($user_id, $conn) {
        # get posts for people whom the user is friends with
        $get_posts = "SELECT DISTINCT(POST_ID), FName, TITLE, CONTENT, LIKES FROM post 
        JOIN users on users.USER_ID = post.USER_ID
        WHERE post.USER_ID = ANY(SELECT `PERSON1ID` FROM `friend` 
        WHERE `PERSON2ID` = ". $user_id .") OR post.USER_ID = ". $user_id .
        " ORDER BY POST_ID DESC LIMIT 20;";

        $posts_result = mysqli_query($conn, $get_posts);

        return mysqli_fetch_all($posts_result, MYSQLI_ASSOC);
    }

    function get_profile_posts($user_id, $conn) {
        # get posts of a specific user
        $get_posts = "SELECT POST_ID, TITLE, LIKES, CONTENT FROM post 
        WHERE USER_ID = '". $user_id ."'
        ORDER BY POST_ID DESC LIMIT 20;";

        $posts_result = mysqli_query($conn, $get_posts);

        return mysqli_fetch_all($posts_result, MYSQLI_ASSOC);
    }

?>