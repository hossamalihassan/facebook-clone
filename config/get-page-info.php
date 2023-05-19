<?php

    function get_page_id($page_name, $conn) {
        $search_page_id = 'SELECT PAGE_ID FROM page WHERE PAGE_NAME LIKE "' . $page_name . '";';

        $search_result = mysqli_query($conn, $search_page_id);

        return mysqli_fetch_all($search_result, MYSQLI_ASSOC)[0]["PAGE_ID"];
    }

    function get_page_info($page_id, $conn) {
        $search_page_id = 'SELECT * FROM page WHERE PAGE_ID = "' . $page_id . '";';

        $search_result = mysqli_query($conn, $search_page_id);

        return mysqli_fetch_all($search_result, MYSQLI_ASSOC)[0];
    }

?>