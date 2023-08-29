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

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


    <title>Demande de service</title>
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
      <h1 id="title">Demande de service</h1>
      <p id="description">A utiliser quand le service demandé ne figure pas dans le catalogue.</p>
    </div>
    <form method="post" action="" id="survey-form">
      
      <fieldset>
        <legend> <i class="fa-solid fa-chevron-down"></i>Détails de la demande </legend>
        <div id="wrapwrap">
        <div class="field-container">
          <label for="titre">
            Titre
          </label>
          <input type="text" name="titre" id="titre">
        </div>           
            <div class="quill-container">
                <label class ="description-label"for="editor" >Description</label>
                <div id="editor" name="description"></div>
            </div>
          
          <div class="field-container">
            <label name="demandé_par" for="">Crée par : </label>
            <div class="account-container">
            <input style="visibility:hidden;height:0" name="createur" value=<?php echo $_SESSION["user_email"] ?> >
              <img src=<?php  echo $_SESSION["user_image"] ?> class = "account-image" alt=""> <h4><?php echo $_SESSION["user_last_name"]." ".$_SESSION["user_first_name"] ?></h4>         
          </div>
          </div>
          <div class="field-container">
            <label name="demandé_pour" for="">Demandé pour : </label>
            <div class="account-container">
            <div name="edemandé_pour" class="searchable-dropdown" id="searchable-dropdown">
              <div class="searchable-dropdown-group">
                <span class="searchable-dropdown-arrow"></span>
                <select name="demandé_pour" id="demandé_pour" class="dropdown" id ="dropdown">
                   <option disabled>Entrer l'email de l'utilisateur</option>
                   <?php 
                   $select_query = "SELECT * FROM user";
                   $result_select = mysqli_query($conn , $select_query);
                   while ($row = mysqli_fetch_assoc($result_select)){
                    echo "<option value='".$row["user_email"]."'> <img src='../imgs/usersImages/".$row["user_image"]."'class = 'account-image' > <h4>".$row["last_name"]." ".$row["first_name"]."</h4> </option>";
                   }
                   ?>
                </select>
              </div>
            </div>
              <!-- <img src="../imgs/userIcon.png" class = "account-image" alt=""> <h4>Compte Personnel</h4>          -->
          </div>
              </div>
          <div class="field-container">
            <label for="">Emplacement : </label>
            <div name="emplacements" class="searchable-dropdown" id="searchable-dropdown">
              <div class="searchable-dropdown-group">
                <span class="searchable-dropdown-arrow"></span>
                <select name="emplacement" id="emplacement" class="dropdown" id ="dropdown">
                   <option disabled>Selectionner l'emplacement de la livraison</option>
                </select>
              </div>
            </div>     
          </div>  
          <div class ="date-picker">
            <label for="date" >
              Date et heure de création : 
            </label>
              <input type="text" name="date_creation" id="datetime-picker2" placeholder="Select date and time">   
            </div>
            <div class="field-container">
              <label>Méthode de contact 
                </label>
                <div class="custom-select" style="width:200px;">
                  <select name="methode_contact">
                    <option name = "methode_de_contact" value="email">email</option>
                    <option name = "methode_de_contact" value="email">email</option>
                    <option name = "methode_de_contact" value="téléphone">téléphone</option>
                  </select>
                </div>
          </div>
    </fieldset>
      <fieldset>
        <legend><i class="fa-solid fa-chevron-down"></i>Classification</legend>

          
            <div id="wrapwrap" style=" height:40px; margin-bottom:40px">
              <div class="field-container" >
                  <label>Urgence
                    </label>
                    <div name="state" class="custom-select" style="width:300px; height:40px">
                      <select name="urgence">
                        <option disabled>degré d'urgence</option>
                        <option name = "urgence" value="Urgence Mineure">Le problème ne m'empêche pas de terminer mon travail</option>
                        <option name = "urgence" value="Urgence Modérée">Le problème pourrait ralentir ma progression</option>
                        <option name = "urgence" value="Urgence Moyenne">Le problème entrave significativement ma capacité à travailler  </option>
                        <option name = "urgence" value="Urgence Majeure">Le problème m'empêche complètement de continuer mon travail </option>
                      </select>
                    </div>
              </div>
              </div>
              <div class="field-container">
                <label for="">catégorie : </label>
                <div  class="searchable-dropdown" id="searchable-dropdown1">
                  <div class="searchable-dropdown-group" id="searchable-dropdown-group1">
                    <span class="searchable-dropdown-arrow" id="searchable-dropdown-arrow1"></span>
                    <select name="catégorie" id="catégorie" class="dropdown1">
                       <option disabled>Selectionner la catégorie</option>
                    </select>
                  </div>
                </div>     
              </div> 
      </fieldset>         
            
      
     
     
      <input type="submit" id="submit" value="Soumission">
    </form>
  </div>
</div>



<script src="../js/textEditor.js"></script>
<script src="../js/demandeDeService.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
<script src="../js/datepicker.js"></script>
<script src="../js/fetchEmplacement.js"></script>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $titre = $_POST["titre"];
  $demandé_par = $_POST["createur"];
  $demandé_pour = $_POST["demandé_pour"];
  $date_de_création = $_POST["date_creation"];
  $emplacement = $_POST["emplacement"];
  $methode_contact = $_POST["methode_contact"];
  $urgence = $_POST["urgence"];
  $categorie = $_POST["catégorie"];
  $insert_query="INSERT INTO service (titre,demandé_par,demandé_pour,date_de_création,emplacement,contact_method,urgence,categorie) VALUES ('".$titre."','".$demandé_par."','".$demandé_pour."','".$date_de_création."','".$emplacement."','".$methode_contact."','".$urgence."','".$categorie."');";
  $result_insert = mysqli_query($conn , $insert_query);

  if ($result_insert) {
    echo "<script>location.href='../utilisateur/interface_util.php';</script>";
  } else {
    echo "Error: " . mysqli_error($connection);
  }


}
?>
</body>

</html>