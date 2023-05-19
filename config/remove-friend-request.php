<?php

    function remove_request($USER1, $USER2, $conn) {
        $removeRequest = "DELETE FROM friendrequests
        WHERE (SENDER_ID = ". $USER1 ." AND RECEIVER_ID = ". $USER2 .") 
        OR (SENDER_ID = ". $USER2 ." AND RECEIVER_ID = ". $USER1 .");";

        if(mysqli_query($conn, $removeRequest)){
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>