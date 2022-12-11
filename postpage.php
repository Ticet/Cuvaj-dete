<?php
    session_start();
    $userID = $_SESSION['userID'];

?>

<html>
    <head>

    </head>

    <body>
        <form action="postscript.php" method="post">
            <p>Naziv objave</p>
            <input type="text" name="postName"><br><br>

            <p>Tekst</p>
            <textarea name="postContent"></textarea><br><br>
            
            <input id="nedozvoljenoDelenjeSlika" type="checkbox" name="checkBoxTag[]" value="nedozvoljenoDelenjeSlika">
            <label for="nedozvoljenoDelenjeSlika">Nedozvoljeno Delenje Slika</label>

            <input id="pretnje" type="checkbox" name="checkBoxTag[]" value="pretnje">
            <label for="pretnje">Pretnje</label>

            <input id="vredjanje" type="checkbox" name="checkBoxTag[]" value="vredjanje">
            <label for="nedozvoljenoDelenjeSlika">Nedozvoljeno Delenje Slika</label>

            <input id="instagram" type="checkbox" name="checkBoxTag[]" value="instagram">
            <label for="instagram">Instagram</label>

            <input id="facebook" type="checkbox" name="checkBoxTag[]" value="facebook">
            <label for="facebook">Facebook</label>

            <input id="viber" type="checkbox" name="checkBoxTag[]" value="viberWhatsapp">
            <label for="viber">Viber/Whatsapp</label>

            <input id="snapchat" type="checkbox" name="checkBoxTag[]" value="snapchat">
            <label for="snapchat">Snapchat</label>

            <br><button type="submit">Postavi</button>
        </form>
    </body>

</html>