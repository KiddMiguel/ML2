<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title>Accueil</title>
</head>
<body>
    <div>
        <header> 
        <h1 class="title"><a href="accueil.php">M2L</a></h1>
            <nav>
             
                <ul>
                    <li><a class="accueil" href="accueil.php">Accueil</a></li>
                    <li><a href="presentation_locaux.php">Présentation</a></li>
                    <li class="deroulant"><a href="#">Sport</a>
                        <ul class="sous">
                        <li><a href="https://lgef.fff.fr/competitions/">Football</a></li>
                            <li><a href="http://www.grandestcyclisme.fr/">Cyclisme</a></li>
                            <li><a href="https://www.judograndest.fr/">Judo</a></li>
                            <li><a href="https://www.ligue-grandest-fft.fr/">Tennis</a></li>
                            <li><a href="https://grandest.ffnatation.fr/script/index.php">Natation</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Offre d'emploi</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <?php include "kidd.php";?>
            </nav>
        </header>
        <section class="sec-accueil">
            <h1 class="title2">La Maison des Ligues de Lorraine</h1>
            <h3 class="title3">Bienvenue sur le site de la maison des ligues de Lorraine</h3>
            <p>La Maison des Ligues de Lorraine (M2L) a pour mission de fournir des espaces et des services aux différentes ligues sportives régionales de<br> Lorraine et à d’autres structures hébergées. La M2L est une structure financée par le Conseil Régional de Lorraine dont l'administration est<br> déléguée au Comité Régional Olympique et Sportif de Lorraine (CROSL). Installée depuis 2003 dans la banlieue Nancéienne, la M2L<br> accueille l'ensemble du mouvement sportif Lorrain qui représente près de 6 500 clubs, plus de 525 000 licenciés et près de 50 000<br> bénévoles.</p>
        </section>
     
    </div>
</body>
</html>