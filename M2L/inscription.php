<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title>Inscription</title>
</head>
<body>
    <div>
        <header> 
        <h1 class="title"><a href="accueil.php">M2L</a></h1>
            <nav>
             
                <ul>
                    <li><a href="accueil.php">Accueil</a></li>
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
            </nav>
        </header>
        <section>
            <div>
                <h1>Créez votre compte</h1>
                <form method="post" action="">
                    <input type="text" name="nom" placeholder="Votre Nom"><br>
                    <input type="text" name="prenom" placeholder="Votre Prenom"><br>
                    <input type="text" name="email" placeholder="Votre Email"><br>
                    <input type="password" placeholder="Votre Mot de passe"><br>
                    <input type="password" name="mdp" placeholder="Confirmez votre mot de passe"><br>
                    <input type="submit" value="Créer" name="submit">
                    <p><a href="connecte.php">Vous avez déjà un compte</a></p>

                    <?php

                        $connect_bdd= mysqli_connect("127.0.0.1","root","","ml2");
                        
                        if(isset($_POST["submit"])){
                            $nom = $_POST["nom"];
                            $prenom = $_POST["prenom"];
                            $email = $_POST["email"];
                            $mdp = $_POST["mdp"];
                            $req= "Insert into users values (null,'$nom', '$prenom', '$email', '$mdp')";
                            $res= mysqli_query($connect_bdd, $req);
                            
                            $req2= "select * from users where email= '$email' and mdp= '$mdp'";
                            $res2= mysqli_query($connect_bdd, $req2);

                            if(mysqli_num_rows($res2)>0){
                                $_SESSION["email"]= $email;
                                header("Location:accueil.php");
                            }
                        }
                    ?>
                </form>
        
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