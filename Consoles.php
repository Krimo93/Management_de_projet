<!DOCTYPE html>

<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monsterrat&family=Roboto+condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> Sparkshop Stations </title>

</head>

<body>

    <nav class ="navbar">
        <div class="logo"> <a href="index.php"> <h1> Sparkshop </h1> </a>  </div>
            <ul class="menu">
                
                <li> <a href = "index.php"> Accueil </a>   </li>
                <li> <a href="Consoles.php">Consoles</a> </li>
                <li> <a href="Tablettes.php">Tablettes</a> </li>
                <li> <a href="Telephone.php">Téléphones</a> </li>
                <li> <a href="Ordinateurs.php">Ordinateurs</a> </li>
                <?php if (isset($_SESSION['user'])): ?>
                <li> <a href="profil.php" class="fa-solid fa-user"> Profil</a> </li>
                <li> <a href="logout.php" class="fa-solid fa-sign-out-alt"> Déconnexion</a> </li>
            <?php else: ?> 
                <li> <a href="login.php" class="fa-solid fa-user"> Connexion</a> </li>
            <?php endif; ?>
                <li> <a href = "login.php" class = "fa-solid fa-user"> </a> </li>
                <li> <a href = "panier.php" class="fa-solid fa-cart-shopping"> </a> </li>

            </ul>
    </nav>

    <section class = "Consoles">


    </section>

    <section class="section_produits">

        
        <div class="produits">
        
            <div class="carte">
            <a href="PS5.php">
                <div class="img"> <img src="Images_Consoles/PS5.JPG"> </div>
                <div class="decs">  PS5 de Sony    </div>
                <div class="titre">  Playstation 5   </div>
                <div class="box"> 
                    <div class="prix"> 500 € </div>
                    <button class="achat "> Acheter </button>
                </div>
            
            </div>

            <div class="carte">
            <a href="PS4.php">    
                <div class="img"> <img src="Images_Consoles/PS4.jpg"> </div>
                <div class="decs">  PS4 de Sony  </div>
                <div class="titre"> Playstation 4   </div>
                <div class="box"> 
                    <div class="prix"> 165,99 € </div>
                    <button class="achat"> Acheter </button>
                </div>
            
            </div>

            <div class="carte">
                <a href="XBOX_ONE_S.php">  
                <div class="img"> <img src="Images_Consoles/Xbox_One_X.jpg"> </div>
                <div class="decs">  Xbox One de Microsoft </div>
                <div class="titre">  Xbox One series X </div>
                <div class="box"> 
                    <div class="prix"> 479,99 €</div>
                    <button class="achat"       > Acheter </button>
                </div>
            
            </div>

            <div class="carte">
                <a href="XBOX_ONE.php">  
                <div class="img"> <img src="Images_Consoles/Xbox_one.jpg"> </div>
                <div class="decs">  Xbox One de Microsoft </div>
                <div class="titre"> Xbox One </div>
                <div class="box"> 
                    <div class="prix"> 149,99 € </div>
                    <button class="achat"> Acheter </button>
                </div>
            
            </div>

        </div>    


    </section>

</body>

<footer> 
    <p> Copyrights <a href="#"> Sparkshop </a></p>
</footer>

</html>