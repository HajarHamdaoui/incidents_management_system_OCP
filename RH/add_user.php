<?php
session_start();
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
            <!-- <li><a href="#">Mode Admin</a></li> -->
            <li> 
              <div class="account-container">
             
              <img src=<?php echo" ../imgs/usersImages/".$_SESSION["user_image"] ?> class = "logo-image" alt=""> <h3><?php echo $_SESSION['user_last_name']." ".$_SESSION['user_first_name']; ?></h3>
              
              </div>
            </li>  
            <li>
             <a href="../RH/interface_RH.php" class="home-link">
            <div class="account-container">
             <i class="fas fa-home"></i> 
            </div>
            </a>
            </li>


            <!-- <li> <a href="../RH/interface_RH.php">
              <div class="account-container">
                   <i class="fas fa-home"></i> <h3>Home</h3>
              </div>
            </a> </li>   -->

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
      <h1 id="title">Informations nouvel employé</h1>
      <!-- <p id="description">A utiliser quand le service demandé ne figure pas dans le catalogue.</p> -->
    </div>
    <form action="" id="survey-form">
        <fieldset>
            <legend> <i class="fa-solid fa-chevron-down"></i>Details de l'employé :</legend>
            <div id="wrapwrap">
                <!-- <div class="field-container">
                    <label for="Matricule">Matricule OCP</label>
                    <input type="matricule" name="matricule" id="titre">
                </div>  -->
            <div class="field-container">
              <label for="titre">Nom</label>
              <input type="text" name="nom" id="titre">
            </div>   
            <div class="field-container">
                <label for="titre">Prenom</label>
                <input type="text" name="prenom" id="titre">
            </div>   
            <div class="field-container">
                <label for="CIN">CIN</label>
                <input type="text" name="cin" id="titre">
            </div> 
            <div class="field-container">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="titre">
            </div>
            <div class="field-container">
                <label for="numéro_de_téléphone">Numéro de téléphone</label>
                <input type="text" name="numéro_de_téléphone" id="titre">
            </div> 
            <div class="field-container">
                <label for="">Adresse postale</label>
                <input type="adresse postale" name="adresse" id="titre">
            </div>
           
            <div class="field-container">
                <label for="titre">Date de naissance </label>
                <input type="date" name="date" id="titre">
            </div>            
            <div class="field-container">
                <label for="Civilité">Sexe</label>
                <div name="Civilité" class="searchable-dropdown" id="searchable-dropdown">
                  <div class="searchable-dropdown-group">
                     <span class="searchable-dropdown-arrow"></span>
                     <select name="Civilité" id="Civilité" class="dropdown">
                        <option disabled>Selection </option>
                        <option value="">Femme</option>
                        <option value="">Homme</option>
                     </select>
                  </div>
                </div>     
              </div>
            <div class="field-container">
                <label for="">Permis de conduire</label>
                <div name="permis de conduire" class="searchable-dropdown" id="searchable-dropdown">
                  <div class="searchable-dropdown-group">
                     <span class="searchable-dropdown-arrow"></span>
                     <select name="permis de conduire" id="permis de conduire" class="dropdown">
                        <option disabled>Selection permis de conduire</option>
                        <option value="Casablanca">Aucun</option>
                        <option value="Khouribga">B</option>
                        <option value="Boucraa">C</option>
                        <option value="Youssoufia">D</option>
                     </select>
                  </div>
                </div>     
              </div> 
      

                <!-- <div class ="date-picker">
                  <label for="date" >
                    Date de naissance : 
                  </label>
                    <input type="text" id="date-picker" placeholder="Ajout date de naissance">   
                </div> -->
              <!-- <div class="field-container">
                <label for="">Crée par : </label>
                <div class="account-container">
                  <img src="../imgs/userIcon.png" class = "account-image" alt=""> <h4>Compte Personnel</h4>         
              </div>
              </div> -->
            <!-- <div class="field-container">
                <label for="">Demandé pour : </label>
                <div class="account-container">
                  <img src="../imgs/userIcon.png" class = "account-image" alt=""> <h4>Compte Personnel</h4>         
                </div>
            </div> -->
              <div class="field-container">
                <label for="">Local</label>
                <div name="emplacements" class="searchable-dropdown" id="searchable-dropdown">
                  <div class="searchable-dropdown-group">
                     <span class="searchable-dropdown-arrow"></span>
                     <select name="emplacement" id="emplacement" class="dropdown">
                        <option disabled>Selection de l'emplacement</option>
                        <option value="Casablanca">Casablanca</option>
                        <option value="Khouribga">Khouribga</option>
                        <option value="Boucraa">Boucraa</option>
                        <option value="Youssoufia">Youssoufia</option>
                        <option value="Safi">Safi</option>
                     </select>
                  </div>
                </div>     
              </div>  
                     
        </fieldset>
      
      <fieldset>
      
       
      <legend> <i class="fa-solid fa-chevron-down"></i>Poste occupé au sein de l' OCP :</legend>
      <div class="field-container">
        <label for="Civilité">Poste :</label>
        <div name="postes" class="searchable-dropdown" id="searchable-dropdown4">
              <div class="searchable-dropdown-group4">
                <span class="searchable-dropdown-arrow"></span>
                <select name="poste" id="poste" class="dropdown4" id ="dropdown3">
                   <option disabled>Selectionner le poste de l'utilisateur</option>
                </select>
              </div>
            </div> 
</div>
       
      </fieldset>

      <fieldset>
        <legend><i class="fa-solid fa-chevron-down"></i>Catégorisation et Affectation :</legend>
       
          <div class="field-container">
            <label for="Groupe d'affectation">Groupe d'affectation</label>
            <div name="Groupe d'affectation" class="searchable-dropdown" id="searchable-dropdown">
              <div class="searchable-dropdown-group">
                 <span class="searchable-dropdown-arrow"></span>
                 <select name="emplacement" id="emplacement" class="dropdown">
                    <option disabled>Selection de Groupe d'affectation</option>
                    <option value="Casablanca">M</option>
                    <option value="Khouribga">M</option>
                    <option value="Boucraa">M</option>
                 </select>
              </div>
            </div>     
          </div>
          
      </fieldset>

      <fieldset>
        <legend><i class="fa-solid fa-chevron-down"></i>Ajouter plus d'Informations sur l'employé :</legend>
          <textarea name="additional-comments" id="additional-comments" cols="30" rows="10"></textarea>
      </fieldset>


     


     


    

      <input type="submit" id="submit" value="Soumission">

    </form>
  </div>
</div>




<script src="../js/demandeDeService.js"></script>
<script src="../js/searchabledropdown.js"></script>
<script src="../js/fetchEmplacement.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
<script src="../js/datepicker.js"></script>

</body>

</html>