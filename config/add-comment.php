<?php

    function add_comment_to_db($USER_ID, $POST_ID, $CONTENT, $conn) {
        $addComment = "INSERT INTO comments
                    (USER_ID, POST_ID, CONTENT)
                    VALUES
                    ('". $USER_ID . "', '". $POST_ID ."', '". $CONTENT ."');";
        $addComment .= "INSERT INTO interacts
                        (`DATES`, `INTERACTION`, `USER_ID`, `POST_ID`)
                        VALUES
                        ('". date("Y-m-d") . "', 'comment', '". $USER_ID ."', '". $POST_ID ."');";

        if(mysqli_multi_query($conn, $addComment)){
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>