<?php
    include 'connection.php';
    include 'displaypostscript.php';
    error_reporting(0);
    session_start();
    $userID = $_SESSION['userID'];

    $query = "select username from user where user_id = '$userID'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Forum</title>
    <link rel="stylesheet" href="../stylesheets/header.css" />
    <link rel="icon" href="images/favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../stylesheets/general.css">
    <link rel="stylesheet" href="../stylesheets/footer.css">
  </head>

  <body>
    <div style="position: absolute; left: 20px; top: 30%; width: 15%; font-family: Poppins,Arial;">
      <form action="searchscript.php" method="post">          
            <input id="nedozvoljenoDelenjeSlika" type="checkbox" name="checkBoxTag[]" value="nedozvoljenoDelenjeSlika">
            <label for="nedozvoljenoDelenjeSlika">Nedozvoljeno Delenje Slika</label><br>

            <input id="pretnje" type="checkbox" name="checkBoxTag[]" value="pretnje">
            <label for="pretnje">Pretnje</label><br>

            <input id="vredjanje" type="checkbox" name="checkBoxTag[]" value="vredjanje">
            <label for="vredjanje">Vredjanje</label><br>

            <input id="instagram" type="checkbox" name="checkBoxTag[]" value="instagram">
            <label for="instagram">Instagram</label><br>

            <input id="facebook" type="checkbox" name="checkBoxTag[]" value="facebook">
            <label for="facebook">Facebook</label><br>

            <input id="viber" type="checkbox" name="checkBoxTag[]" value="viberWhatsapp">
            <label for="viber">Viber/Whatsapp</label><br>

            <input id="snapchat" type="checkbox" name="checkBoxTag[]" value="snapchat">
            <label for="snapchat">Snapchat</label><br>

            <input style="border: none; background-color: rgb(220, 220, 220); font-family: Poppins,Arial; padding:5px;" type="submit" class="submit_box" value="Pretrazi"><br>
      </form>
    </div>
  <div>
  <div class="header">
      <div class="logo-image-container">
        <a href="homepage.php"><img class="logo-image" src="../images/logo.png" /></a>
      </div>
      <div class="navigation-tabs">
        <a href="homepage.php"
          ><div class="home-tab">
            <img class="home-tab-icon" src="../images/home-icon.png" />
            <p>Home</p>
          </div></a
        >
        <a href="forum.php"
          ><div class="forum-tab">
            <img class="forum-tab-icon" src="../images/forum-icon.png" />
            <p>Forum</p>
          </div></a
        >
        <a href="faqpage.php"
          ><div class="faq-tab">
            <img class="faq-tab-icon" src="../images/faq-icon.png" />
            <p>FAQ</p>
          </div></a
        >
        <?php if(!$userID) { ?>
        <a href="login.html"
          ><div class="login-tab">
            <img class="login-tab-icon" src="../images/login-icon.png" />
            <p>Log In</p>
          </div></a>
        <?php } else { ?>
        <a href="logoutpage.php"
          ><div class="login-tab">
            <img class="login-tab-icon" src="../images/login-icon.png" />
            <p><?php echo $row['username'];?></p>
          </div></a>
        <?php }?>
      </div>
    </div>

    <div class="create-post-button-container">
      <div></div>
      <div>
        <?php if($userID) { ?>
        <a href="../forumcreatepost.php"><button class="create-post-button">Kreiraj post</button></a>
        <?php } else { ?>
        <a href="login.html"><button class="create-post-button">Kreiraj post</button></a>   
        <?php } ?>
      </div>
    </div>
  <div>

<?php
    include 'connection.php';

    $tagsArray = $_POST['checkBoxTag'];
    $tags = '';
    $postTags = array();
    $postsContain = array();
    $counter = 0;
    
    
    //return ids from all posts that contain the specified tags and puts them in an array
    $query = "select tags,post_id from post";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)) {
        foreach($tagsArray as $tag) {
            if(str_contains($row['tags'], $tag)) {
                $postsContain[$counter] = $row['post_id'];
            }
        }
        $counter++;
    }

    foreach($postsContain as $curPostID) {
        $displayQuery = "select name, likes from post where post_id = '$curPostID'";
        $displayResult = mysqli_query($conn, $displayQuery);
        $displayRow = mysqli_fetch_assoc($displayResult)
        ?>
            <a href="../forumviewpost.php?post=<?php echo $curPostID?>"><div class="post">
                <div class="name_wrap">
                    <p class="post_name"><?php echo $displayRow['name'];?></p>
                </div>
                <div class="likes_wrap">
                    <p class="post_likes">Likes: <?php echo $displayRow['likes'];?></p>
                </div>
            
            </div></a>
        <?php
    }
?>