<?php
    include("../inc/header.php");
    include("../inc/chat-script.php");
?>

<h1><?php echo $user2_name; ?></h1>
<form method="POST">
    <input type="text" name="message">
    <input type="submit" name="send-message" value="Send">
</form>

<? if(!empty($messages)): ?>

    <?php foreach($messages as $message): ?>
        <?php if($message["USER_ID"] == $user1_id): ?>
            <p><b>You</b> : <?php echo $message["MSG"]; ?></p>
        <?php else: ?>
            <p><b><?php echo $user2_name ?></b> : <?php echo $message["MSG"]; ?></p>
        <?php endif; ?>
    <?php endforeach; ?>

<? endif; ?>