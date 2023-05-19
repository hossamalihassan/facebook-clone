<?php

    function add_chat_to_db($user1_id, $user2_id, $conn) {
        add_chat_to_chat_table($conn);
        $chat_id = get_chat_id($conn);

        $addChat = "INSERT INTO chats(USER_ID, CHAT_ID)
                    VALUES ('". $user1_id ."', '". $chat_id ."');";
        
        $addChat .= "INSERT INTO chats(USER_ID, CHAT_ID)
                    VALUES ('". $user2_id ."', '". $chat_id ."')";

        if(mysqli_multi_query($conn, $addChat)){

        } else {
            echo mysqli_error($conn);
        }
    }

    function add_chat_to_chat_table($conn) {
        $addNewChat = "INSERT INTO chat () VALUES ()";

        if(mysqli_query($conn, $addNewChat)){
            
        } else {
            echo mysqli_error($conn);
        }
    }

    function get_chat_id($conn) {
        $chat_id = "SELECT CHAT_ID FROM chat ORDER BY CHAT_ID DESC LIMIT 1;";

        $posts_result = mysqli_query($conn, $chat_id);

        return mysqli_fetch_all($posts_result, MYSQLI_ASSOC)[0]["CHAT_ID"];
    }

?>