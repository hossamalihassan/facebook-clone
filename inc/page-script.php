<?php

    include("../config/database_connection.php");
    include("../config/get-page-info.php");
    include("../config/like-page.php");

    $page_id = $_GET["page_id"];
    
    $page_info = get_page_info($page_id, $conn);

    if(isset($_POST["like"])) {
        add_like($page_id, "+1", $conn);
    }

?>