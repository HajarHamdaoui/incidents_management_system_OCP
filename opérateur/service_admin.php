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
            <li><a href="../utilisateur/interface_util.php">Mode utilisateur</a></li>
            <li>
              <div class="account-container">
                  <img src=<?php echo "../imgs/usersImages/".$_SESSION["user_image"] ?> class="logo-image" alt=""> 
                  <h3><?php echo $_SESSION["user_last_name"]." ".$_SESSION["user_first_name"] ?></h3>
              
              </div>
          </li>   
          <li>
             <a href="../opérateur/interface_admin.php" class="home-link">
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
    <form action="" id="survey-form">
      <fieldset>
        <legend> <i class="fa-solid fa-chevron-down"></i>Transition</legend>
        <div id="wrapwrap">
        <div class="field-container">
            <label>Etat
              </label>
              <div class="custom-select" style="width:200px;">
                <select>
                  <option name = "etat" value="Assigned">Assigned</option>
                  <option name = "etat" value="Open">Open</option>
                  <option name = "etat" value="En cours">En cours</option>
                  <option name = "etat" value="Attente utilisateur">Attente utilisateur</option>
                  <option name = "etat" value="Attente fournisseur">Attente fournisseur</option>
                  <option name = "etat" value="Resolved">Resolved</option>
                  <option name = "etat" value="Closed">Closed</option>
                  <option name = "etat" value="Terminé">Terminé</option>
                </select>
              </div>
        </div>
        </div>
      </fieldset>
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
                <div id="editor"></div>
            </div>
          <div class ="date-picker">
              <label for="date" >
                Date|heure de résolution prévue : 
              </label>
                <input type="text" id="datetime-picker" placeholder="Select date and time">   
              </div>
          <div class="field-container">
            <label for="">Crée par : </label>
            <div class="account-container">
              <img src="../imgs/userIcon.png" class = "account-image" alt=""> <h4>Compte Personnel</h4>         
          </div>
          </div>
          <div class="field-container">
            <label for="">Demandé pour : </label>
            <div class="account-container">
              <img src="../imgs/userIcon.png" class = "account-image" alt=""> <h4>Compte Personnel</h4>         
          </div>
              </div>
          <div class="field-container">
            <label for="">Emplacement de livraison : </label>
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
              <input type="text" id="datetime-picker2" placeholder="Select date and time">   
            </div>
            <div class="field-container">
              <label>Méthode de contact 
                </label>
                <div class="custom-select" style="width:200px;">
                  <select>
                    <option name = "methode_de_contact" value="email">email</option>
                    <option name = "methode_de_contact" value="email">email</option>
                    <option name = "methode_de_contact" value="téléphone">téléphone</option>
                  </select>
                </div>
          </div>
          <div class="quill-container">
            <label class ="remarques-label"for="editor" >Remarques : </label>
            <div id="editor-remarques"></div>
        </div>
    </fieldset>
      <fieldset>
        <legend><i class="fa-solid fa-chevron-down"></i>Classification</legend>

          <div id="wrapwrap">
            <div class="field-container">
                <label>Priorité
                  </label>
                  <div class="custom-select" style="width:200px;">
                    <select>
                      <option name = "etat" value="p1">p1 (Important)</option>
                      <option name = "etat" value="p2">p2 (Modéré) </option>
                      <option name = "etat" value="p3">p3 (Léger) </option>
                      <option name = "etat" value="p4">p4 (Minime) </option>
                    </select>
                  </div>
            </div>
            </div>
            <div id="wrapwrap" style=" height:40px; margin-bottom:40px">
              <div class="field-container" >
                  <label>Urgence
                    </label>
                    <div class="custom-select" style="width:300px; height:40px">
                      <select>
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
                <div name="emplacements" class="searchable-dropdown" id="searchable-dropdown1">
                  <div class="searchable-dropdown-group" id="searchable-dropdown-group1">
                    <span class="searchable-dropdown-arrow" id="searchable-dropdown-arrow1"></span>
                    <select name="catégorie" id="catégorie" class="dropdown1">
                       <option disabled>Selectionner la catégorie</option>
                    </select>
                  </div>
                </div>     
              </div> 
              <div class="field-container">
                <label for="">Type d'action : </label>
                <div name="actions" class="searchable-dropdown" id="searchable-dropdown2">
                  <div class="searchable-dropdown-group" id="searchable-dropdown-group2">
                    <span class="searchable-dropdown-arrow" id="searchable-dropdown-arrow2"></span>
                    <select name="action" id="action" class="dropdown2">
                       <option disabled>Selectionner le type d'action</option>
                    </select>
                  </div>
                </div>     
              </div> 
              <div class="field-container" >
                <label>Etendue  :
                  </label>
                  <div class="custom-select" style="width:200px; height:40px">
                    <select>
                      <option disabled>Etendue</option>
                      <option name = "etendue" value="publique">Publique</option>
                      <option name = "etendue" value="privé Modérée">Privé</option>
                    </select>
                  </div>
      </fieldset>
      <fieldset>
        <legend><i class="fa-solid fa-chevron-down"></i>Offre de catalogue</legend>
        <div class="field-container">
          <label for="">Nom du demandeur : </label>
          <div class="account-container">
            <img src="../imgs/userIcon.png" class = "account-image" alt=""> <h4>Compte Personnel</h4>         
        </div>
        </div>
        <div class="field-container">
          <label for="">Adresee email du demandeur : </label>
          <div name="adresse_email">user@gmail.com</div>
          </div>
          <div class="field-container">
            <label for="">Emplacement du demandeur : </label>
            <div name="emplacements" class="searchable-dropdown" id="searchable-dropdown3">
              <div class="searchable-dropdown-group3">
                <span class="searchable-dropdown-arrow"></span>
                <select name="emplacement_demandeur" id="emplacement_demandeur" class="dropdown3" id ="dropdown3">
                   <option disabled>Selectionner votre emplacement</option>
                </select>
              </div>
            </div>     
          </div> 
      </fieldset>
      <fieldset>
        <legend><i class="fa-solid fa-chevron-down"></i>Affectation</legend>

      </fieldset>
      <fieldset>
        <legend><i class="fa-solid fa-chevron-down"></i>Abonnés</legend>
          <textarea name="additional-comments" id="additional-comments" cols="30" rows="10"></textarea>
      </fieldset>
      <fieldset>
        <legend><i class="fa-solid fa-chevron-down"></i>Résolution</legend>
          <textarea name="additional-comments" id="additional-comments" cols="30" rows="10"></textarea>
      </fieldset>
      <fieldset>
        <legend><i class="fa-solid fa-chevron-down"></i>Pièces-jointes</legend>
          <textarea name="additional-comments" id="additional-comments" cols="30" rows="10"></textarea>
      </fieldset>
      <input type="submit" id="submit" value="Submit">
    </form>
  </div>
</div>



<script src="../js/textEditor.js"></script>
<script src="../js/demandeDeService.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
<script src="../js/datepicker.js"></script>
<script src="../js/fetchEmplacement.js"></script>








</body>

</html>