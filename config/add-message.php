<?php

    function add_message_to_db($user1_id, $user2_id, $msg, $conn){
        $chat_id = get_chat_id($user1_id, $user2_id, $conn);
        $addMeesage = "INSERT INTO message (USER_ID, CHAT_ID, MSG)
                    VALUES (". $user1_id .", '". $chat_id ."', '". $msg ."')";

        if(mysqli_query($conn, $addMeesage)){
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo mysqli_error($conn);
        }
    }

    function get_chat_id($user1_id, $user2_id, $conn) {
        $search_page_id = "SELECT C1.CHAT_ID FROM chats AS c1
                            JOIN chats as C2 on C1.CHAT_ID = C2.CHAT_ID
                            WHERE C1.USER_ID = ". $user1_id ." AND C2.USER_ID = ". $user2_id .";";

        $search_result = mysqli_query($conn, $search_page_id);

        return mysqli_fetch_all($search_result, MYSQLI_ASSOC)[0]["CHAT_ID"];
    }

?>