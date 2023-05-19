<?php

    function remove_friend($USER1, $USER2, $conn) {
        $removeFriend = "DELETE FROM friend 
        WHERE (PERSON1ID = ". $USER1 ." AND PERSON2ID = ". $USER2 .") OR (PERSON1ID = ". $USER2 ." AND PERSON2ID = ". $USER1 .");";

        if(mysqli_query($conn, $removeFriend)){
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>