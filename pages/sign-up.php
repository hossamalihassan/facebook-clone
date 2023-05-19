<?php
    include("../inc/header.php");
    include("../inc/sign-up-script.php");
?>

<div class="container">
    <h1>Sign up</h1>
    <form method="POST" class="sign-form">
        <label for="user-fName">First name</label>
        <input type="text" name="user-fName">

        <label for="user-lName">Last name</label>
        <input type="text" name="user-lName">

        <label for="user-dob">Date of birth</label>
        <input type="date" name="user-dob">

        <label for="user-email">Email</label>
        <input type="email" name="user-email">

        <label for="user-password">Password</label>
        <input type="password" name="user-password">

        <label for="user-about">About</label>
        <textarea name="user-about"></textarea>

        <input type="submit" name="sign-up" value="Sign up">
    </form>
    <h1>Have an acoount ? <a href="sign-in.php">Sign in !</a></h1>
</div>