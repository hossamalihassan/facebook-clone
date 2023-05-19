<?php 
    include("../inc/header.php");
    include("../inc/chats-script.php"); 
?>

<div class="container">
    <div class="chat-rooms">

        <?php if(!empty($chats)): ?>
            <?php foreach($chats as $chat): ?>
                <?php if($chat["user_id"] != null): ?>
                <div class="chat-room">
                    <a href="<?php echo 'chat.php?user1=' . $_SESSION["user-id"] . '&user2=' . $chat['user_id']; ?>" clas="chat-room-username"><b><?php echo $chat["username"] ?></b></a>
                    <!-- <?php if($chat['user_id'] == $_SESSION["user-id"]): ?>
                        <p><b>You</b> : <?php echo $chat['MSG'] ?></p>
                    <?php else: ?>
                        <p><?php echo explode(" ", $chat["username"])[0] . " : " . $chat['MSG'] ?></p>
                    <?php endif; ?> -->
                </div>
                <?php else: ?>
                    <p>There's no chats</p>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <p>There's no chats</p>
        <?php endif; ?>
    </div>
</div>