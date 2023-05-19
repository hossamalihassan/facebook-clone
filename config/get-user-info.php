<?php

    function get_user_id($email, $conn) {
        $search_user_id = 'SELECT USER_ID FROM page WHERE EMAIL LIKE "' . $email . '";';

        $search_result = mysqli_query($conn, $search_user_id);

        return mysqli_fetch_all($search_result, MYSQLI_ASSOC)[0]["USER_ID"];
    }

    function get_user_data($user_id, $conn) {
        $search_user = 'SELECT * FROM users WHERE USER_ID LIKE "' . $user_id . '";';

        $search_result = mysqli_query($conn, $search_user);

        return mysqli_fetch_all($search_result, MYSQLI_ASSOC)[0];
    }

?>