<?php

    function add_like($page_id, $increase_by, $conn) {
        $likePage = "UPDATE `page` SET LIKES = (SELECT `LIKES` WHERE PAGE_ID = ". $page_id .") ". $increase_by ." WHERE PAGE_ID = ". $page_id .";";

        if(mysqli_query($conn, $likePage)){
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>