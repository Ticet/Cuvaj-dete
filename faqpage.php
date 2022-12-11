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
    <title>FAQ</title>
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
        <a href="homepage.php"><div class="home-tab">
          <img class="home-tab-icon" src="images/home-icon.png" />
          <p>Pocetna</p>
        </div></a>
        <a href="forum.php"><div class="forum-tab">
          <img class="forum-tab-icon" src="images/forum-icon.png" />
          <p>Forum</p>
        </div></a>
        <a href="faqpage.php"><div class="faq-tab">
          <img class="faq-tab-icon" src="images/faq-icon.png" />
          <p>Pitanja</p>
        </div></a>
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
      <div class="faq-content">
            <div class="faq-title">
            <p>Najčesće postavljena pitanja</p>
            </div>
            <div class="faq-question">
                <details closed>
                    <summary class="pitanje">1. Da li sam žrtva nasilja na internetu? Kako da razlikujem neslanu šalu od nasilja?</summary>
                    <div class="odgovor">
                        <p>Svi prijatelji se međusobno šale i zadirkuju, te je ponekad teško reći da li se neko samo zabavlja ili pokušava da te povredi, pogotovo na internetu. Ponekad će uz šalu napisati i „samo se šalim“ ili „ne shvataj sve tako ozbiljno“.

                            Ako se osećaš povređeno ili misliš da se drugi smeju tebi umesto sa tobom, onda je šala otišla predaleko. Ako se to nastavi i nakon što si od osobe tražio/la da prestane sa takvim ponašanjem, i ako se i dalje osećaš uznemireno zbog toga, onda možemo da govorimo o nasilju.
                            
                            Kada se nasilje dogodi na internetu, ono može da  pažnju velikog broja ljudi – tebi i poznatih i nepoznatih.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">2. Koje su posledice digitalnog nasilja?</summary>
                    <div class="odgovor">
                        <p>Kada iskusiš online nasilje,  možeš se osećati kao da te svi napadaju, čak i unutar tvog doma. Može da ti se čini kao da nema pomoći. Posledice mogu da traju dugo i da na različite načine utiču na osobu:
                            <br><strong>&#183;</strong> Mentalno - osećaj uznemirenosti, neprijatnosti, neadekvatnosti, ljutnje
                            <br><strong>&#183;</strong> Emocionalno - osećaj srama ili gubitak interesovanja za stvari u kojima je osoba pre uživala
                            <br><strong>&#183;</strong> Fizički - umor (gubitak sna) ili simptomi poput bolova u stomaku i glavobolje
                            <br><strong>&#183;</strong> Digitalno nasilje pojačava stres i patnju u svakodnevnom životu. Izloženost digitalnom nasillju povezana je sa depresijom i niskim samopouzdanjem.
                            <br><strong>&#183;</strong> Digitalno nasilje može da utiče na nas na više načina. Međutim, ono se može prevazići i osoba može da povrati svoje samopouzdanje i zdravlje.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">3. Sa kim treba da razgovaram ako sam žrtva nasilja na internetu?</summary>
                    <div class="odgovor">
                        <p>Ako misliš da si žrtva nasilja, prvi korak je da potražiš pomoć od osobe kojoj veruješ (roditelja, staratelja, bliskog člana porodice ili neke druge odrasle osobe).
                            U školi se možeš obratiti psihologu ili pedagogu, kao i nastavniku ili profesoru kome veruješ.
                            Ukoliko ne želiš da se obratiš osobi koju poznaješ, pozovi besplatan broj 19833 (Nacionalni kontakt centar za bezbednost dece na internetu).
                            Ako se nasilje dešava na društvenoj mreži, blokiraj nasilnika i prijavi nasilje toj društvenoj mreži. Kompanije moraju da štite svoje korisnike.
                            Moglo bi biti od pomoći da sakupiš dokaze – poruke i slike koje dokazuju da si bio/la izložen/a nasilju.
                            Ukoliko si u neposrednoj opasnosti, kontaktiraj policiju ili drugu hitnu službu u Srbiji.
                            Pozovi besplatan broj 19833 i prijavi digitalno nasilje.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">4. Doživljavam nasilje na internetu, ali se bojim da pričam sa roditeljima o tome. Kako da im kažem za svoj problem?</summary>
                    <div class="odgovor">
                        <p>Ako si žrtva nasilja, razgovor sa odraslom osobom kojoj veruješ je prvi i najvažniji korak koji možeš da napraviš.
                            Razgovor sa roditeljima nije uvek lak. Ali postoje neke stvari koje ti mogu pomoći.
                            Izaberi vreme za razgovor kada znaš da imaš njihovu punu pažnju i objasni koliko je problem sa kojim se suočavaš ozbiljan. Tvoji roditelji možda ne poznaju digitalne tehnologije toliko dobro kao ti, pa ćeš morati da im detaljno objasniš šta se događa.
                            Oni možda neće odmah imati rešenje, ali će sigurno želeti da pomognu i probaće da, zajedno sa tobom, pronađu način da zaustave nasilje. Dve glave su uvek pametnije od jedne!
                            Ako još uvek ne znaš da li da se njima obratiš ili ne, razmisli da se obratiš drugim odraslim osobama kojima veruješ. Ima mnogo ljudi kojima je stalo do tebe i sigurno će želeti da ti pomognu.
                            </p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">5. Kako mogu da pomognem prijateljima da prijave nasilje, naročito ako se oni boje da ga sami prijave?</summary>
                    <div class="odgovor">
                        <p>Svako može da postane žrtva digitalnog nasilja. Ako vidiš da se to događa nekome koga poznaješ, pokušaj da mu pružiš podršku.
                            Važno je da saslušaš svoje prijatelje. Zašto ne žele da prijave da su žrtve nasilja? Kako se osećaju? Objasni im da ne moraju zvanično da prijave nasilje, ali da je važno da razgovaraju sa nekim ko bi mogao da im pomogne.
                            Tvoji prijatelji bi mogli da se osećaju loše. Budi ljubazan/a i strpljiv/a prema njima. Pomozi im da razmisle šta bi mogli da kažu i kome. Ponudi se da pođeš sa njima ako odluče da prijave nasilje. Najbitnije je da ih podsetiš da si tu zbog njih i da želiš da im pomogneš.
                            Ako tvoji prijatelji i dalje ne žele da prijave nasilje, podrži ih u pronalaženju odrasle osobe kojoj možete da se poverite. Imajte na umu da u određenim situacijama posledice sajber-nasilja mogu da budu opasne po život.
                            Ako ništa ne preduzmeš, osoba se može osećati kao da su svi protiv njega/nje ili da nikoga nije briga. Tvoje reči mogu da naprave razliku.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">6. Internet mi omogućava pristup raznim informacijama, ali me i izlaže mogućem nasilju. Kako da zaustavimo nasilje, a da nastavimo da koristimo digitalne tehnologije?</summary>
                    <div class="odgovor">
                        <p>Biti umrežen ima mnogo prednosti. Međutim, uvek postoji i rizik od kog treba da se zaštitiš.
                            Ako naiđeš na nasilje na internetu, možda ćeš poželeti da izbrišeš određene aplikacije ili ostaneš neko vreme van mreža da bi sebi dao/la vreme za oporavak. Ali odlazak sa interneta nije dugoročno rešenje. Nisi učinio/la ništa loše, pa zašto bi bio/la uskraćen/a? Možda čak na taj način šalješ nasilnicima pogrešnu poruku - ohrabruješ njihovo neprihvatljivo ponašanje.
                            Svi želimo da zaustavimo digitalno nasilje, što je i jedan od razloga zbog kog je prijavljivanje nasilja izuzetno važno. Ali stvaranje interneta koji želimo želimo, prevazilazi puko prijavljivanje nasilja.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">7. Kako da sprečim da neko zloupotrebi moje lične podatke na internetu?</summary>
                    <div class="odgovor">
                        <p>Dobro razmisli pre nego što objaviš ili podeliš bilo šta na društvenim mrežama - jer to može ostati zauvek na internetu i neko može kasnije da zloupotrebi te podatke. Nemoj davati lične podatke kao što su adresa, telefonski broj ili ime škole.
                            Na većini društvenih mreža možeš da:
                            <br><strong>&#183;</strong> kroz podešavanje postavki privatnosti naloga odabereš ko može da vidi tvoj profil, da ti šalje direktne poruke ili komentariše postove.
                            <br><strong>&#183;</strong> prijaviš štetne komentare, poruke i fotografije i zatražiš njihovo uklanjanje.
                            <br><strong>&#183;</strong> potpuno blokiraš ljude – neće moći da vide tvoj profil, niti da te ponovo kontaktiraju.
                            <br><strong>&#183;</strong> odabereš da se komentari određenih ljudi pojavljuju samo njima.
                            <br><strong>&#183;</strong> obrišeš postove na svom profilu ili da ih sakriješ od određenih ljudi.
                            <br>Na većini društvenih mreža, osobe koje blokiraš neće dobiti obaveštenje da si to uradio/la.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">8. Da li postoji kazna za digitalno nasilje?</summary>
                    <div class="odgovor">
                        <p>Većina škola ozbiljno shvata nasilje na internetu i pokrenuće postupak protiv njega. Ako te drugi učenici vređaju ili maltretiraju u digitalnom prostoru, prijavi nasilje svojoj školi.
                            Ljudi koji su žrtve bilo kog oblika nasilja, uključujući ono koje se odigrava na internetu, imaju pravo na pravdu i da nasilnik odgovara za krivično delo.
                            Zakoni protiv nasilja, posebno digitalnog, su još uvek novina i ne postoje u svim državama. Zbog toga se mnoge zemlje oslanjaju na druge relevantne zakone, poput zakona protiv uznemiravanja, kako bi kažnjavali nasilje u digitalnom prostoru.
                            U nekim zemljama koje imaju posebne zakone o nasilju putem interneta, žrtve mogu da traže zaštitu, zabrane komunikaciju sa određenom osobom i, privremeno ili trajno, ograniče upotrebu elektronskih uređaja koje ta osoba koristi za vršenje nasilja.
                            Međutim, važno je zapamtiti da kažnjavanje nije uvek najefikasniji način za promenu ponašanja nasilnika. Često je bolje usredsrediti se na popravljanje štete i popravljanje odnosa.</p>
                    </div>
                </details> 
            </div>
        </div>
        <div></div>
      </div>
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
        <p class="social-media-text">Mreza</p>
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
