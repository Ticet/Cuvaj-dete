


<?php
    function displayPosts($userID) {
        include 'connection.php';
        $query = "select post_id, name, user_id, date, likes from post";
        $result = mysqli_query($conn, $query);

        //loop that displays posts 
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <a href="forumviewpost.php?post=<?php echo $row['post_id']?>"><div class="post">
                <div class="name_wrap">
                    <p class="post_name"><?php echo $row['name'];?></p>
                </div>
                <div class="likes_wrap">
                    <p class="post_likes">Likes: <?php echo $row['likes'];?></p>
                </div>
            </div></a>
            <?php
        }

        mysqli_close($conn);
    }    
?>