<?php include("../inc/header.php") ?>

<?php 

    include("../inc/sign-in-script.php");

?>
<div class="container">
    <h1>Sign in</h1>
    <form method="POST" class="sign-form">
        <label for="email">email</label>
        <input type="email" name="user-email">

        <label for="password">password</label>
        <input type="password" name="user-password">

        <input type="submit" name="sign-in" value="Sign in">
    </form>

    <p>
        <?php 
        
            if(isset($found_user) && $found_user){
                if($found_user){
                    echo "hello";
                } else {
                    echo "Password or email is incorrect !";
                }
            } 
        ?>
    </p>

    <h1>Dont have an acoount ? <a href="sign-up.php">Sign up !</a></h1>
</div>