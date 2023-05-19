<?php 

    if(isset($_POST["sign-in"])) {
        include("../config/database_connection.php");

        $email = $_POST["user-email"];
        $password = $_POST["user-password"];

        include("../config/check-for-user.php");
        $user_check = check_for_user($email, $password, $conn);

        $found_user = false;
        if(!empty($user_check)){
            $found_user = true;
            session_start();
            $_SESSION["user-id"] = $user_check[0]["USER_ID"];
            header("location: ../pages/home.php");
        }
    }

?>