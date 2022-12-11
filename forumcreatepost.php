<?php
include 'scripts/connection.php';
error_reporting(0);
    session_start();
    $userID = $_SESSION['userID'];

    $query = "select username from user where user_id = '$userID'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>




<!DOCTYPE html>
<head>
    <title>Forum</title>
    <link rel="stylesheet" href="stylesheets/header.css">
    <link rel="stylesheet" href="stylesheets/footer.css">
    <link rel="stylesheet" href="stylesheets/general.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="stylesheets/forum_post.css">
</head>
<body>
    <div>
        <div class="header">
          <a href="homepage.php"
          ><div class="logo-image-container">
            <img class="logo-image" src="images/logo.png" /></div
        ></a>
            <div class="navigation-tabs">
              <a href="homepage.php"><div class="home-tab">
                <img class="home-tab-icon" src="images/home-icon.png" />
                <p>Home</p>
              </div></a>
              <a href="forum.php"><div class="forum-tab">
                <img class="forum-tab-icon" src="images/forum-icon.png" />
                <p>Forum</p>
              </div></a>
              <a href="faqpage.php"><div class="faq-tab">
                <img class="faq-tab-icon" src="images/faq-icon.png" />
                <p>FAQ</p>
              </div></a>
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
    </div>

    <div class="post_wrap">
    <p class="tekst">Postavite pitanje</p>
    <form action="scripts/postscript.php" method="post">
        <div class="forum_wrap">
            <input type="text" class="textBoxNaslov" name="postName" placeholder="Naslov teme">
            <textarea rows="10" class="textArea" name="postContent" cols="70" placeholder="Ovde pisete vase pitanje"></textarea>
            
            <input id="nedozvoljenoDelenjeSlika" type="checkbox" name="checkBoxTag[]" value="nedozvoljenoDelenjeSlika">Nedozvoljeno Delenje Slika

            <input id="pretnje" type="checkbox" name="checkBoxTag[]" value="pretnje">
            <label for="pretnje">Pretnje</label>

            <input id="vredjanje" type="checkbox" name="checkBoxTag[]" value="vredjanje">
            <label for="vredjanje">Vredjanje</label>

            <input id="instagram" type="checkbox" name="checkBoxTag[]" value="instagram">
            <label for="instagram">Instagram</label>

            <input id="facebook" type="checkbox" name="checkBoxTag[]" value="facebook">
            <label for="facebook">Facebook</label>

            <input id="viber" type="checkbox" name="checkBoxTag[]" value="viberWhatsapp">
            <label for="viber">Viber/Whatsapp</label>

            <input id="snapchat" type="checkbox" name="checkBoxTag[]" value="snapchat">
            <label for="snapchat">Snapchat</label>

            <input type="submit" class="submit_box" value="Postavi pitanje">
        </div>
            <div class="checkboxes">
            

            </div>
        
    </form>
    </div>
  
    <div class="footer">
        <div class="copyright-protection">
          <p class="copyright-protection-text">
            &#169; 2022 Flop&Go. All Rights Reserved
          </p>
        </div>
        <div class="about-us">
          <a href="aboutus.php"><p>About Us</p></a>
          <a href="contact.php"   ><p>Contact</p></a>
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