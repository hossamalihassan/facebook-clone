<?php

    function add_friend_request_to_db($SENDER_ID, $RECEIVER_ID, $conn) {
        $addFriendRequest = "INSERT INTO friendrequests
                    (SENDER_ID, RECEIVER_ID)
                    VALUES
                    ('". $SENDER_ID . "', '". $RECEIVER_ID ."')";

        if(mysqli_query($conn, $addFriendRequest)){
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>