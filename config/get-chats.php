<?php

    function get_chats($user_id, $conn) {
        $chats = "SELECT MAX(MSG_ID), concat(FNAME, ' ', LNAME) as username, 
                chats.user_id, chats.CHAT_ID, MSG FROM chats 
                JOIN users on users.USER_ID = chats.USER_ID 
                JOIN message on message.CHAT_ID = chats.CHAT_ID 
                WHERE chats.CHAT_ID = 
                ANY(SELECT chats.CHAT_ID FROM chats WHERE chats.USER_ID = ". $user_id .")
                AND chats.USER_ID != ". $user_id ." 
                GROUP BY chats.CHAT_ID;";

        $chats_result = mysqli_query($conn, $chats);

        return mysqli_fetch_all($chats_result, MYSQLI_ASSOC);
    }

?>