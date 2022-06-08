<?php 
//On fais une 
if(!isset($_SESSION)){
session_start(); 
    $database = mysqli_connect("127.0.0.1","root","","ml2");
    if(isset($_SESSION['email'])){
        $sql = "SELECT nom, prenom FROM users where email='{$_SESSION['email']}'";
        $resultat = $database->query($sql);
        foreach($resultat as $utilisateur){
            $nom = $utilisateur['nom'];
            $prenom = $utilisateur['prenom'];
        }
    }
}

?>

<ul class="connect">
    <?php
                if(isset($_SESSION['email'])){
                    echo "<li class='button_connecte'><a  href='#'>$prenom $nom</a></li>";
                    echo "<li class='button_inscrit'><a  href='deconnexion.php'>deconnexion</a></li>"; 
                }
                else{
                    echo "<li class='button_inscrit'><a href='inscription.php'>S'inscrire</a></li>";
                    echo "<li class='button_connecte'><a href='connecte.php'>Se connecter</a></li>";
                }
    ?>
</ul>