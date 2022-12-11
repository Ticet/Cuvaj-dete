<?php
    include 'scripts/connection.php';
    include 'scripts/displaypostscript.php';
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
    <link rel="stylesheet" href="stylesheets/header.css" />
    <link rel="icon" href="images/favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="stylesheets/general.css">
    <link rel="stylesheet" href="stylesheets/footer.css">
  </head>

  <body>
    <div style="position: absolute; left: 20px; top: 30%; width: 15%; font-family: Poppins,Arial;">
      <form action="scripts/searchscript.php" method="post">          
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
        <a href="homepage.php"><img class="logo-image" src="images/logo.png" /></a>
      </div>
      <div class="navigation-tabs">
        <a href="homepage.php"
          ><div class="home-tab">
            <img class="home-tab-icon" src="images/home-icon.png" />
            <p>Pocetna</p>
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
            <p>Pitanja</p>
          </div></a
        >
        <?php if(!$userID) { ?>
        <a href="login.html"
          ><div class="login-tab">
            <img class="login-tab-icon" src="images/login-icon.png" />
            <p>Uloguj se</p>
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

    <div class="create-post-button-container">
      <div></div>
      <div>
        <?php if($userID) { ?>
        <a href="forumcreatepost.php"><button class="create-post-button">Kreiraj post</button></a>
        <?php } else { ?>
        <a href="login.html"><button class="create-post-button">Kreiraj post</button></a>   
        <?php } ?>
      </div>
    </div>
  <div>
    <?php displayPosts($userID);?>

  </div>


  <div class="footer">
    <div class="copyright-protection">
      <p class="copyright-protection-text">
        &#169; 2022 Flop&Go. All Rights Reserved
      </p>
    </div>
    <div class="about-us">
      <a href="aboutus.php"><p>O nama</p></a>
      <a href="contact.php"><p>Kontakt</p></a>
      <a href="staff.php"><p>Zaposleni</p></a>
    </div>
    <div class="social-media">
      <p class="social-media-text">Mreze</p>
      <div class="social-media-icons">
        <img
          class="social-media-icon-image"
          src="images/instagram.png"
        />
        <img class="social-media-icon-image" src="images/twitter.png" />
        <img
          class="social-media-icon-image"
          src="images/facebook.png"
        />
      </div>
    </div>
  </div>

  </body>
</html>