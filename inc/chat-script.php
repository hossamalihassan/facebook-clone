<?php

    include("../config/database_connection.php");
    include("../config/get-user-info.php");
    include("../config/get-messages.php");
    include("../config/add-message.php");

    $user1_id = $_GET["user1"];
    $user2_id = $_GET["user2"];
    $user2_data = get_user_data($user2_id, $conn);
    $user2_name = $user2_data["FNAME"] . " " . $user2_data["LNAME"];
    
    $messages = get_messages($user1_id, $user2_id, $conn);

    if(isset($_POST["send-message"])){
        $msg = $_POST["message"];
        add_message_to_db($user1_id, $user2_id, $msg, $conn);
    }

    $messages = get_messages($user1_id, $user2_id, $conn);
?>