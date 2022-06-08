
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
                    <li><a href="accueil.php">Accueil</a></li>
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
                
            </nav>
        </header>
        <section class="sec-inscription">
            <h1>Inscription</h1>
            <form  method="post" class="form_inscription">
                <div class="form">
                <label>Votre Nom</label><br>
                    <input type="text" name="nom" id="" required placeholder="Entrer votre nom"><br><br>
                <label>Votre Prenom</label><br>
                    <input type="text" name="prenom" id="" required placeholder="Entrer votre prenom"><br><br>
                <label>Votre E-mail</label><br>
                    <input type="email" name="email" id="" required placeholder="Entrer votre E-mail"><br><br>
                <label>Mot de passe</label><br>
                    <input type="password" name="mdp" required placeholder="Entrer votre mot de passe"><br><br>
                <label>Confirmer votre mot de passe</label><br>
                    <input type="password" name="mdp" required placeholder="Confirmer votre mot de passe"><br><br>
                <label>Accepeter les conditions d'utilisateur</label>
                    <input type="checkbox" name="" id="" required><br><br>
                    <input type="submit" value="Confimer">
                <p><a class="liens_sport" href="connexion.php">Vous avez déjà un compte</a> </p>

                <?php

                    $connect_bdd= mysqli_connect("127.0.0.1","root","","m2l-kidd");

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
                </div>
            </form>
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