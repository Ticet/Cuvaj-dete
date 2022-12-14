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
            <p>Naj??es??e postavljena pitanja</p>
            </div>
            <div class="faq-question">
                <details closed>
                    <summary class="pitanje">1. Da li sam ??rtva nasilja na internetu? Kako da razlikujem neslanu ??alu od nasilja?</summary>
                    <div class="odgovor">
                        <p>Svi prijatelji se me??usobno ??ale i zadirkuju, te je ponekad te??ko rec??i da li se neko samo zabavlja ili poku??ava da te povredi, pogotovo na internetu. Ponekad c??e uz ??alu napisati i ???samo se ??alim??? ili ???ne shvataj sve tako ozbiljno???.

                            Ako se osec??a?? povre??eno ili misli?? da se drugi smeju tebi umesto sa tobom, onda je ??ala oti??la predaleko. Ako se to nastavi i nakon ??to si od osobe tra??io/la da prestane sa takvim pona??anjem, i ako se i dalje ose??a?? uznemireno zbog toga, onda mo??emo da govorimo o nasilju.
                            
                            Kada se nasilje dogodi na internetu, ono mo??e da  pa??nju velikog broja ljudi ??? tebi i poznatih i nepoznatih.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">2. Koje su posledice digitalnog nasilja?</summary>
                    <div class="odgovor">
                        <p>Kada iskusi?? online nasilje,  mo??e?? se ose??ati kao da te svi napadaju, ??ak i unutar tvog doma. Mo??e da ti se ??ini kao da nema pomo??i. Posledice mogu da traju dugo i da na razli??ite na??ine uti??u na osobu:
                            <br><strong>&#183;</strong> Mentalno - osec??aj uznemirenosti, neprijatnosti, neadekvatnosti, ljutnje
                            <br><strong>&#183;</strong> Emocionalno - ose??aj srama ili gubitak interesovanja za stvari u kojima je osoba pre u??ivala
                            <br><strong>&#183;</strong> Fizi??ki - umor (gubitak sna) ili simptomi poput bolova u stomaku i glavobolje
                            <br><strong>&#183;</strong> Digitalno nasilje poja??ava stres i patnju u svakodnevnom ??ivotu. Izlo??enost digitalnom nasillju povezana je sa depresijom i niskim samopouzdanjem.
                            <br><strong>&#183;</strong> Digitalno nasilje mo??e da uti??e na nas na vi??e na??ina. Me??utim, ono se mo??e prevazic??i i osoba mo??e da povrati svoje samopouzdanje i zdravlje.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">3. Sa kim treba da razgovaram ako sam ??rtva nasilja na internetu?</summary>
                    <div class="odgovor">
                        <p>Ako misli?? da si ??rtva nasilja, prvi korak je da potra??i?? pomo?? od osobe kojoj veruje?? (roditelja, staratelja, bliskog ??lana porodice ili neke druge odrasle osobe).
                            U ??koli se mo??e?? obratiti psihologu ili pedagogu, kao i nastavniku ili profesoru kome veruje??.
                            Ukoliko ne ??eli?? da se obrati?? osobi koju poznaje??, pozovi besplatan broj 19833 (Nacionalni kontakt centar za bezbednost dece na internetu).
                            Ako se nasilje de??ava na dru??tvenoj mre??i, blokiraj nasilnika i prijavi nasilje toj dru??tvenoj mre??i. Kompanije moraju da ??tite svoje korisnike.
                            Moglo bi biti od pomo??i da sakupi?? dokaze ??? poruke i slike koje dokazuju da si bio/la izlo??en/a nasilju.
                            Ukoliko si u neposrednoj opasnosti, kontaktiraj policiju ili drugu hitnu slu??bu u Srbiji.
                            Pozovi besplatan broj 19833 i prijavi digitalno nasilje.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">4. Do??ivljavam nasilje na internetu, ali se bojim da pri??am sa roditeljima o tome. Kako da im ka??em za svoj problem?</summary>
                    <div class="odgovor">
                        <p>Ako si ??rtva nasilja, razgovor sa odraslom osobom kojoj veruje?? je prvi i najva??niji korak koji mo??e?? da napravi??.
                            Razgovor sa roditeljima nije uvek lak. Ali postoje neke stvari koje ti mogu pomo??i.
                            Izaberi vreme za razgovor kada zna?? da ima?? njihovu punu pa??nju i objasni koliko je problem sa kojim se suo??ava?? ozbiljan. Tvoji roditelji mo??da ne poznaju digitalne tehnologije toliko dobro kao ti, pa ??e?? morati da im detaljno objasni?? ??ta se doga??a.
                            Oni mo??da ne??e odmah imati re??enje, ali ??e sigurno ??eleti da pomognu i proba??e da, zajedno sa tobom, prona??u na??in da zaustave nasilje. Dve glave su uvek pametnije od jedne!
                            Ako jo?? uvek ne zna?? da li da se njima obrati?? ili ne, razmisli da se obrati?? drugim odraslim osobama kojima veruje??. Ima mnogo ljudi kojima je stalo do tebe i sigurno ??e ??eleti da ti pomognu.
                            </p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">5. Kako mogu da pomognem prijateljima da prijave nasilje, naro??ito ako se oni boje da ga sami prijave?</summary>
                    <div class="odgovor">
                        <p>Svako mo??e da postane ??rtva digitalnog nasilja. Ako vidi?? da se to doga??a nekome koga poznaje??, poku??aj da mu pru??i?? podr??ku.
                            Va??no je da saslu??a?? svoje prijatelje. Za??to ne ??ele da prijave da su ??rtve nasilja? Kako se osec??aju? Objasni im da ne moraju zvani??no da prijave nasilje, ali da je va??no da razgovaraju sa nekim ko bi mogao da im pomogne.
                            Tvoji prijatelji bi mogli da se ose??aju lo??e. Budi ljubazan/a i strpljiv/a prema njima. Pomozi im da razmisle ??ta bi mogli da ka??u i kome. Ponudi se da po??e?? sa njima ako odlu??e da prijave nasilje. Najbitnije je da ih podseti?? da si tu zbog njih i da ??eli?? da im pomogne??.
                            Ako tvoji prijatelji i dalje ne ??ele da prijave nasilje, podr??i ih u pronala??enju odrasle osobe kojoj mo??ete da se poverite. Imajte na umu da u odre??enim situacijama posledice sajber-nasilja mogu da budu opasne po ??ivot.
                            Ako ni??ta ne preduzme??, osoba se mo??e ose??ati kao da su svi protiv njega/nje ili da nikoga nije briga. Tvoje re??i mogu da naprave razliku.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">6. Internet mi omogu??ava pristup raznim informacijama, ali me i izla??e mogu??em nasilju. Kako da zaustavimo nasilje, a da nastavimo da koristimo digitalne tehnologije?</summary>
                    <div class="odgovor">
                        <p>Biti umre??en ima mnogo prednosti. Me??utim, uvek postoji i rizik od kog treba da se za??titi??.
                            Ako nai??e?? na nasilje na internetu, mo??da c??e?? po??eleti da izbri??e?? odre??ene aplikacije ili ostane?? neko vreme van mre??a da bi sebi dao/la vreme za oporavak. Ali odlazak sa interneta nije dugoro??no re??enje. Nisi u??inio/la ni??ta lo??e, pa za??to bi bio/la uskra??en/a? Mo??da ??ak na taj na??in ??alje?? nasilnicima pogre??nu poruku - ohrabruje?? njihovo neprihvatljivo pona??anje.
                            Svi ??elimo da zaustavimo digitalno nasilje, ??to je i jedan od razloga zbog kog je prijavljivanje nasilja izuzetno va??no. Ali stvaranje interneta koji ??elimo ??elimo, prevazilazi puko prijavljivanje nasilja.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">7. Kako da spre??im da neko zloupotrebi moje li??ne podatke na internetu?</summary>
                    <div class="odgovor">
                        <p>Dobro razmisli pre nego ??to objavi?? ili podeli?? bilo ??ta na dru??tvenim mre??ama - jer to mo??e ostati zauvek na internetu i neko mo??e kasnije da zloupotrebi te podatke. Nemoj davati li??ne podatke kao ??to su adresa, telefonski broj ili ime ??kole.
                            Na ve??ini dru??tvenih mre??a mo??e?? da:
                            <br><strong>&#183;</strong> kroz pode??avanje postavki privatnosti naloga odabere?? ko mo??e da vidi tvoj profil, da ti ??alje direktne poruke ili komentari??e postove.
                            <br><strong>&#183;</strong> prijavi?? ??tetne komentare, poruke i fotografije i zatra??i?? njihovo uklanjanje.
                            <br><strong>&#183;</strong> potpuno blokira?? ljude ??? ne??e mo??i da vide tvoj profil, niti da te ponovo kontaktiraju.
                            <br><strong>&#183;</strong> odabere?? da se komentari odre??enih ljudi pojavljuju samo njima.
                            <br><strong>&#183;</strong> obri??e?? postove na svom profilu ili da ih sakrije?? od odre??enih ljudi.
                            <br>Na vec??ini dru??tvenih mre??a, osobe koje blokira?? ne??e dobiti obave??tenje da si to uradio/la.</p>
                    </div>
                </details>
                <details closed>
                    <summary class="pitanje">8. Da li postoji kazna za digitalno nasilje?</summary>
                    <div class="odgovor">
                        <p>Vec??ina ??kola ozbiljno shvata nasilje na internetu i pokrenuc??e postupak protiv njega. Ako te drugi u??enici vre??aju ili maltretiraju u digitalnom prostoru, prijavi nasilje svojoj ??koli.
                            Ljudi koji su ??rtve bilo kog oblika nasilja, uklju??ujuc??i ono koje se odigrava na internetu, imaju pravo na pravdu i da nasilnik odgovara za krivi??no delo.
                            Zakoni protiv nasilja, posebno digitalnog, su jo?? uvek novina i ne postoje u svim dr??avama. Zbog toga se mnoge zemlje oslanjaju na druge relevantne zakone, poput zakona protiv uznemiravanja, kako bi ka??njavali nasilje u digitalnom prostoru.
                            U nekim zemljama koje imaju posebne zakone o nasilju putem interneta, ??rtve mogu da tra??e za??titu, zabrane komunikaciju sa odre??enom osobom i, privremeno ili trajno, ograni??e upotrebu elektronskih ure??aja koje ta osoba koristi za vr??enje nasilja.
                            Me??utim, va??no je zapamtiti da ka??njavanje nije uvek najefikasniji na??in za promenu pona??anja nasilnika. ??esto je bolje usredsrediti se na popravljanje ??tete i popravljanje odnosa.</p>
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
