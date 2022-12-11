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
<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="stylesheets/general.css" />
    <link rel="stylesheet" href="stylesheets/header.css" />
    <link rel="stylesheet" href="stylesheets/content.css" />
    <link rel="stylesheet" href="stylesheets/footer.css" />
    <link rel="icon" href="favicon.png" type="image/png" />
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
          <p class="info-title">Šta je online nasilje?</p>
          <p class="info-text">
            Nasilje na internetu je svaki oblik nasilja koje nastaje upotrebom
            digitalnih tehnologija. Može se odvijati na društvenim mrežama,
            aplikacijama za razmenu poruka, gejming platformama i mobilnim
            telefonima. To je ponašanje koje se ponavlja i koje ima za cilj da
            uplaši, naljuti ili osramoti osobe koje su napadnute. Primeri
            digitalnog nasilja su: <br />
            <strong>&#183;</strong> širenje neistina ili objavljivanje sramotnih
            fotografija nekoga na društvenim mrežama <br />
            <strong>&#183;</strong> slanje pretnji preko platforme za razmenu
            poruka <br />
            <strong>&#183;</strong> lažno predstavljanje i slanje neprikladnih
            poruka drugima u tuđe ime. <br />Nasilje uživo i nasilje na
            internetu se često mogu dešavati uporedo. Međutim, nasilje na
            internetu ostavlja digitalni zapis koji može da posluži kao dokaz
            prilikom njegovog zaustavljanja.
          </p>
        </div>
        <div class="info-box-section">
          <p class="info-title">
            Kako uočiti da vaše dete trpi online nasilje?
          </p>
          <p class="info-text">
            Prema istraživanju 83% tinejdžera je iskusilo neku vrstu sajber
            maltretiranja. Zato je vrlo važno prepoznati znake sajber
            maltretiranja. Neki od znakova da vase dete trpi online nasilje su:
            Iznenadni prestanak korišćenja kompjutera ili drugih elektronskih
            naprava iako je do skoro dete uživalo u istom Dete ne želi da
            koristi kompjuter, telefon ili sličnu elektronsku napravu pred vama
            Gašenje ekrana ili monitora kad prolazite u njegovoj blizini
            Nevoljni odlazak u školu ili vanškolske aktivnosti Nervozno
            ponašanje kada primi instant poruku, tekstualnu poruku ili e-mail
            preko telefona ili računara
          </p>
        </div>
        <div class="info-box-section">
          <p class="info-title">Koji su simptomi online nasilja?</p>
          <p class="info-text">
            Iskustva ljudi koji su se odvažili da progovore o tome šta su
            doživeli u onlajn prostoru pokazuju da napadi, iako virtuelni,
            ostavljaju itekako stvarne posledice. Ovakav vid nasilja prema
            tinejdzerima može biti štetan kao i fizičko nasilje, i za posledicu
            imati stres, traumu, anksioznost, poremećaje sna, depresiju i
            fizički bol. Posledice digitalnog nasilja mogu uključiti i strah za
            sopstvenu bezbednost, u slučaju organizovanog uznemiravanja i brzog
            i nekontrolisanog širenja štetnog sadržaja, izolaciju, negativne
            posledice u društvenom i poslovnom životu, čak i teške posledice
            poput samoubistva. Takodje moze doci do iznenadnih napada besa ili
            depresije i gubitka ili dobitka telesne tezine.
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
