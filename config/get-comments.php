<?php

    function get_comments($post_id, $conn) {
        # get posts for people whom the user is friends with
        $comments = "SELECT FName, CONTENT FROM comments as c " .
        " JOIN users as u on c.USER_ID = u.USER_ID WHERE c.POST_ID = ". $post_id .";";

        $comments_result = mysqli_query($conn, $comments);

        $result = mysqli_fetch_all($comments_result, MYSQLI_ASSOC);
    
        return $result;
    }

?>