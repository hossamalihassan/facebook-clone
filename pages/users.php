<?php
    include("../inc/header.php");
    include("../inc/users-script.php");
?>

<?php if(!empty($user_data)): ?>

    <h1><?php echo $user_data["FNAME"] . " " . $user_data["LNAME"]; ?></h1>

    <?php
    
        if($_SESSION["user-id"] != $_GET["user_id"]){
            echo "<form method='POST'>";
            if($friends_check) {
                echo "<input type='submit' name='remove-friend' value='Remove friend'>";
                echo "<input type='submit' name='chat' value='Chat'>";
            } else {
                if($sent_request_check){
                    echo "<input type='submit' name='remove-request' value='Remove request'>";
                } else if($receieved_request_check) {
                    echo "<input type='submit' name='accept-request' value='Accept request'>";
                    echo "<input type='submit' name='remove-request' value='Remove request'>";
                } else {
                    echo "<input type='submit' name='add-friend' value='Add friend'>";
                }
            }
            echo "</form>";
        }
    
    ?>
    
    <div>
        <h3>Posts</h3>
        <?php if(!empty($user_posts)): ?>
            <?php foreach($user_posts as $post): ?>

                <form method="POST">
                    <input type="number" name="id" value="<?php echo $post["POST_ID"]; ?>" style="display: none;">
                    <p><?php echo $user_data["FNAME"] ?> posted <b><?php echo $post["TITLE"] ?></b></p>
                    <p><?php echo $post["CONTENT"] ?></p>
                    <p>
                        <b><?php echo $post["LIKES"] ?></b> likes
                        <input type="submit" name="like" value="Like">
                        <input type="submit" name="share" value="Share">
                    </p>
                    
                    <p><b>Comments</b></p>
                    <p><input type="text" name="comment-content"><input type="submit" name="add-comment" value="Comment" id="comment"></p>
                    <?php
                        $comments = get_comments($post["POST_ID"], $conn);
                        if(!empty($comments)){
                            foreach($comments as $comment) {
                                echo "<p><b>" . $comment["FName"] . "</b> : " . $comment["CONTENT"] . "</p>";
                            }
                        } else {
                            echo "There's no comments";
                        }
                    ?>
                    <hr />
                </form>

            <?php endforeach; ?>
        <?php else: ?>
            <p>No posts to show</p>
        <?php endif; ?>
    </div>

    <div>
        <h3>Shared posts</h3>
        <?php if(!empty($shared_posts)): ?>
            <?php foreach($shared_posts as $post): ?>

                <form method="POST">
                    <input type="number" name="id" value="<?php echo $post["POST_ID"]; ?>" style="display: none;">
                    <p><b><?php echo $post["shared"] ?></b> shared this</p>
                    <p><?php echo $post["og"] ?> posted <b><?php echo $post["TITLE"] ?></b></p>
                    <p><?php echo $post["CONTENT"] ?></p>
                    <p>
                        <b><?php echo $post["LIKES"] ?></b> likes
                        <input type="submit" name="like" value="Like">
                        <input type="submit" name="share" value="Share">
                    </p>
                    
                    <p><b>Comments</b></p>
                    <p><input type="text" name="comment-content"><input type="submit" name="add-comment" value="Comment" id="comment"></p>
                    <?php
                        $comments = get_comments($post["POST_ID"], $conn);
                        if(!empty($comments)){
                            foreach($comments as $comment) {
                                echo "<p><b>" . $comment["FName"] . "</b> : " . $comment["CONTENT"] . "</p>";
                            }
                        } else {
                            echo "There's no comments";
                        }
                    ?>
                    <hr />
                </form>

            <?php endforeach; ?>
        <?php else: ?>
            <p>No posts to show</p>
        <?php endif; ?>
    </div>

<?php endif; ?>