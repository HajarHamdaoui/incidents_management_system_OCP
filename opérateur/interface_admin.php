<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/interface_util.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>interface admin</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                              
                <li><a href="https://www.ocpgroup.ma/fr/Contact-us">Contact</a></li>
                <li><a href="https://fr.linkedin.com/company/ocp">LinkedIn</a></li>
                <li><a href="https://fr-fr.facebook.com/OCPGroupMA/">Facebook</a></li>
                <li> <a href="../utilisateur/interface_util.php">Mode utilisateur</a></li>
                <li>
                  <div class="account-container">
                      <img src=<?php echo "../imgs/usersImages/".$_SESSION["user_image"] ?> class = "logo-image" alt=""> <h3><?php echo $_SESSION['user_last_name']." ".$_SESSION['user_first_name'];  ?></h3>
                  </div>
                  <!-- <div class="account-container">
                    <img src="../imgs/userIcon.png" class = "logo-image" alt=""><h3>Compte Admin</h3>
                  </div> -->
                </li> 
                <li>
             <a href="../utilisateur/interface_util.php" class="home-link">
            <div class="account-container"><i class="fas fa-home"></i></div> 
             </a>
            </li>
            
             
            </ul>
            <div class = "logo-container">
                
            <img src="../imgs/LOGO.svg" class="logo-image" alt="">
   
             <h1 class="logo">ResolveSphere</h1>
            </div>
   
        </div>
    </nav>

    <!--CARDS-->
    <div class="wrapper">
        <div class="cards-container">
          <div class="row">
            <div class="card">
              <div class="info">
                <div class="sub">Demande de Service</div>
                <div class="title"> Vos besoins, notre action : Transformez vos demandes en solutions..</div>
                <button class="btn" id="consulter">Consulter</button>
              </div>
              <div class="image">
                <i class="fa-solid fa-bell-concierge"></i>              </div>
            </div>
            <div class="card">
              <div class="info">
                <div class="sub">Réclamation d'incidents</div>
                <div class="title">Écoute, Rétablissons, Agissons : Votre Voix Compte !</div>
                <button class="btn">Consulter</button>
              </div>
              <div class="image">
                <i class="fa-solid fa-bolt"></i>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="card">
              <div class="info">
                <div class="sub">Article d'assistance</div>
                <div class="title">Guides Pratiques pour des Solutions Simples : Ensemble vers la Clarté !</div>
                <button class="btn">Consulter</button>
              </div>
              <div class="image"><i class="fa-regular fa-newspaper"></i></div>
            </div>
            <div class="card">
              <div class="info">
                <div class="sub">chat</div>
                <div class="title">Communiquez, Résolvez, Collaborez : Notre chat permet une communication directe.</div>
                <button class="btn">Démarrer</button>
              </div>
              <div class="image"><i class="fas fa-comment fa-lg"></i></div>
            </div>
            <div class="row">
            <div class="card">
              <div class="info">
                <div class="sub">Statistique</div>
                <div class="title">Données Qui Parle : Les statistiques en chiffres et graphiques rendent visible l'invisible.</div>
                <button class="btn">Consulter</button>
              </div>
              <div class="image"><i class="fas fa-chart-bar"></i></div>
            </div>
            </div>
          <div class="row">
            <div class="card">
              <div class="info">
                <div class="sub">Historique</div>
                <div class="title">Tracer notre Chemin : Passé, Présent et Solutions à Venir.</div>
                <button class="btn">Consulter</button>
              </div>
              <div class="image">
                <i class="fa-solid fa-clock-rotate-left"></i>
                          </div>
            </div>
          </div>
        </div>
      </div>
     <script src="../js/service_admin.js"></script> 
</body>

</html>


