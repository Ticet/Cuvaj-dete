<?php
  include 'scripts/connection.php';
  include 'scripts/singlepost.php';
    session_start();
    error_reporting(0);
    $userID = $_SESSION['userID'];

    $query = "select username from user where user_id = '$userID'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Forum</title>
    <link rel="stylesheet" href="stylesheets/general.css" />
    <link rel="stylesheet" href="stylesheets/header.css" />
    <link rel="stylesheet" href="stylesheets/content.css" />
    <link rel="stylesheet" href="stylesheets/footer.css" />
    <link rel="stylesheet" href="stylesheets/post.css" />
    <link rel="icon" href="images/favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="header">
      <a href="homepage.php"
        ><div class="logo-image-container">
          <img class="logo-image" src="images/logo.png" /></div
      ></a>
      <div class="navigation-tabs">
        <a href="homepage.php"
          ><div class="home-tab">
            <img class="home-tab-icon" src="images/home-icon.png" />
            <p>Home</p>
          </div></a
        >
        <a href="forum.php"
          ><div class="forum-tab">
            <img class="forum-tab-icon" src="images/forum-icon.png" />
            <p>Forum</p>
          </div></a
        >
        <a href="faqpage.php"
          ><div class="faq-tab">
            <img class="faq-tab-icon" src="images/faq-icon.png" />
            <p>FAQ</p>
          </div></a
        >
        <?php if(!$userID) { ?>
        <a href="login.html"
          ><div class="login-tab">
            <img class="login-tab-icon" src="images/login-icon.png" />
            <p>Log In</p>
          </div></a>
        <?php } else { ?>
        <a href="logoutpage.php"
          ><div class="login-tab">
            <img class="login-tab-icon" src="images/login-icon.png" />
            <p><?php echo $row['username'];?></p>
          </div></a>
        
        <?php }?>
      </div>
    </div>

    <?php displayPost($userID);?>

    

    <div class="footer">
      <div class="copyright-protection">
        <p class="copyright-protection-text">
          &#169; 2022 Flop&Go. All Rights Reserved
        </p>
      </div>
      <div class="about-us">
        <a href="aboutus.php"><p>About Us</p></a>
        <a href="contact.php"><p>Contact</p></a>
        <a href="staff.php"><p>Staff</p></a>
      </div>
      <div class="social-media">
        <p class="social-media-text">Social Media</p>
        <div class="social-media-icons">
          <a href="https://www.instagram.com/" target="blank"
            ><img class="social-media-icon-image" src="images/instagram.png"
          /></a>
          <a href="https://www.twitter.com/" target="blank"
            ><img class="social-media-icon-image" src="images/twitter.png"
          /></a>
          <a href="https://www.twitter.com/" target="blank"
            ><img class="social-media-icon-image" src="images/facebook.png"
          /></a>
        </div>
      </div>
    </div>
  </body>
</html>
