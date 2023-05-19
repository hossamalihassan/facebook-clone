<?php

    function accept_request($USER1, $USER2, $conn) {
        $addPage = "INSERT INTO `friend`(`PERSON1ID`, `PERSON2ID`, `Time`)
        VALUES
        ('". $USER1 ."', '". $USER2 ."', '". date("Y-m-d") ."')";

        if(mysqli_query($conn, $addPage)){
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>