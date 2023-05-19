<?php 

    function check_for_user($username, $password, $conn) {
        $search = 'SELECT * FROM users WHERE EMAIL LIKE "' . $username . '"
        AND PASS LIKE "' . $password . '";';

        $search_result = mysqli_query($conn, $search);
    
        $search_returned = mysqli_fetch_all($search_result, MYSQLI_ASSOC);

        return empty($search_returned) ? null : $search_returned;
    }

?>