<!DOCTYPE html>
<html>

    <head>
        <title>Smarriga Recept</title>
        <meta charset="UTF-8" />
        <link rel="Stylesheet" type="text/css" href="css/reset.css">
        <link rel="Stylesheet" type="text/css" href="css/index.css">
    </head>

    <body>
        <div class="pageSetup">
            <div class="header">
                <div class="logo">
                    <a href="index.php?content=startsidan.html">
                        <img src="images/PlateIcon.jpg" alt="PlateIcon.jpg" />
                    </a>
                </div>
                <h1 id="webName">Smarriga Recept</h1>
                <h4 id="slogan"> - Rätterna man vill sätta tänderna i
                    <img src="images/Emoji_Smarrigt.jpg" alt="Emoji_Smarrigt.jpg" />
                </h4>
            </div>

            <ul class="meny">
                <li class="dropdown">
                    <a class="button" href="index.php?content=Kalender/November2017.html">Kalender</a>
                </li>
                <li class="dropdown">
                    <a class="button" href="index.php?content=Recept.html">Recept</a>
                    <ul class="dropdown-content">
                        <li class="dropdownInside">
                            <a href="index.php?content=Recipes/Köttbullar_med_Mos.html">Köttbullar med Mos</a>
                        </li>
                        <li class="dropdownInside">
                            <a href="index.php?content=Recipes/Vietnamesiska_Pannkakor.html">Vietnamesiska Pannkakor</a>
                        </li>
                        <li class="dropdownInside">
                            <a href="index.php?content=Recipes/Veganska_Bananpannkakor.html">Veganska Bananpannkakor</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="content">
            <?php 
                $pageToInclude = "startsidan.html";
                if (isset($_GET['content'])){
                    $pageToInclude = $_GET['content'];
                }
                echo file_get_contents($pageToInclude); 
            ?>
        </div>
        <div id="footer">
            <p>Vid fel på hemsidan kontakta: ksather@kth.se</p>
        </div>
    </body>

</html>