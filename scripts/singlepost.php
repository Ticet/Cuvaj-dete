<?php
    function isLiked($userID, $postID) {
        error_reporting(0);
        include 'connection.php';
        $isLiked = false;
        $query = "select * from likes where user_id = '$userID' and post_id = '$postID'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if(!$row) {
            $isLiked = false;
        }
        else {
            $isLiked = true;
        }
        return $isLiked;
    }




    function displayPost($userID) {
        include 'connection.php';

        $postID = $_GET['post'];

        $isLiked = isLiked($userID, $postID);

        $query = "select * from post where post_id = '$postID'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $postUserID = $row['user_id'];

        $unameQuery = "select username from user where user_id = '$postUserID'";
        $unameResult = mysqli_query($conn, $unameQuery);
        $unameRow = mysqli_fetch_assoc($unameResult);

        ?>

            <div>
            <div class="user-post">
      <div class="user-post-title">
        <p class="user-post-title-text"><?php echo $row['name'];?></p>
      </div>
      <div class="user-post-creator-username-container">
        <p class="user-post-creator-username-creation-date">
          <?php echo $unameRow['username'].' '.$row['date']?>
        </p>
      </div>
      <div class="user-post-content">
        <div class="user-post-content-text">
          <p>
            <?php echo $row['content'];?>
          </p>
        </div>
      </div>
      <div class="below-text-container">
        <div class="user-post-reply-button">
          <form action="forumcreatereply.php"
            ><button type="submit" value="<?php echo $postID?>" class="user-post-reply-button-class" name="replyBTN">
              <p>Odgovori</p>
            </button></form
          >
        </div>
        <div class="user-reputation">
          <p class="user-rep">

          <?php if($userID) { ?>
                    <p class="user-rep"><?php echo $row['likes'];?></p>
                    <form action="scripts/likescript.php" method="post">
                        
                            <?php if($isLiked) {
                                ?> <button class="repup-icon" value="<?php echo $isLiked.' '.$postID?>" name="likeBTN">
                                <img class="repup-image" src="images/repup.png" /> <?php
                            }
                            else {
                                ?> <button class="repup-icon-unliked" value="<?php echo $isLiked.' '.$postID?>" name="likeBTN">
                                <img class="repup-image" src="images/repup.png" /> <?php
                            }
                            ?>                
                        </button>
                    </form>
                <?php } else { ?>
                    <button><a href="index.php"></a></button>
                <?php } ?>


          </p>
        </div>
      </div>
    </div>

                
    <?php
      $replyQuery = "select * from reply where post_id = $postID";
      $replyResult = mysqli_query($conn, $replyQuery);
      while($replyRow = mysqli_fetch_assoc($replyResult)) {
    ?>             


            </div>

            <div class="user-post-replies">
      <div class="user-reply-creator-username">
        <p><?php echo $unameRow['username'].' '.$row['date'];?></p>
      </div>
      <div class="user-post-replies-content">
        <p>
          <?php echo $replyRow['text'];?>
        </p>
      </div>
      <div class="below-text-container">
        <div class="user-reputation">
          <!--<p class="user-rep">+5</p>
          <button class="repup-icon">
            <img class="repup-image" src="images/repup.png" />
          </button>-->
        </div>
      </div>
    </div>
        <?php }
    }
?>