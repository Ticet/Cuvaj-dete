<?php
error_reporting(0);
include 'scripts/connection.php';
    session_start();
    $userID = $_SESSION['userID'];

    $query = "select username from user where user_id = '$userID'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>O nama</title>
    <link rel="stylesheet" href="stylesheets/general.css" />
    <link rel="stylesheet" href="stylesheets/header.css" />
    <link rel="stylesheet" href="stylesheets/content.css" />
    <link rel="stylesheet" href="stylesheets/footer.css" />
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

    <div class="page-content">
      <div></div>
      <div class="info-box">
        <div class="info-box-section">
          <p class="info-title">O nama</p>
          <p class="info-text">
            Kompanija Flop&Go d.o.o. počinje sa radom 2022. godine i od tada
            doživljava konstantan rast. Uspešnim i kvalitetnim poslovanjem,
            posvećenošću korisnicima i stalnim inovacijama postala je
            zastupljeno ime na tržištu Srbije u oblasti prevencije nasilja. Nase
            vrednosti su znanje, entuzijazam, inovativnost, odgovornost,
            nesebično deljenje postojećeg i jaka motivacija za usvajanje novih
            znanja. Motivisani smo za stalno pronalaženje i usvajanje novih, ne
            bojimo se da svoja već stečena znanja nesebično delimo sa svima.
          </p>
        </div>
        <div class="info-box-section">
          <p class="info-title">Sta je nas cilj?</p>
          <p class="info-text">
            Nas cilj je da pomognemo sto vise dece i odraslih na prostoru Srbije
            koji se bore protiv online nasilja koje je danas zastupljeno cesto.
            Mnoga deca se plase da pricaju o svojim problemima i zato smo mi tu
            kako bismo im pomogli da prevazidju te probleme i osecaju se
            zasticemo.
          </p>
        </div>
      </div>
      <div></div>
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
