<?php
session_start();
include("../includes/connect.php");
include("../includes/tempsRestantCalcul.php");

?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../css/user_history.css">
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
                              
            <li><a href="https://www.ocpgroup.ma/fr/Contact-us">Contact</a></li>
            <li><a href="https://fr.linkedin.com/company/ocp">LinkedIn</a></li>
            <li><a href="https://fr-fr.facebook.com/OCPGroupMA/">Facebook</a></li>
                <li><a href="../opérateur/interface_admin.php">Mode Admin</a></li>
                <li>
                  <div class="account-container">
                      <img src=<?php echo "../imgs/usersImages/".$_SESSION["user_image"] ?> class = "logo-image" alt=""> <h3><?php echo $_SESSION['user_last_name']." ".$_SESSION['user_first_name'];  ?></h3>
                  </div>
              </li>  

            </ul>
            <div class = "logo-container">
                
            <img src="../imgs/LOGO.svg" class="logo-image" alt="">
   
             <h1 class="logo">ResolveSphere</h1>
            </div>
   
        </div>
    </nav>
<div class="catalogue-container">
  <h2>Historique</h2>
  <ul class="responsive-table">
    <li  class="table-header" style = "background-color:#888">
      <div class="col col-1">ID</div>
      <div class="col col-2">Titre</div>
      <div class="col col-3">Etat</div>
      <div class="col col-4">TEMPS RESTANT</div>
      <div class="col col-5"></div>
    </li>
 
    <?php
    $select_query="SELECT * FROM services where demandé_par='".$_SESSION["user_email"]."'";
    $result_select=mysqli_query($conn,$select_query);

    while($row=mysqli_fetch_assoc($result_select))
    {  
      $temps_restant=calculerTempsRestant($row["date_de_création"],$row["SLA"]);
      echo '    <li class="table-row">
      <div class="col col-1" data-label="ID service:">'.$row["id"].'</div>
      <div class="col col-2" data-label="Titre:" style="display:flex;align-items:center;" >'.$row["titre"].'</div>
      <div class="col col-3" data-label="état:">'.$row["état"].'</div>
      <div class="col col-4" data-label="SLA:" style="background-color:#5ed86c;display:flex;color:white ; align-items:center;margin-right:20px;" >3heures3Omin40s </div>
      <div class="col col-5"> <a href="./affichage_de_service.php?service_id='.$row["id"].'" ><button class="ms-button">détail</button></a></div>';
    }
    
    ?>
      
   
  </ul>
</div>



  </body>
</html>