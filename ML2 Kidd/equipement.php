<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title>Presentation-equipement</title>
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
                    <li><a href="presentation.php">Locaux</a></li>
                    <li><a href="personnel.php">Personnels</a></li>
                    <li><a class="equipement"href="equipement.php">Equipements</a></li>
                    <li><a href="#">Reservation</a></li>
                    <li><a href="Service.php">Services</a></li>
                </ul>
            </nav>
        </header>
    <div class="div-equipement">
        <section class="sec-equipement">
        <div class="div_equipement">
                <h1>Equipements</h1>
                <p>
                    Pour ce qui est des ordinateurs et des outils d'impression, la M2L ne dispose que de ses propres équipements, dans les bureaux d'administration du CROSL et dans la salle multimédia. Les bureaux des ligues sont équipés par les
                    ligues elles-mêmes (hors mobilier de base). Des ressources d'impression mutualisées payantes sont néanmoins disponibles à l'administration de la M2L.
                </p>
            </div>
            <div class="div_equipement">
                <h3>Connectique fournie selon les espaces</h3>
                <p>Chaque bureau de ligue du bâtiment A dispose de deux prises Ethernet de catégorie 5 et d'une prise téléphonique. Dans le nouveau bâtiment C, ce sont trois prises Ethernet de catégorie 6 qui sont disponibles dans chaque bureau pour connecter du matériel 
                    informatique ou un appareil de téléphonie IP.
                </p>
                <p>
                Chaque salle de réunion dispose d'une prise Ethernet pour la connexion d'un PC portable au réseau (de catégorie 5 dans le bâtiment B et 6 dans le bâtiment D). Elle dispose en outre d'un système fixe de vidéo projection, mais pas d'ordinateur à demeure.
                </p>
                <p>
                La salle de formation multimédia dispose de 26 prises Ethernet de catégorie 5, une pour chacun des 25 PC (24 PC "stagiaires" et un PC "formateur"), et la dernière pour une imprimante réseau.
                </p>
                <p>
                L'amphithéâtre dispose de 4 prises Ethernet de catégorie 5 sur le pupitre. Il dispose également d'un système de vidéo projection sur grand écran. Une prise Ethernet est disponible également dans la régie.
                </p>
                <p>
                Les bureaux d'administration de la M2L disposent en tout de 27 prises de catégorie 6, pour les neuf bureaux. La salle de reprographie est dotée de 4 prises Ethernet de catégorie 6 pour les systèmes d’impression numériques connectés.
                </p>
            </div>
            <div class="div_equipement">
                <h3>Implantation des écrans du réseau d'affichage et des bornes Wifi</h3>
                <p>
                    Un système de diffusion d'informations est installé sur 3 écrans 42" dans les espaces de circulation. Ils servent essentiellement à l'information des visiteurs sur les lieux de réunion. Les écrans d'information sont renseignés depuis l'administration de la M2L.
                </p>
                <p>
                    Un réseau Wifi gratuit est disponible pour les visiteurs dans les espaces de réunion du rez-de-chaussée, mais également dans les étages des bureaux des ligues (les bornes y sont positionnées en quinconce d'un étage à l'autre).
                </p>
            </div>
            <h3>Schéma d'implantation des bornes Wifi et du réseau d'affichage</h3>
            <div class="img_materiaux"><img src="Images/image_materiaux.png" width="550" alt=""></div>
            <h3>Implantation des baies de brassage</h3>
            <p>Il y a eu un laps de temps important entre la construction des bâtiments A et B (construits au début des années 90) et C et D (tout dernièrement construits, en 2010).</p>
            <p>
                Pour le bâtiment A, on trouve une armoire de brassage secondaire pour chacun des 4 niveaux d'implantation des bureaux de ligues. Chacune de ces armoires regroupe 22 prises Ethernet : 20 vers les bureaux, une vers la borne Wifi et une vers la salle de réunion.
                On trouve un commutateur 26 ports dans chacune de ces armoires (24 ports 10/100 et deux ports Giga combo RJ-45 / SFP). Ces armoires de brassage sont connectées à une armoire centralisatrice au rez-de-chaussée, dans un petit local climatisé du bâtiment B.
            </p>
            <p>
                Pour le nouveau bâtiment C, on a positionné une seule armoire de brassage au niveau quasi central du second étage du bâtiment. Cette armoire réunit 128 prises, 32 par étage (3 par bureau, une prise pour la salle de réunion et une pour la borne wifi). 
                On y trouve 4 commutateurs 48 ports, dont tous les ports sont utilisables en gigabits/s. Cette armoire est connectée en fibre optique à l'armoire centralisatrice du bâtiment B.</p>
            <p>
                Les salles du RDC des nouveaux bâtiments C et D (salles à réservations, bureaux d'administration de la M2L, la salle de reprographie) ainsi que les bornes Wifi et les 3 écrans d'information sont tous connectés à l'armoire de brassage principale du bâtiment B 
                dans laquelle on trouve 2 commutateurs à 24 ports et un routeur. C'est également le lieu d'implantation de l'armoire à serveurs.
            </p>
            <h3>Schémas d'implantation des baies de brassage</h3>
            <p>Au Rez-de-chaussée</p>
            <div class="img_materiaux">
                <img src="images/image_materiaux2.png" width="550" alt="">
            <p>Dans un étage du bâtiment A</p>
        
                <img src="images/image_materiaux3.png" width="550"alt="">
                <p> 
                   C'est au rez-de-chaussée, dans la baie de brassage principale du bâtiment B que sont regroupés les différents réseaux au moyen de 2 commutateurs-routeurs 24 ports empilés, l'accès Internet et l'accès téléphonique standard et IP.
                </p>
            </div>
            <h3>Réseaux informatiques</h3>
            <p>La M2L dispose actuellement : </p>
            <ul>
                <li>D'un réseau commun aux ligues et à l'administration</li>
                <li>D'un réseau de type DMZ dans lequel on trouve un ensemble de serveurs accessibles depuis l'extérieur</li>
                <li>D'un réseau de type DMZ dans lequel on trouve un ensemble de serveurs accessibles depuis l'extérieur</li>
                <li>D'une connexion à internet</li>
                <li> Note : une segmentation des réseaux est en projet pour augmenter la sécurité.</li>
            </ul>
            <h3>Réseaux IP</h3>
            <div class="img_materiaux">
                <img src="images/image_materiaux4.png" width="550" alt="">
            </div>
            <h3>Les serveurs M2L</h3>
            <p>L'administration de la M2L dispose de plusieurs serveurs :</p>
            <ul>
                <li>Un serveur d'annuaire et de fichiers qui abrite également des bases de données de gestion et qui fait office de serveur DHCP</li>
                <li>Un serveur d'impression relié aux différents moyens d'impression des bureaux et de la salle de reprographie qui fait également office de serveur antiviral</li>
                <li>Un serveur NAS permettant la sauvegarde des données de l'administration et de celles des ligues</li>
            </ul>
            <p>Dans la DMZ, on trouve :</p>
            <ul>
                <li>Un serveur web</li>
                <li>Un serveur de messagerie pour le domaine lorraine-sport.net. Les ligues ont des adresses du type escrime@lorraine-sport.net</li>
                <li>Un serveur de gestion des configurations</li>
            </ul>
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