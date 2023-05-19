<?php

    function share_post($USER_ID, $POST_ID, $conn) {
        $sharePost = "INSERT INTO `interacts`(`DATES`, `INTERACTION`, `USER_ID`, `POST_ID`)
                    VALUES
                    ('". date("Y-m-d") ."', 'share', '". $USER_ID ."', '". $POST_ID ."')";

        if(mysqli_query($conn, $sharePost)){
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>