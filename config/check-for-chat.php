<?php

    function check_for_chat($user_id, $conn) {
        $chat_check = "SELECT * FROM chats
        WHERE CHAT_ID = any(SELECT CHAT_ID FROM chats WHERE USER_ID = ". $user_id .");";

        $search_result = mysqli_query($conn, $chat_check);

        return mysqli_fetch_all($search_result, MYSQLI_ASSOC);
    }

?>