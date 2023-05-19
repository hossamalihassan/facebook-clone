<?php

    function add_user_to_db($fname, $lname, $dob, $email, $pass, $about, $conn) {
        $addUser = "INSERT INTO users
                    (FNAME, LNAME, DOB, EMAIL, PASS, ABOUT)
                    VALUES
                    ('". $fname . "', '". $lname ."', '". $dob ."', '". $email ."', '" . $pass . "', '". $about ."')";

        if(mysqli_query($conn, $addUser)){
            header("Location: ../pages/home.php");
        } else {
            echo mysqli_error($conn);
        }
    }

?>