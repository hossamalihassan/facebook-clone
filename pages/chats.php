<?php 
    include("../inc/header.php");
    include("../inc/chats-script.php"); 
?>

<div>

    <?php if(!empty($chats)): ?>
        <?php foreach($chats as $chat): ?>
            <a href="<?php echo $chat['friend_id']; ?>"><b><?php echo $chat["user_name"] ?></b></a>
            <?php if($chat['friend_id'] == $chat['user_id']): ?>
                <p><b>You</b> <?php echo $chat['MSG'] ?></p>
            <?php else: ?>
                <p><?php echo $chat['MSG'] ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>There's no chats</p>
    <?php endif; ?>

</div>