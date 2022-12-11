<?php
include 'scripts/connection.php';
    session_start();
    $userID = $_SESSION['userID'];

    $query = "select username from user where user_id = '$userID'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>

<html>
    <head>

    </head>

    <body>
        <form action="searchscript.php" method="post">
            <input id="nedozvoljenoDelenjeSlika" type="checkbox" name="checkBoxTag[]" value="nedozvoljenoDelenjeSlika">
            <label for="nedozvoljenoDelenjeSlika">Nedozvoljeno Delenje Slika</label>

            <input id="pretnje" type="checkbox" name="checkBoxTag[]" value="pretnje">
            <label for="pretnje">Pretnje</label>

            <input id="vredjanje" type="checkbox" name="checkBoxTag[]" value="vredjanje">
            <label for="vredjanje">vredjanje</label>

            <input id="instagram" type="checkbox" name="checkBoxTag[]" value="instagram">
            <label for="instagram">Instagram</label>

            <input id="facebook" type="checkbox" name="checkBoxTag[]" value="facebook">
            <label for="facebook">Facebook</label>

            <input id="viber" type="checkbox" name="checkBoxTag[]" value="viberWhatsapp">
            <label for="viber">Viber/Whatsapp</label>

            <input id="snapchat" type="checkbox" name="checkBoxTag[]" value="snapchat">
            <label for="snapchat">Snapchat</label>

            <button>Pretrazi</button>
        </form>        
    </body>
</html>