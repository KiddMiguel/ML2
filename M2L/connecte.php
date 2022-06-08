<?php
    session_start();
?>
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
                <h1>Connectez-vous</h1>
                <form method="post" action="">
                    <input type="text" name="email" placeholder="Votre Email" required><br>
                    <input type="password" name="mdp" placeholder="Votre Mot de passe" required><br>
                    <input type="submit" value="Se connecter" name="submit">
                    <p><a href="#">Mot de passe oublié</a> <a href="inscription.php">Créer un compte</a></p>
                    <?php 
                    // On fais une condition si l'on clique sur le boutton "SE CONNECTER" 
                    // On recupère les informations saisies ( email et mot de passe )
                        if(isset($_POST['submit'])){
                            $email= $_POST['email'];
                            $mdp= $_POST['mdp'];

                            // On se connecte à la base de donnée
                            $connect_bdd= mysqli_connect("127.0.0.1","root","","ml2");

                            //On fais la requête 
                            $req= "select * from users where email= '$email' and mdp= '$mdp'";
                            $res= mysqli_query($connect_bdd, $req);

                            //On fais une condition de si le mot de passe est correcte où incorrecte 
                            if(mysqli_num_rows($res)>0){
                                $_SESSION["email"]= $email;
                                header("Location:accueil.php");
                            }else{
                                echo "<p>Mot de passe incorrect</p>";
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