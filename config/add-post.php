<?php

    function add_post_to_db($USER_ID, $TITLE, $CONTENT, $conn) {
        $addPost = "INSERT INTO post
                    (USER_ID, TITLE, LIKES, CONTENT)
                    VALUES
                    ('". $USER_ID . "', '". $TITLE ."', '0', '". $CONTENT ."')";

        if(mysqli_query($conn, $addPost)){
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>