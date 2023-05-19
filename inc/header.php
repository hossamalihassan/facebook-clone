<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
</head>

<div>
    <h1>FACEBOOK</h1>
    <?php 
    
        if(!isset($_SESSION)){
            session_start();
        }

        if(isset($_SESSION["user-id"])){
            echo "<a href='../pages/home.php'>Home</a><br>";
            echo "<a href='../pages/users.php?user_id=". $_SESSION["user-id"] ."'>Profile</a><br>";
            echo "<a href='../pages/chats.php'>Chats</a><br>";
            echo "<a href='../pages/create-page.php'>Create a page</a><br>";
            echo "<a href='../inc/sign-out-script.php'>Sign out</a>";
        }
    
    ?>
</div>