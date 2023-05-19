<?php
    include("../inc/header.php");
    include("../inc/chat-script.php");
?>

<div class="container">
    <h1 class="chat-username"><?php echo $user2_name; ?></h1>
    <form method="POST">
        <input type="text" name="message">
        <input type="submit" name="send-message" value="Send">
    </form>

    <div class="messages">
    <? if(!empty($messages)): ?>

        <?php foreach($messages as $message): ?>
            <?php if($message["USER_ID"] == $user1_id): ?>
                <p><b class="user1">You</b> : <?php echo $message["MSG"]; ?></p>
            <?php else: ?>
                <p><b class="user2"><?php echo $user2_name ?></b> : <?php echo $message["MSG"]; ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    <? endif; ?>
    </div>

</div>