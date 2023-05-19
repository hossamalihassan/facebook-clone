<?php

    include("../inc/header.php");
    include("../inc/create-page-script.php");
?>

<div class="container">
    <h3>Create a page</h3>
    <form method="POST" class="create-page-form">
        <label for="page-comp-email">Company email</label>
        <input type="email" name="page-comp-email">

        <label for="page-name">Page name</label>
        <input type="text" name="page-name">

        <input type="submit" name="create-page" value="Create" class="create-page-btn">
    </form>
</div>