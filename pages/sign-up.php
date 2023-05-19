<?php
    include("../inc/header.php");
    include("../inc/sign-up-script.php");
?>

<form method="POST">
    <label for="user-fName">First name</label>
    <input type="text" name="user-fName">

    <label for="user-lName">Last name</label>
    <input type="text" name="user-lName">

    <label for="user-dob">Date of birth</label>
    <input type="date" name="user-dob">

    <label for="user-email">Email</label>
    <input type="password" name="user-email">

    <label for="user-password">Password</label>
    <input type="password" name="user-password">

    <label for="user-about">About</label>
    <textarea name="user-about"></textarea>

    <input type="submit" name="sign-up" value="Sign up">
</form>