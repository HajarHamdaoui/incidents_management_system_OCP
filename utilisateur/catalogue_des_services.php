<?php
session_start();
 ?>
<html>
    <head>
        <title>User History</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/catalogue_des_services.css">
        <link rel="stylesheet" href="../css/navbar.css">
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
                              
                <li><a href="#">Contact</a></li>
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Mode Admin</a></li>
                <li><a href="#">
                  
                  <div class="account-container">
                      <img src=<?php echo "../imgs/usersImages/".$_SESSION['user_image'] ?> class = "logo-image" alt=""> <h3><?php echo $_SESSION['user_last_name']." ".$_SESSION['user_first_name'];  ?></h3>
                  </div>
              </a></li>  

            </ul>
            <div class = "logo-container">
                
            <img src="../imgs/LOGO.svg" class="logo-image" alt="">
   
             <h1 class="logo">ResolveSphere</h1>
            </div>
   
        </div>
    </nav>

<div class="catalogue-container" id="container">
  <h2>catalogue des services <small> <a href="../utilisateur/demandedeservice.php">Créer une demande de service personnalisée</a>
  
  </small></h2>
  <ul class="responsive-table" id="list">




    <!-- <li class="table-row">
      <div class="col col-1"><i class="fa-solid fa-briefcase"></i></div>
      <div class="col col-2" >
        <div class="titre-de-demande">
          Activation du compte windows 
        </div>
        <div class="catégorie">Network/LAN</div>
        <div class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, explicabo repudiandae quas animi non minus laborum earum veritatis fugiat dolor. Nulla illo architecto ipsa voluptas, totam voluptatum rerum. Non, quidem?</div>      </div>
      <div class="col col-3" > <button class="demander-button">Demander le service</button>



      
      </div>

    </li> -->
  </ul>
</div>
  </body>
  <script src="../js/catalogueDesServices.js"></script>
</html>