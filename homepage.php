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
          <p class="info-title">??ta je online nasilje?</p>
          <p class="info-text">
            Nasilje na internetu je svaki oblik nasilja koje nastaje upotrebom
            digitalnih tehnologija. Mo??e se odvijati na dru??tvenim mre??ama,
            aplikacijama za razmenu poruka, gejming platformama i mobilnim
            telefonima. To je pona??anje koje se ponavlja i koje ima za cilj da
            upla??i, naljuti ili osramoti osobe koje su napadnute. Primeri
            digitalnog nasilja su: <br />
            <strong>&#183;</strong> ??irenje neistina ili objavljivanje sramotnih
            fotografija nekoga na dru??tvenim mre??ama <br />
            <strong>&#183;</strong> slanje pretnji preko platforme za razmenu
            poruka <br />
            <strong>&#183;</strong> la??no predstavljanje i slanje neprikladnih
            poruka drugima u tu??e ime. <br />Nasilje u??ivo i nasilje na
            internetu se ??esto mogu de??avati uporedo. Me??utim, nasilje na
            internetu ostavlja digitalni zapis koji mo??e da poslu??i kao dokaz
            prilikom njegovog zaustavljanja.
          </p>
        </div>
        <div class="info-box-section">
          <p class="info-title">
            Kako uo??iti da va??e dete trpi online nasilje?
          </p>
          <p class="info-text">
            Prema istra??ivanju 83% tinejd??era je iskusilo neku vrstu sajber
            maltretiranja. Zato je vrlo va??no prepoznati znake sajber
            maltretiranja. Neki od znakova da vase dete trpi online nasilje su:
            Iznenadni prestanak kori????enja kompjutera ili drugih elektronskih
            naprava iako je do skoro dete u??ivalo u istom Dete ne ??eli da
            koristi kompjuter, telefon ili sli??nu elektronsku napravu pred vama
            Ga??enje ekrana ili monitora kad prolazite u njegovoj blizini
            Nevoljni odlazak u ??kolu ili van??kolske aktivnosti Nervozno
            pona??anje kada primi instant poruku, tekstualnu poruku ili e-mail
            preko telefona ili ra??unara
          </p>
        </div>
        <div class="info-box-section">
          <p class="info-title">Koji su simptomi online nasilja?</p>
          <p class="info-text">
            Iskustva ljudi koji su se odva??ili da progovore o tome ??ta su
            do??iveli u onlajn prostoru pokazuju da napadi, iako virtuelni,
            ostavljaju itekako stvarne posledice. Ovakav vid nasilja prema
            tinejdzerima mo??e biti ??tetan kao i fizi??ko nasilje, i za posledicu
            imati stres, traumu, anksioznost, poreme??aje sna, depresiju i
            fizi??ki bol. Posledice digitalnog nasilja mogu uklju??iti i strah za
            sopstvenu bezbednost, u slu??aju organizovanog uznemiravanja i brzog
            i nekontrolisanog ??irenja ??tetnog sadr??aja, izolaciju, negativne
            posledice u dru??tvenom i poslovnom ??ivotu, ??ak i te??ke posledice
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
