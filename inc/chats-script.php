<?php

    include("../config/database_connection.php");
    include("../config/get-chats.php");

    $chats = get_chats($_SESSION["user-id"], $conn);

?>