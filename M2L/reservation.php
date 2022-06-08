<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title>Presentation</title>
</head>
<body>
    <div>
        <header> 
        <h1 class="title"><a href="accueil.php">M2L</a></h1>
            <nav>
             
            <ul>
                    <li><a  href="accueil.php">Accueil</a></li>
                    <li><a class="presentation" href="presentation_locaux.php">Présentation</a></li>
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
        <section>
            <nav>
                <ul class="ul_sous">
                    <li><a  href="presentation_locaux.php">Locaux</a></li>
                    <li><a href="personnels.php">Personnels</a></li>
                    <li><a href="materiaux.php">Matériaux</a></li>
                    <li><a class="reserve" href="reservation.php">Reservation de salle</a></li>
                    <li><a href="contact.php">Services</a></li>
                </ul>
            </nav>
        </section>
        <section class="sec-reserve">
            <h1>Reservation de salle</h1>
            
            <h3> COMMENT FONCTIONNE LE SYSTÈME DE RÉSERVATION DES SALLES RESSOURCES, COMME LES SALLES DE RÉUNIONS, L’AMPHITHÉÂTRE OU ENCORE LA NOUVELLE SALLE DE CONVIVIALITÉ ?</h3>
            <p>
                Concernant l’amphi, il y a ½ journée gratuite par an pour chaque ligue et comité départemental (CD). Les salles de réunions d’étage sont mises librement à la disposition des occupants de l’étage. 
                Les salles de réunions sont réservables via l’Intranet, avec différents services associés dont certains sont payants. Il existe quatre niveaux de tarification. En 2009, nous avons reçu 2732 réunions et 47316 personnes ont assisté à ces réunions.
            </p>
            <h3>QUELS SONT CES NIVEAUX DE TARIFICATION ? </h3>
            <p>
            Les ligues peuvent réserver sans payer jusqu’à concurrence de six réservations par an, hors amphi. Les clubs sportifs et les comités départementaux ont un premier niveau de tarification. Les associations, les lycées ou encore les collèges sont sur un second 
            niveau de tarification. Enfin, tous les autres organismes, y compris des sociétés privées, sont sur le niveau de tarification le plus haut. Pour toutes les structures qui ne sont pas hébergées, les locaux étant publics, il faut faire signer entre les parties une 
            « convention d’occupation temporaire ». La réservation se fait dans l’Intranet directement pour les structures hébergées ou par le secrétariat pour une demande extérieure. Les informations sont ensuite transmises au Conseil Régional qui émet un « titre de paiement », 
            c’est-à-dire une facture d’occupation de locaux. Ces titres sont envoyés directement par le Conseil Régional aux utilisateurs.    
            </p>
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