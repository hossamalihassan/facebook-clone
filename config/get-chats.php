<?php

    function get_chats($user_id, $conn) {
        $chats = "SELECT MAX(m.MSG_ID), C1.USER_ID as user_id, m.USER_ID as friend_id,
                        concat(u.FNAME, ' ', u.LNAME) as user_name, m.MSG FROM chats AS C1
                        JOIN chats as C2 on C1.CHAT_ID = C2.CHAT_ID
                        JOIN users as u on C2.USER_ID = u.USER_ID 
                        JOIN message as m on m.CHAT_ID = C2.CHAT_ID 
                        WHERE C1.USER_ID = ". $user_id ." AND u.USER_ID = m.USER_ID 
                        ORDER BY m.MSG_ID DESC;";

        $chats_result = mysqli_query($conn, $chats);

        return mysqli_fetch_all($chats_result, MYSQLI_ASSOC);
    }

?>