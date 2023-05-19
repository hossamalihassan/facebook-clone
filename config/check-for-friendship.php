<?php

    function check_if_friends($USER1, $USER2, $conn) {
        $friends_check = "SELECT * FROM friend
        WHERE (PERSON1ID = ". $USER1 ." AND PERSON2ID = ". $USER2 .") OR (PERSON1ID = ". $USER2 ." AND PERSON2ID = ". $USER1 .");";

        $search_result = mysqli_query($conn, $friends_check);

        return !empty(mysqli_fetch_all($search_result, MYSQLI_ASSOC)[0]);
    }

    function check_for_sent_request($USER1, $USER2, $conn) {
        $friends_check = "SELECT REQEST_ID, RECEIVER_ID, SENDER_ID FROM friendrequests
        WHERE RECEIVER_ID = ". $USER2 ." AND SENDER_ID = ". $USER1;

        $search_result = mysqli_query($conn, $friends_check);

        return !empty(mysqli_fetch_all($search_result, MYSQLI_ASSOC)[0]);
    }

    function check_for_received_request($USER1, $USER2, $conn) {
        $friends_check = "SELECT REQEST_ID, RECEIVER_ID, SENDER_ID FROM friendrequests
        WHERE RECEIVER_ID = ". $USER1 ." AND SENDER_ID = ". $USER2;

        $search_result = mysqli_query($conn, $friends_check);

        return !empty(mysqli_fetch_all($search_result, MYSQLI_ASSOC)[0]);
    }

?>