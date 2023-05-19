<?php

    include("../config/database_connection.php");
    include("../config/check-for-friendship.php");
    include("../config/get-shared-posts.php");
    include("../inc/posts-script.php");

    if(isset($_GET["user_id"])) {
        $user_id = $_GET["user_id"];
        
        include("../config/get-user-info.php");
        $user_data = get_user_data($user_id, $conn);

        include("../config/get-posts.php");
        $user_posts = get_profile_posts($user_id, $conn);

        $friends_check = check_if_friends($_SESSION["user-id"], $_GET["user_id"], $conn);

        $sent_request_check = false;
        $receieved_request_check = false;
        if(!$friends_check){
            $sent_request_check = check_for_sent_request($_GET["user_id"], $_SESSION["user-id"], $conn);
            $receieved_request_check = check_for_received_request($_GET["user_id"], $_SESSION["user-id"], $conn);
        }

        if(isset($_POST["add-friend"])){
            include("../config/add-friend-request.php");
            add_friend_request_to_db($user_id, $_SESSION["user-id"], $conn);
        }

        if(isset($_POST["remove-request"])){
            include("../config/remove-friend-request.php");
            remove_request($user_id, $_SESSION["user-id"], $conn);
        }

        if(isset($_POST["remove-friend"])){
            include("../config/remove-friend.php");
            remove_friend($user_id, $_SESSION["user-id"], $conn);
        }

        if(isset($_POST["accept-request"])){
            include("../config/accept-friend-request.php");
            accept_request($user_id, $_SESSION["user-id"], $conn);

            include("../config/remove-friend-request.php");
            remove_request($user_id, $_SESSION["user-id"], $conn);
        }

        if(isset($_POST["chat"])){
            include("../config/check-for-chat.php");
            $chat_users = check_for_chat($_SESSION["user-id"], $conn);

            $chat_exists = false;
            foreach($chat_users as $chat_user){
                if($chat_user["USER_ID"] == $user_id){
                    $chat_exists = true;
                }
            }

            if(!$chat_exists) {
                include("../config/create-new-chat.php");
                add_chat_to_db($_SESSION["user-id"], $user_id, $conn);
            }

            header("Location: ../pages/chat.php?user1=" . $_SESSION["user-id"] . "&user2=" . $user_id);
        }

        $shared_posts = get_shared_posts($user_id, $conn);
    }

?>