<?php
    session_start();
    include('Functions.php');
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Veganska Bananpannkakor</title>
        <meta charset="UTF-8" />
        <link rel="Stylesheet" type="text/css" href="../css/recept.php">
        <link rel="Stylesheet" type="text/css" href="../css/functions.css">
    </head>

    <body>
        <div id="title">
            <h2>Veganska Bananpannkakor</h2>
        </div>
        <div id="bild">
            <img src="../images/Veganska_Bananpankakor.jpg" alt="Veganska_Bananpankakor.jpg" />
        </div>
        <div id="ingredienser">
            <h3>Ingredienser:</h3>
            <h4 class="header4">Pannkakor:</h4>
            <ul>
                <li>4 mogna bananer</li>
                <li>6 dl havregryn</li>
                <li>1 msk kokosolja</li>
                <li>3 tsk bakpulver</li>
                <li>2 dl havremjölk</li>
                <li>lite kardemumma</li>
                <li>1 krm vaniljpulver</li>
                <li>en nypa havssalt</li>
            </ul>
            <h4 class="header4">Kakaokräm:</h4>
            <ul>
                <li>Kakao</li>
                <li>Agave</li>
                <li>Kokosolja</li>
            </ul>
            <h4 class="header4">Topping:</h4>
            <ul>
                <li>Kakaokräm</li>
                <li>Blåbär</li>
                <li>Hallon</li>
                <li>Skivade Bananer</li>
            </ul>
        </div>
        <div id="beskrivning">
            <h3>Så här gör du:</h3>
            <p>Mixa havregrynen till ett mjöl i en matberedare.</p>
            <p>Lägg sedan ner resten och mixa ihop till en smet.</p>
            <p>Låt det stå i ca 10 min och stek sedan i kokosolja.</p>
            <p>Blanda ihop ingredienserna för kakaokrämen och avnjut sedan med toppingen.</p>
        </div>
        <div id="recensioner">
            <h3>Recensioner:</h3>
            <div id="SkapaRecensioner">
                <form action="SkapaRecension.php" method="POST">
                    <input type="hidden" name="receptId" value="1">
                    <input type="hidden" name="relocateTo" value="index.php?content=Recipes/Veganska_Bananpannkakor.php">
                    <div class="container">
                        <label>
                            <b>Kommentar</b>
                        </label>
                        <textarea placeholder="Kommentar" name="kommentar" required></textarea>
                        <button type="submit">Publicera</button>
                    </div>
                </form>
            </div>
            <div id="InlästaRecensioner">
                <?php
                    $conn = connectToDatabase();
                    fetchComments(1, 'index.php?content=Recipes/Veganska_Bananpannkakor.php', $conn);
                    $conn->close();
                ?>
            </div>
        </div>
    </body>

</html>