<?php

    if(isset($_POST["create-page"])) {
        include("../config/database_connection.php");

        $page_comp_email = $_POST["page-comp-email"];
        $page_name = $_POST["page-name"];

        include("../config/add-new-page.php");
        session_start();
        add_page_to_db($page_comp_email, $page_name, $_SESSION["user-id"], $conn);
    }

?>