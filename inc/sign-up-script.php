<?php 

    if(isset($_POST["sign-up"])) {
        include("../config/database_connection.php");

        $email = $_POST["user-email"];
        $pass = $_POST["user-password"];
        $fName = $_POST["user-fName"];
        $lName = $_POST["user-lName"];
        $dob = $_POST["user-dob"];
        $about = $_POST["user-about"];

        include("../config/add-new-user.php");
        add_user_to_db($fName, $lName, $dob, $email, $pass, $about, $conn);

        include("../config/get-user-info.php");
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION["user-id"] = get_user_id($email, $conn);
    }

?>