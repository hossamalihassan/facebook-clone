<?php

    function get_messages($user1_id, $user2_id, $conn) {
            $messages = "SELECT DISTINCT(MSG_ID), message.USER_ID, MSG FROM message
            JOIN chats on chats.CHAT_ID = message.CHAT_ID
            WHERE chats.CHAT_ID = any(SELECT CHAT_ID FROM chats where chats.USER_ID = ". $user1_id .")
            AND chats.CHAT_ID = any(SELECT CHAT_ID FROM chats where chats.USER_ID = ". $user2_id .")
            ORDER BY MSG_ID;";

            $search_result = mysqli_query($conn, $messages);

            return mysqli_fetch_all($search_result, MYSQLI_ASSOC);
    }

?>