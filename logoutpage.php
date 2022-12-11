<?php
include 'scripts/connection.php';
    session_start();
    $userID = $_SESSION['userID'];

    $query = "select username, email from user where user_id = '$userID'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Vas Profil</title>
    <link rel="stylesheet" href="stylesheets/general.css" />
    <link rel="stylesheet" href="stylesheets/header.css" />
    <link rel="stylesheet" href="stylesheets/content.css" />
    <link rel="stylesheet" href="stylesheets/footer.css" />
    <link
      rel="stylesheet"
      href="stylesheets/">
      <link
      rel="icon"
      href="favicon.png"
      type="image/png"
    />
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
        <a href="homepage.html"
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
        <a href="faqpage.html"
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

    <div class="your-profile-container">
      <div class="your-profile-box">
        <div class="profile-picture">
          <img class="profile-picture-image" src="images/staff-icon.png" />
        </div>
        <div class="profile-username"><p><?php echo $row['username'];?></p></div>
        <div class="profile-email"><p><?php echo $row['email'];?></p></div>
      </div>
      <div class="log-out">
        <form action="scripts/logoutscript.php">
          <button class="log-out-button">Log Out</button>
        </form>
      </div>
    </div>

    <div class="footer">
      <div class="copyright-protection">
        <p class="copyright-protection-text">
          &#169; 2022 Flop&Go. All Rights Reserved
        </p>
      </div>
      <div class="about-us">
        <a href="aboutus.html"><p>About Us</p></a>
        <a href="contact.html"><p>Contact</p></a>
        <a href="staff.html"><p>Staff</p></a>
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
