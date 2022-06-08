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
        <?php include "kidd.php";?>
            <nav>
                <ul>
                    <li><a  href="accueil.php">Accueil</a></li>
                    <li><a class="presentation" href="presentation.php">Présentation</a></li>
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
                <ul class="ul_sous">
                    <li><a class="presentation" href="presentation.php">Locaux</a></li>
                    <li><a href="personnel.php">Personnels</a></li>
                    <li><a href="equipement.php">Equipements</a></li>
                    <li><a href="#">Reservation</a></li>
                    <li><a href="Service.php">Services</a></li>
                </ul>
            </nav>
        </header>
        <div class="div-presentation_locaux">
        <section class="sec-presentation_locaux">
            <!-- <img class="images_bat" src="images/bat.jpg" > -->
        <h1>Locaux</h1>
            <p>Le site se compose de quatre bâtiments, dont deux dotés de quatre étages et donc de 5 niveaux 
                (les bâtiments A et C) et deux de plain-pied (les bâtiments B et D) dotés d’un seul rez-de-chaussée. Les bâtiments C et D sont neufs. 
                Les bâtiments A et B datent d'une quinzaine d'années. <br><br>
                <img src="images/image_locaux.png" width="500" alt="">
            </p>    
            <p>
                Les étages des bâtiments A et C hébergent les bureaux des ligues locataires et le rez-de-chaussée des quatre 
                bâtiments héberge des espaces mutualisés : un amphithéâtre de 200 places avec une régie, 8 salles de réunion de 12 à 50 places, un hall d'accueil, une salle de convivialité et son office traiteur,
                 ainsi qu'une salle de formation multimédia dotée de 24 postes. On y trouve également la partie « accueil » des neuf bureaux de l'administration de la M2L.
            </p>
            <p>L’autre partie se trouve au premier étage du bâtiment C. Différents locaux de service (archives, stockage local d'entretien ...) se trouvent en sous-sol.<br><br>
                <img src="images/image_locaux1.png" width="550" alt=""><br><br>
                <img src="images/image_locaux2.png" width="550">
             <p>   
                En fonction de leur taille, les 24 structures
                 hébergées occupent un ou plusieurs bureaux. Au total, la M2L offre 80 bureaux. A chaque étage des bâtiments de bureaux se trouve une petite salle de réunion que les ligues utilisent sans réservation. 
                 L'ensemble des autres salles ressources sont accessibles sur réservation, en journée comme en soirée.
            </p>
            <p>
            Les salles Majorelle, Gubber, Lonwgy, Daum, Gallé, Corbin et Baccarat sont des salles de réunion disponible a la reservation.
            La salle multimédia est une salle dediée aux stages de formation a inscription libez proposé par le CROSL ou pour les stages organisé par les ligues.
            L'amphithéatre est réservable pour les assemblés générales ou pour d'autre réunions importantes.
            La salle de convivialité, et son office attenant, est également disponible à la réservation, souvent par les repas " traiteur" qui suivent les réunions.
            Toutes ces salles sont accessibles en soirée : Un système de "digicode" permet d'entrer dans les locaux en dehors des heures d'ouverture des brureaux.
            La salle de reprographie est un espace commun aux ligues et à l'administrateur de la M2L.
            </p>
            <h3>Prix de Location</h3>
            <p>
            Chaque locataire devra payer 5e par m2 par mois. Avec une augmentation prévue de 1e dans les année a suivre. Un appel est effectué sur cette base forfaitaire en début d'année et une régularisation pourrait ete demandée en fin d'année en cas de dépassement de la conssomation d'éléctricité ( Mais cela n'a jamais été fait jusqu'à maintenant).
            <br>
            Les charges comprennent le chauffage, le nettoyage, l'accès internet, mais le téléphone n'en fait pas partie.
            </p>
        </section>
        </div>
        <footer>
            <div>
                <a href="accueil.php">Accueil</a> <a href="contact.php">Contact</a>
            </div>
            <p>Copyright © 2021 Maison de Ligues Kidd (M2L ) - Tous droits réservés.</p>
        </footer>
    </div>
</body>
</html>