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
                    <li><a href="reservation.php">Reservation de salle</a></li>
                    <li><a class="service" href="service.php">Services</a></li>
                </ul>
            </nav>
        </section>
        <section class="sec-service">
            <h1>Services</h1>
            <h3>Accès Internet</h3>
            <p>Les ligues disposent d'un accès Internet mutualisé que la M2L loue à un prestataire extérieur.</p>
            <h3>Accès Wifi</h3>
            <p>
                Dans tous les espaces, un réseau Wifi "visiteurs" est disponible, avec une clé WPA renouvelée régulièrement et communiquée aux ligues. Ce réseau ne permet que l'accès à Internet.
            </p>
            <h3>Téléphonie</h3>
            <p>
                Dans les bâtiments anciens A et B, les salles et bureaux sont équipés de prises de téléphone analogiques. La M2L y fournit les combinés téléphoniques. Dans les bâtiments neufs C et D, 
                l'équipement téléphonique est de type VoIP. La M2L loue des postes téléphoniques IP aux ligues.
            </p>
            <h3>Affranchissement</h3>
            <p>
                Une machine à affranchir permet un affranchissement rapide et en nombre. Cette prestation est facturée aux ligues au coût de l'affranchissement. Chaque mois, on relie la machine à 
                affranchir à une imprimante pour obtenir une liste de codes de gestion correspondant aux ligues associés à une quantité et un type d'affranchissement. La prise en compte de ces informations permet au CROSL d'éditer des factures.
            </p>
            <h3>Impressions en volume et en qualité imprimerie</h3>
            <p>
            Les ligues disposent de la possibilité d'imprimer sur des ressources d'impression numériques connectées situées dans le local reprographie du rez-de-chaussée dont l'usage fait l'objet d'une facturation à prix coûtant. Un système de comptage situé sur le serveur d'impression permet au CROSL d’effectuer une facturation mensuelle auprès des ligues.<br>
            Une photocopieuse noir et blanc à 70 pages/minute avec différents dispositifs de finition.<br>
            Une imprimante Laser couleur A4/A3 à encre solide à 25 pages/minute.<br>
            Un traceur A2 (1 page / minute) utilisé pour les affiches et banderoles.
            </p>
            <h3>Serveur FTP documentaire</h3>
            <p>
            La M2L met à disposition des ligues un serveur FTP documentaire intranet/internet regroupant des textes légaux, des modèles de dossiers, de statuts, des programmes de formation (...) compilés par le CROSL.
            </p>
            <h3>Système de réservation des salles</h3>
            <p>
                La M2L met à disposition des ligues un site web de réservation des salles (réunions, amphithéâtre, restauration). Ce site est accessible en intranet, mais aussi depuis l'internet. Les réservations payantes sont facturées par la Région aux utilisateurs. L’administration de la M2L lui communique les informations nécessaires à cette facturation de façon hebdomadaire.
            </p>
            <h3>Information sur le digicode du jour et la clé Wifi</h3>
            <p>La M2L met à disposition des ligues un site web d'information sur le digicode permettant l'accès à la M2L ainsi que sur la clé Wifi "visiteurs". Le système de réservation donne également le digicode du jour dans le compte-rendu de réservation envoyé automatiquement par mail.</p>
            <h3>Système de gestion des configurations</h3>
            <p>
            M2L gère à travers un logiciel de gestion des configurations l'ensemble du parc informatique incluant les postes fixes des ligues
            </p>
            <h3>Intégration des postes informatiques des ligues</h3>
            <p>
            Lorsque les ligues acquièrent du matériel informatique, il y a une phase obligatoire d'intégration qui consiste à :

            installer un antivirus affilié au serveur antiviral de la M2L.<br>
            installer la dernière version de l'agent qui réalise l’inventaire matériel et logiciel<br>
            paramétrer le poste en adressage IP automatique,<br>
            installer un système de sauvegarde de données sur un site FTP de sauvegarde géré par la M2L,<br>
            effectuer les dernières mises à jour systèmes et à paramétrer leur automatisation,<br>
            paramétrer les noms des postes selon les règles de gestion suivantes :
            <ul>
                <li>B[code bâtiment]E[numéro étage]L[numéro ligue]S[numéro salle].P[numéro poste] Code bâtiment qui peut être A ou C</li>
                <li>N° étage est compris entre 1 et 4 (puisque les locaux du rez-de-chaussée n'hébergent pas de ligues)</li>
                <li>N° ligue sur 2 chiffres : correspond à un nombre attribué à la ligue allant pour l'instant de 01 à 24</li>
                <li>N° salle sur 2 chiffres : correspond aux bureaux occupés par les ligues</li>
                <li>N° poste sur 2 chiffres : correspond au numéro écrit sur la prise murale</li>
                <li>Exemple : le nom d'hôte BAE2L06S01P01 correspond au poste installé sur la prise N°1 du bureau A201 occupé par la ligue de Volley,</li>
                <li>bureau situé au deuxième étage du bâtiment A.</li>
            </ul>
             Cette intégration est contractualisée. Les ligues et CD étant toutes des structures associatives indépendantes, leurs postes ne sont pas intégrés dans un annuaire central. Par contre, les postes de l'administration de la M2L et de la salle multimédia le sont.
            </p>

            <h3>Intégration d'imprimantes</h3>
            <p>
                Lorsque les structures hébergées s'équipent d'imprimante réseau, la connexion en est réalisée par l'informaticien bénévole du CROSL, sans passer par un serveur d'impression. Le nom de l'imprimante est lui aussi codifié de la même façon que celui des postes (la lettre L vient remplacer la lettre P).
            </p>
            <h3>Service d'établissement de bulletins de salaire</h3>
            <p>
            Le CRIB (Centre Régional d'Information des Bénévoles) est un label donné au CROSL qui, entre autres missions d'information (sur les textes réglementaires, la convention nationale du sport ...), 
            propose un service d'établissement de bulletins de salaires aux ligues et à leurs clubs affiliés. Le CROSL est tiers de confiance pour l'URSSAF et, à ce titre, établit des bulletins de salaires réglementaires et tous les documents annexes. 
            La prestation est facturée au forfait (60 € par an) et au bulletin édité (5 €). Un employé du CROSL est affecté à cette mission à raison de 0,8 ETP.
            </p>
            <p>
            Illustration du processus pour une ligue qui fait établir ses bulletins de salaires par le CRIB, pour des animateurs à la vacation, comme pour ses employés permanents.
            </p>
            <p>- La ligue établit une « déclaration unique d'embauche » et un contrat de travail.</p>
            <p>- Les données "salaires" sont envoyées par les associations au CRIB avant le 15 du mois :</p>
            <ul>
                <li>Nom, prénom, date de naissance, adresse, n° de sécu, de l’intervenant ou du salarié</li>
                <li>Dates et heures d'intervention (de jour / de nuit)</li>
                <li>Heures congés payées associées</li>
                <li>Taux horaire</li>
                <li>Intitulé dans la grille de la convention nationale du sport (exemple : technicien niveau 3)</li>
                <li>En retour, le CRIB fournit le bulletin de salaire et le document sur les charges périodiques.</li>
            </ul>
            <p>Le salaire est viré par la ligue, si celle-ci a fait ce choix. Sinon il y a un prélèvement sur son compte et virement sur le compte du salarié.</p>
            <p>Pour les versements aux organismes sociaux, il y a prélèvement direct sur le compte de la ligue.</p>
            <h3>Formations</h3>
            <p>Le CROSL offre un catalogue diversifié de formations aux bénévoles des clubs affiliés aux ligues (législation, éthique, comptabilité associative, etc.). Les ligues organisent également des formations, en général plus techniques, sur l'usage de logiciels spécifiques de gestion des clubs ou des compétitions sportives.</p>
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