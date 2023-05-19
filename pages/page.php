<?php
    include('../inc/header.php');
    include("../inc/page-script.php");
?>

<h1>
    <?php echo $page_info["PAGE_NAME"] ?> - <?php echo $page_info["LIKES"]; ?> Likes
</h1>

<form method="POST">
    <button type="submit" name="like">
        Like
    </button>
</form>

<p>
    <b>Company email:</b> <?php echo $page_info["COMPANY_EMAIL"] ?>
</p>