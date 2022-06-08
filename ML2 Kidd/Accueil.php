
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
        <?php include "kidd.php";?>
            <nav>
           
                <ul>
                    <li><a class="accueil" href="accueil.php">Accueil</a></li>
                    <li><a href="presentation.php">Présentation</a></li>
                    <li class="deroulant"><a href="sport.php">Sport</a>
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
                <ul class="image_logo">
                    <!-- <li>  <img class="" src="images/logo.png" width="115">Lorraine</li> -->
                </ul>
            </nav>
        </header>
        <section class="sec-accueil">
            <img class="image_fond" src="images/fond10.jpg" alt="">
            <h1 class="title2">La Maison des Ligues de Lorraine</h1>
            <h3 class="title3">Bienvenue sur le site de la maison des ligues de Lorraine</h3>
            <p class="paragraphe">La Maison des Ligues de Lorraine (M2L) a pour mission de fournir des espaces et des services aux différentes ligues sportives régionales de Lorraine et à d’autres structures hébergées. La M2L est une structure financée par le Conseil Régional de Lorraine dont l'administration est déléguée au Comité Régional Olympique et Sportif de Lorraine (CROSL). Installée depuis 2003 dans la banlieue Nancéienne, la M2L accueille l'ensemble du mouvement sportif Lorrain qui représente près de 6 500 clubs,<br> plus de 525 000 licenciés et près de 50 000 bénévoles.</p>

            <p>Véritable lieu de vie, cette Maison propose aux Ligues et Comités, des locaux fonctionnels situés à l’est de Nancy, permettant ainsi aux dirigeants, aux bénévoles et aux salariés d’échanger, de partager, de se former et de se regrouper dans des conditions optimales.</p>
            <p>Ce sont ici plus de 3 550 clubs lorrains, toutes disciplines confondues, qui bénéficient de cet outil. Un tel établissement est à la fois un facteur fort de cohésion et de qualité du sport régional. Il a pour vocation d’héberger les structures sportives régionales, de leur fournir des services administratifs, comptables et juridiques. Entièrement financée par la région Lorraine, la Maison Régionale des Sports de Lorraine est gérée en partenariat par la région Lorraine et le Comité Régional Olympique et Sportif de Lorraine (CROSL) qui est l’initiateur d’une politique sportive régionale unitaire.</p>
        </section>
        <section class="sec-sport">
           <div class="image_sport">
               <div>
                    <img src="Images/foot.png" width="130" alt="">
                    <p><a class="liens_sport" href="https://lgef.fff.fr/competitions/">Football</a></p>
               </div>

              <div>
                    <img src="Images/cylclisme.png" width="170" alt="">
                    <p><a class="liens_sport"  href="http://www.grandestcyclisme.fr/">Cyclisme</a></p>
              </div>

               <div>
                    <img src="Images/Tennis.png" width="130" alt="">
                    <p><a class="liens_sport"  href="https://www.ligue-grandest-fft.fr/">Tennis</a></p>
               </div>
               
               <div>
                    <img src="Images/judo.png" width="170" alt="">
                    <p><a class="liens_sport"  href="https://www.judograndest.fr/">Judo</a></p>
               </div>
               
               <div>
                    <img src="Images/natation.png" width="170" alt="">
                    <p><a class="liens_sport"  href="https://grandest.ffnatation.fr/script/index.php">Natation</a></p>
               </div>
           </div>
        </section>
        <footer>
            <div>
                <a href="accueil.php">Accueil</a> <a href="contact.php">Contact</a>
            </div>
            <p>Copyright © 2021 Maison de Ligues Kidd (M2L ) - Tous droits réservés.</p>
        </footer>
    </div>
</body>
</html>