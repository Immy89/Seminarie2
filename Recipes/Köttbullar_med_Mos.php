<?php
    session_start();
    include('Functions.php');
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Köttbullar med Mos</title>
        <meta charset="UTF-8" />
        <link rel="Stylesheet" type="text/css" href="../css/recept.php">
    </head>

    <body>
        <div id="titel">
            <h2>Gräddkokta viltköttbullar och rårörda lingon med pepparrot</h2>
        </div>
        <div id="bild">
            <img src="../images/Köttbullar_med_mos.jpg" alt="Köttbullar_med_mos.jpg" />
        </div>
        <div id="ingredienser">
            <h3>Ingredienser:</h3>
            <h4 class="header4">Köttbullar:</h4>
            <ul>
                <li>300 g älgfärs</li>
                <li>100 g fläskfärs</li>
                <li>1 dl rivet vitt dygnsgammalt bröd</li>
                <li>2 dl mjölk</li>
                <li>2 msk riven gul lök</li>
                <li>smör till stekning</li>
                <li>1 tsk salt</li>
                <li>1 ägg</li>
                <li>1 krm quatre épices (nejlika, muskot, ingefära, peppar)</li>
                <li>3 dl grädde</li>
            </ul>
            <h4 class="header4">Rårörda Lingon:</h4>
            <ul>
                <li>2 dl lingon</li>
                <li>0,5 dl socker</li>
                <li>1 bit pepparrot, fint riven</li>
            </ul>
        </div>
        <div id="beskrivning">
            <h3>Så här gör du:</h3>
            <p>Blanda vitt bröd och mjölk, låt svälla i 5 minuter.</p>
            <p>Stek löken i lite smör och låt den svalna.</p>
            <p>Blanda färs och salt. Tillsätt mjölken med brödet, stekt lök, ägg och kryddor. Blanda allt till en jämn smet.</p>
            <p>Rulla köttbullar och stek dem i smör, bara precis så att de får en gyllenbrun färg. Låt dem gå färdigt i ugn,
                200-225 grader i 10-20 minuter, beroende på storlek.</p>
            <p>Lägg köttbullarna i en kastrull och täck med grädde, sjud 5 minuter så att grädden kokar in något.</p>
            <p>Rör lingonen med socker så att sockret löser sig, krydda med pepparrot.</p>
        </div>
        <div id="recensioner">
            <h3>Recensioner:</h3>
            <div id="SkapaRecensioner">
                <form action="SkapaRecension.php" method="POST">
                    <input type="hidden" name="receptId" value="2">
                    <input type="hidden" name="relocateTo" value="index.php?content=Recipes/Köttbullar_med_Mos.php">
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
                    fetchComments(2, 'index.php?content=Recipes/Köttbullar_med_Mos.php', $conn);
                    $conn->close();
                ?>
            </div>
        </div>
    </body>

</html>