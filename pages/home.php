<?php
    include('../inc/header.php');
    include('../inc/home-script.php');    
?>

<form method="POST">
    <input type="text" placeholder="Search">
    <input type="submit" value="Search">
</form>

<div>
    <h3>Write a post</h3>
    <form method="POST">
        <label for="title">title</label>
        <input type="text" name="title">
        <label for="content">content</label>
        <textarea name="content"></textarea>
        <input type="submit" name="post" value="Submit">
    </form>
</div>

<div>
    <?php if(!empty($posts)): ?>

        <?php foreach($posts as $post): ?>

            <form method="POST">
                <input type="number" name="id" value="<?php echo $post["POST_ID"]; ?>" style="display: none;">
                <p><?php echo $post["FName"] ?> posted <b><?php echo $post["TITLE"] ?></b></p>
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