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
    
    <title>interface utilisateur</title>
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
            <!-- <li><a href="#">Mode Admin</a></li> -->
            <li> 
              <div class="account-container">
                <img src=<?php echo" ../imgs/usersImages/".$_SESSION["user_image"] ?> class = "logo-image" alt=""> <h3><?php echo $_SESSION['user_last_name']." ".$_SESSION['user_first_name']; ?></h3>
              
              </div>
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
                <div class="sub">Ajouter un utilisateur</div>
                <div class="title">"De Nouveaux Employés, De Nouvelles Opportunités."</div>
                <button class="btn" id="add_user">Ajouter</button>
              </div>
              <div class="image"><i class="fa-solid fa-address-card"></i></div>
            </div>
            <div class="row">
            <div class="card">
              <div class="info">
                <div class="sub">Modifier les utilisateurs</div>
                <div class="title">"Des Employés en Évolution, Une Entreprise en Transformation."</div>
                <button class="btn" id="add_user">Modifier</button>
              </div>
              <div class="image"><i class="fas fa-pencil-alt"></i></div>
            </div>
</div>
    
          <div class="row">
            <div class="card">
              <div class="info">
                <div class="sub">Ajouter un nouveau RH</div>
                <div class="title">"Des Employés, Des Fichiers, Une Vision Commune."</div>
                <button class="btn" id="add_RH">Ajouter</button>
              </div>
              <div class="image"><i class="fa-solid fa-user-plus"></i></div>
            </div>
           

           


        </div>
      </div>
      <script src="../js/interface_RH.js"></script>
      
</body>
</html>
