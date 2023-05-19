<?php

    function get_shared_posts($user_id, $conn) {
        $shared_posts = "SELECT u2.FNAME as shared, u1.FNAME as og, interacts.POST_ID,
                        post.TITLE, post.LIKES, post.CONTENT FROM interacts
                        JOIN post ON post.POST_ID = interacts.POST_ID
                        JOIN users as u1 ON u1.USER_ID = post.USER_ID
                        JOIN users as u2 ON u2.USER_ID = interacts.USER_ID
                        WHERE interacts.USER_ID = ". $user_id ." AND interacts.INTERACTION = 'like';";

        $posts_result = mysqli_query($conn, $shared_posts);

        return mysqli_fetch_all($posts_result, MYSQLI_ASSOC);
    }

?>