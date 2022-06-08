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
                    <li><a  href="accueil.php">Accueil</a></li>
                    <li><a href="presentation.php">Présentation</a></li>
                    <li class="deroulant"><a class="sport" href="sport.php">Sport</a>
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
        <section class="sec-sport">
           <div class="image_sport">
               <div>
                    <img src="Images/foot.png" width="130" alt="">
                    <p><a href="https://lgef.fff.fr/competitions/">Football</a></p>
               </div>

              <div>
                    <img src="Images/cylclisme.png" width="170" alt="">
                    <p><a href="http://www.grandestcyclisme.fr/">Cyclisme</a></p>
              </div>

               <div>
                    <img src="Images/Tennis.png" width="130" alt="">
                    <p><a href="https://www.ligue-grandest-fft.fr/">Tennis</a></p>
               </div>
               
               <div>
                    <img src="Images/judo.png" width="170" alt="">
                    <p><a href="https://www.judograndest.fr/">Judo</a></p>
               </div>
               
               <div>
                    <img src="Images/natation.png" width="170" alt="">
                    <p><a href="https://grandest.ffnatation.fr/script/index.php">Natation</a></p>
               </div>
           </div>
        </section>
     
    </div>
</body>
</html>