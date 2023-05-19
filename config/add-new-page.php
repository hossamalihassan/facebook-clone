<?php

    include("../config/get-page-info.php");

    function add_page_to_db($company_email, $page_name, $user_id, $conn) {
        $addPage = "INSERT INTO page
                    (COMPANY_EMAIL, PAGE_NAME)
                    VALUES
                    ('". $company_email . "', '". $page_name . "');";

        if(mysqli_query($conn, $addPage)){
            add_page_to_creates_table($page_name, $user_id, $conn);
        } else {
            echo mysqli_error($conn);
        }
    }

    function add_page_to_creates_table($page_name, $user_id, $conn) {
        $addPage = "INSERT INTO creates
                    (DATES, USER_ID, PAGE_ID)
                    VALUES
                    ('". date("Y-m-d") . "', '". $user_id . "', '". get_page_id($page_name, $conn)  ."');";

        if(mysqli_query($conn, $addPage)){
            header("Location: page.php?page_id=" . get_page_id($page_name, $conn));
        } else {
            echo mysqli_error($conn);
        }
    }

?>