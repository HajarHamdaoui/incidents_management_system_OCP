<?php
session_start();
include("../includes/connect.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/demandedeserviceForm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/searchable-dropdown.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="../css/datepicker.css">
    <style>
      .fields-wrapper{
        margin:20px;
      }
      .detail{
        margin:10px;
        width:400px;
        overflow-x: scroll;
      }
      fieldset{
        padding-bottom:20px;
      }
    </style>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



    <title>Affichage de service</title>
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
            <li><a href="#">Mode Admin</a></li>
            <li><a href="#">  
              <div class="account-container">
                  <img src=<?php echo "../imgs/usersImages/".$_SESSION["user_image"] ?> class="logo-image" alt=""> 
                  <h3><?php echo $_SESSION["user_last_name"]." ".$_SESSION["user_first_name"] ?></h3>
              
              </div>
          </a></li>   
          <li>
             <a href="../utilisateur/interface_util.php" class="home-link">
            <div class="account-container">
             <i class="fas fa-home"></i> 
            </div>
            </a>
            </li>

        </ul>
        <div class = "logo-container">
            
        <img src="../imgs/LOGO.svg" class="logo-image" alt="">

         <h1 class="logo">ResolveSphere</h1>
        </div>

    </div>
</nav>
<div class="dmd-container">
  <div class="second-container">
    <div class="header">
      <h1 id="title">Affichage de service</h1>
    </div>
    <?php 
    $select_query="SELECT * FROM services where id=".$_GET["service_id"];
    $result_query=mysqli_query($conn,$select_query);
    $user_info=mysqli_fetch_assoc($result_query);
    ?>
    <div  class=fields-wrapper >
      
      <fieldset>
        <legend> <i class="fa-solid fa-chevron-down"></i>Détails de la demande </legend>
        <div id="wrapwrap">
        <div class="field-container">
          <label for="titre">
            Titre
          </label>
          <div class="titre" id="titre"><?php echo $user_info["titre"]; ?></div>
        </div>           
            <div class="quill-container">
                <label class ="description-label"for="editor" >Description</label>

                <div class="detail"><?php echo htmlspecialchars_decode(str_replace("<apostrophe/>","'",$user_info["details"])); ?></div>

            </div>
          
          <div class="field-container">
            <label name="demandé_par" for="">Crée par : </label>
            <div class="account-container">
              <img src=<?php  echo "../imgs/usersImages/".$_SESSION["user_image"] ?> class = "account-image" alt=""> <h4><?php echo $_SESSION["user_last_name"]." ".$_SESSION["user_first_name"] ?></h4>         
          </div>
          </div>
          <div class="field-container">
            <label name="demandé_pour" for="">Demandé pour : </label>
            <div class="account-container">
            <div class="demandé_pour"><?php
            $demande_pour_select="Select * FROM user where user_email='".$user_info["demandé_pour"]."';";
            $result_demande_pour_select=mysqli_query($conn,$demande_pour_select);
            $demande_pour_info=mysqli_fetch_assoc($result_demande_pour_select);
            echo $demande_pour_info["last_name"]." ".$demande_pour_info["first_name"]; ?></div>

              <!-- <img src="../imgs/userIcon.png" class = "account-image" alt=""> <h4>Compte Personnel</h4>          -->
          </div>
              </div>
          <div class="field-container">
            <label for="">Emplacement : </label>
            <div class="emplacement"><?php echo $user_info["emplacement"]; ?></div>


            </div>
            <div class="field-container">
              <label>Méthode de contact 
                </label>
                <div class="contact"><?php echo $user_info["contact_method"]; ?></div>
          </div>
    </fieldset>
      <fieldset>
        <legend><i class="fa-solid fa-chevron-down"></i>Classification</legend>

          
            <div id="wrapwrap" style=" height:40px; margin-bottom:40px">
              <div class="field-container" >
                  <label>Urgence
                    </label>
                    <div class="urgence"><?php echo $user_info["urgence"]; ?></div>

              </div>
              <div class="field-container" class="catégorie-wrapper">
                <label for="">catégorie : </label>
                <div class="catégorie"><?php echo $user_info["categorie"]; ?></div>

      </fieldset>         
            
      
     
     
      <input type="submit"  class ="submit" id="submit" value="Soumission" onclick="myFunction()">
    </form>
  </div>
</div>

