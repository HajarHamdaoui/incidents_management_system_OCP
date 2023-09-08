<?php
session_start();
include("../includes/connect.php");
include("../includes/tricky_functions.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/demandedeserviceForm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/searchable-dropdown.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="../css/datepicker.css">

    <style>
      .fields-wrapper{
        margin:20px;

      }
      .remarque{
        padding:20px;
        color:white;
        font-size:22px;
      }
      .detail{
        margin:10px;
        padding:0;
        overflow-x: scroll;
        border: solid 1px black;
        
      }
      .diagno{
        margin:10px;
        padding:10px;
        border: solid 1px black;
        width:600px;

      }
      .comment{position:relative;
      }
     
      input{
        padding:10px 20px;
        font-size:15px;
      }
      fieldset{

        padding-bottom:20px;
      }
      .quill-container{
        margin:10px;
      }
      .comment_btn{
  
    position: absolute;
    bottom: 0;
    right: 20px;
    padding: 5px 10px;
    z-index: 2;
  }
      

      .commentaire{
        position: relative;
        margin-left:60px;
        width:520px;
      }
      textarea{
        padding:20px;
        font-size:18px;
        overflow:hidden;  
      }
    </style>




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
            <li><a href="heeeeee?user_id=">  
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
    <div  class="fields-wrapper" >
      
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
            <div style="display:block">
              <div class="field-container">
                <label>Méthode de contact </label>
                <div class="contact"><?php echo $user_info["contact_method"]; ?></div>
              </div>
                <div class="cordonnées" style="display:block"> <div> Email : <?php echo $demande_pour_info["user_email"];  ?></div><div>Téléphone : <?php echo $demande_pour_info["user_phone"];  ?></div></div>

          </div>
    </fieldset>
      <fieldset>
        <legend><i class="fa-solid fa-chevron-down"></i>Classification</legend>

          
            <div id="wrapwrap" style=" height:100px; margin-bottom:40px">
              <div class="field-container" >
                  <label>Urgence
                    </label>
                    <div class="urgence"><?php echo $user_info["urgence"]; ?></div>

              </div>
              <div class="field-container">
                <label for="">catégorie : </label>
                <div class="catégorie"><?php echo $user_info["categorie"]; ?></div>
              </div>
              <div class="field-container">
              
                <label for="civilité">Etat</label>
                <div><?php echo $user_info["état"]; ?></div>
            </div>
             </fieldset>
             <fieldset>
              <legend><i class='fa-solid fa-chevron-down'></i>Traçabilité des Opérations :</legend>

                <ul style = "margin-left:35px; margin-top:20px;">
                  <li>Demandé par : <?php echo "<b>". $demande_pour_info["last_name"]." ".$demande_pour_info["first_name"]." </b>"?> <?php $date = substr($user_info["date_de_création"], 0, 10);
        $heure = substr($user_info["date_de_création"], 11);

        $formatted_date = "le <b>" . $date . "</b> à <b>" . $heure."</b>";
                echo $formatted_date; ?></li>
                  <li> Transmise au niveau L0</li>
                  <?php if($user_info["prise_L0_par"]!=NULL){
                  $select_prise_L0_par_query="SELECT * FROM user where user_email='".$user_info["prise_L0_par"]."'";
                  $result_select_prise_L0_par=mysqli_query($conn,$select_prise_L0_par_query);
                  $prise_L0_par_row=mysqli_fetch_assoc($result_select_prise_L0_par);
                  echo "<li>Prise en charge dans le niveau L0 par :<b>".$prise_L0_par_row["last_name"]." ".$prise_L0_par_row["first_name"]."</b></li>";
                } 
                ?>
                </ul>
            



                <div></div>
                <div class="viewers-label"><i class="fa-solid fa-eye" ></i><label style="padding-left:30px;">   Vu par : </label></div>
              <div class="viewers">

              <?php 
              $viewers=$user_info["Vu_par"].$_SESSION["user_email"]."__";
            

                    $update_viewers="UPDATE services set Vu_par='".$viewers."' where id=".$user_info["id"];
                    mysqli_query($conn,$update_viewers);
                    $viewers_array=extractSubstrings($viewers);
                    foreach($viewers_array as $viewer)
                    {
                      $viewer_select="SELECT * FROM user where user_email='".$viewer."'";
                      $result_viewer_select=mysqli_query($conn,$viewer_select);
                      $viewer_row=mysqli_fetch_assoc($result_viewer_select);
                      echo "
                      <div class='account-container'>
                      <img src='../imgs/usersImages/".$viewer_row['user_image']."' class='logo-image' alt=''> 
                      <h3>".$viewer_row['last_name'].' '.$viewer_row['first_name']."</h3> 
                      </div>         
                      ";

                    }

               ?>
             
              
      

              </div>

            


              

               

            
             </fieldset>
             <?php
             if($user_info["état"]=="ouverte au niveau L0" && $user_info["prise_L0_par"]==NULL && $_SESSION['niveau']=="L0" )
             {
                echo '             <form action="" method="post">
                <fieldset>
                  <legend>Prise en charge de la demande : </legend>
                  <button type = "submit" class="submit" name="prise_en_charge_L0">Je prend en charge la demande</button>
                </fieldset>
               </form>';
               if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["prise_en_charge_L0"]))
               {
                 $update_query_L0="update services SET état='En cours de traitement en L0', prise_L0_par='".$_SESSION["user_email"]."' WHERE id=".$user_info["id"];
                 mysqli_query($conn,$update_query_L0);
               }
             }
             if($user_info["état"]=="ouverte au niveau L1" && $user_info["prise_L1_par"]==NULL && $_SESSION['niveau']=="L1")
             {
              echo '
              <form action="" method="post">
              <fieldset>
                <legend>Prise en charge de la demande : </legend>
                <button type = "submit" class="submit" name="prise_en_charge_L1">Je prend en charge la demande</button>
              </fieldset>
             </form>
              ';
              if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["prise_en_charge_L1"]))
              {
                $update_query_L1="update services SET état='en cours de traitement en L1', prise_L1_par='".$_SESSION["user_email"]."' WHERE id=".$user_info["id"];
                mysqli_query($conn,$update_query_L1);

              }
          
          
             }
              ?>
<?php 
      if($user_info["prise_L1_par"]!=NULL || $user_info["prise_L0_par"]!=NULL)
      {
        $select_remarques_internes_query="SELECT * FROM remarques_services WHERE type_service ='interne' AND service_id=".$user_info["id"]." AND niveau='".$_SESSION["niveau"]."' ORDER BY date_de_remarque DESC";
        $result_select_remarques_internes=mysqli_query($conn,$select_remarques_internes_query);
        
        $select_remarques_externes_query="SELECT * FROM remarques_services WHERE type_service ='externe' AND service_id=".$user_info["id"]." ORDER BY date_de_remarque DESC";
        $result_select_remarques_externes=mysqli_query($conn,$select_remarques_externes_query);
        if(mysqli_num_rows($result_select_remarques_externes)>0 || mysqli_num_rows($result_select_remarques_internes)>0 || $user_info["diagnostique"]!=NULL )
        {
          echo "<fieldset>    
          <legend><i class='fa-solid fa-chevron-down'></i>Analyse</legend>
            ";
            if($user_info["diagnostique"]!=NULL)
            {
                echo ' <div class="quill-container">
                <label class ="diagnostic-label"for="editor" >Diagnostique préliminaire : </label>
  
                <div class="diagno">'.$user_info["diagnostique"].'</div>
  
            </div>';

            }
            $connected_user_groups=extractSubstrings($_SESSION['affectation_groups']);
            $service_groups=extractSubstrings($user_info["groupes_affectation"]);
            if(mysqli_num_rows($result_select_remarques_internes)>0 && hasIntersection($connected_user_groups,$service_groups))
            {
              echo ' <div class="quill-container">
              <label class ="remarque-label" for="editor" >Remarques internes : </label>';
              while($row=mysqli_fetch_assoc($result_select_remarques_internes)){

                  echo '<div class="detail">'.$user_info["diagnostique"].';</div>';
                
              }
              echo "</div>";
            }
            if(mysqli_num_rows($result_select_remarques_externes)>0)
            {
              echo ' <div class="quill-container">
              <label class ="remarque-label" for="editor" >Remarques externes : </label>';
              while($row=mysqli_fetch_assoc($result_select_remarques_externes))
              {
                $select_operateur_query="SELECT * FROM user WHERE user_email='".$row["opérateur"]."'";
                $result_select_operateur=mysqli_query($conn,$select_operateur_query);
                $operateur=mysqli_fetch_assoc($result_select_operateur);
                  echo '<div class="speech-bubble"><div class="account-container" >
                  <img src="../imgs/usersImages/'.$operateur["user_image"].'" class="logo-image" alt=""> 
                  <h3 style="color:white">'.$operateur["last_name"]." ".$operateur["first_name"].'</h3>
              
              </div><div style="color:white">-------------------------------------------------------------------------------------------------</div><div class="remarque">'.$row["remarque"].'</div></div>';

              $select_comments_query="SELECT * FROM commentaires_services WHERE id_service=".$row["service_id"]." AND remarque_id=".$row["remarque_id"]." ORDER BY date_de_création;";
              $result_select_comments=mysqli_query($conn,$select_comments_query);
              while($comment=mysqli_fetch_assoc($result_select_comments))
              {
                $select_commenteur_query="SELECT * FROM user WHERE user_email='".$comment["opérateur"]."'";
                $result_select_commenteur=mysqli_query($conn,$select_commenteur_query);
                $commenteur=mysqli_fetch_assoc($result_select_commenteur);

                echo '<div class="speech-bubble speech-bubble2"><div class="account-container" >
                <img src="../imgs/usersImages/'.$commenteur["user_image"].'" class="account-image" alt=""> 
                <h3 style="color:white">'.$commenteur["last_name"]." ".$commenteur["first_name"].'</h3>
            
            </div><div style="color:white">--------------------------------------------------------------</div><div class="remarque">'.$comment["commentaire"].'</div></div>';}
            echo '<form method="post"><textarea class="commentaire" placeholder="Ecrivez un commentaire ..." name="commentaire_'.$row["remarque_id"].'"></textarea><div style="display:flex;justify-content:center;"><i class="fa-solid fa-paper-plane" style="color: #3abb16;"></i><input name ="sub_comment_'.$row["remarque_id"].'" style = "background-color:transparent;border:none;color:#3abb16;font-size:18px" type ="submit" value="envoyer" ></div></form>';
            if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["commentaire_".$row["remarque_id"]]))
            {
              $dateHeureActuelles1 = date('Y-m-d H:i:s');

              

          
              $insert_comment_query="INSERT INTO commentaires_services (id_service,date_de_création,commentaire,opérateur,remarque_id) VALUES('".$user_info["id"]."','".$dateHeureActuelles1."','".$_POST["commentaire_".$row["remarque_id"]]."','".$_SESSION["user_email"]."',".$row["remarque_id"].");";
              mysqli_query($conn,$insert_comment_query);
            }
              


              ;
 
                }

              if(mysqli_num_rows($result_select_remarques_internes)>0)
              {
                echo ' <div class="quill-container">
                <label class ="remarque-label" for="editor" >Remarques internes : </label>';
                while($row=mysqli_fetch_assoc($result_select_remarques_internes)){
                    echo '<div class="speech-bubble">'.$row["remarque"].' </div>';    
                  }
                }
            
            echo "</fieldset>";

        }
}
        echo "
        <fieldset>    
      <legend><i class='fa-solid fa-chevron-down'></i>Résolution</legend>
      <form action='' method='post' id='résolution'>
        ";
        if($user_info["diagnostique"]==NULL && $_SESSION['niveau']=="L0")
        {
          echo " <div class='quill-container'>
          <label class ='diagnostic-label' for='editor' >Diagnostique préliminaire : </label>
          <textarea  name='diagnostic'  ></textarea></div>";}

    echo "
    <div class='field-container' style ='margin:50px 0'>
    <label for=''>Type d'action : </label>
          <div name='actions' style='width:160px' class='searchable-dropdown' id='searchable-dropdown2'>
            <div class='searchable-dropdown-group' id='searchable-dropdown-group2'>
              <span class='searchable-dropdown-arrow' id='searchable-dropdown-arrow2'></span>
              <select name='action' id='action' class='dropdown2'>
                 <option disabled>Selectionner le type d'action</option>
              </select>
            </div>         
    </div>
    </div>";
    if($_SESSION['user_email']==$user_info["prise_L0_par"] ||$_SESSION['user_email']==$user_info["prise_L1_par"] )
    {echo "<div class='field-container' style ='margin:50px 0'>
    <label for=''>Changement d'état : </label>
    <div name='états' style='width:160px' class='searchable-dropdown' id='searchable-dropdown2'>
    <div class='searchable-dropdown-group' id='searchable-dropdown-group2'>
      <span class='searchable-dropdown-arrow' id='searchable-dropdown-arrow2'></span>
      <select name='état' id='action' class='dropdown2'>
         <option value =".$user_info['état']."> Laisser l'état actuelle : ".$user_info['état']."</option>
         <option value= 'Attente utilisateur'>Attente utilisateur</option>
         <option value= 'Attente fournisseur'>Attente fournisseur</option>";
         if($_SESSION["niveau"]=="L0"){
          echo"<option value= 'Cloturé au niveau L0 '>Cloturé au niveau L0</option>";
         }else{
          echo"<option value= 'Cloturé au niveau L1 '>Cloturé au niveau L1</option>";

         }
         echo " </select>
        </div></div></div>";


   echo "<div class='quill-container'>
    <label class ='diagnostic-label' for='editor' >Ajout d'une remarque externe : </label>
    <textarea type='text' name='remarque_externe' ></textarea>
</div>
<div class='quill-container'>
      <label >Ajout d'une remarque interne : </label>
    <textarea type='text' name='remarque_interne'></textarea>
</div>
<input type='submit'  name='résolution_sub' class='submit' value='submit'>

</form>   
  </fieldset>
    
 
   
    ";
        }
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["résolution_sub"]))
    {
      $update_état_query="UPDATE services SET état ='".$_POST["état"]."' WHERE id=".$user_info["id"];
      echo $update_état_query;
      $dateHeureActuelles = date('Y-m-d H:i:s');

      if(isset($_POST["diagnostic"]) && $_POST["diagnostic"]!=NULL)
      {
        echo $_POST["diagnostic"];

        $update_résolution_query="UPDATE services SET diagnostique ='".$_POST["diagnostic"]."' WHERE id=".$user_info["id"];
        echo $update_résolution_query;
        mysqli_query($conn,$update_résolution_query);
    }

  
    if($_POST["remarque_interne"]!=NULL)
    {
      $insert_remarque_interne="INSERT INTO remarques_services (service_id,remarque,opérateur,type_service,date_de_remarque,niveau) VALUES('".$user_info["id"]."','".$_POST["remarque_interne"]."','".$_SESSION["user_email"]."','interne','".$dateHeureActuelles."','".$_SESSION["niveau"]."')";
      mysqli_query($conn,$insert_remarque_interne); 

    }

    if($_POST["remarque_externe"]!=NULL)
    {
      $insert_remarque_externe="INSERT INTO remarques_services (service_id,remarque,opérateur,type_service,date_de_remarque) VALUES('".$user_info["id"]."','".$_POST["remarque_externe"]."','".$_SESSION["user_email"]."','externe','".$dateHeureActuelles."')";
      mysqli_query($conn,$insert_remarque_externe);
    }
  }
  
  if($_SESSION['user_email']==$user_info["prise_L0_par"] ||$_SESSION['user_email']==$user_info["prise_L1_par"] )
  {
    $select_groups_L1_query="SELECT * FROM `groupes` WHERE niveau='L1'";
    $result_select_groups_L1=mysqli_query($conn,$select_groups_L1_query);
    $result_select_groups_L1_copy1=mysqli_query($conn,$select_groups_L1_query);
    $result_select_groups_L1_copy2=mysqli_query($conn,$select_groups_L1_query);
    $groups_L1_array=[];
    while($group=mysqli_fetch_assoc($result_select_groups_L1))
    {
      array_push($groups_L1_array,$group["name"]);
    }


    echo "   <form method ='post' id='affectation'><fieldset>     <legend><i class='fa-solid fa-chevron-down'></i>Affectation : </legend>       
    <div id='wrapwrap' style=' height:100px; margin-bottom:40px'>";
      if(!hasIntersection($groups_L1_array,extractSubstrings($user_info["groupes_affectation"]))){

        echo       "<div class='field-container'> <label for='Affectation'>
        Affectation 
      </label>
         <div  style='width:160px' class='searchable-dropdown' id='searchable-dropdown'>
      <div class='searchable-dropdown-group' id='searchable-dropdown-group'>
        <span class='searchable-dropdown-arrow' id='searchable-dropdown-arrow'></span>
        <select name='groups_daffectation_L1' id='groups' class='dropdown'>";
    while($group=mysqli_fetch_assoc($result_select_groups_L1_copy1)){
      echo "<option value=".$group["name"].">".$group["name"]."</option>";
    }
    echo"
    </select></div>
    </div></div></div>";


      } // no group L1 affected to the service
      $groups_affectation=extractSubstrings($_SESSION["affectation_groups"]);
      if($user_info["prise_L1_par"]!=NULL &&$user_info["prise_L1_par"]==$_SESSION["user_email"])
      {
        echo "<div class='field-container' '> <label for='Réaffectation'>
        Réaffectation à un autre groupe :  
      </label>
      <div name='group_de_réafectation_L1' style='width:160px;' class='searchable-dropdown' id='searchable-dropdown'>
      <div class='searchable-dropdown-group' id='searchable-dropdown-group'>
        <span class='searchable-dropdown-arrow' id='searchable-dropdown-arrow'></span>
        <select name='réaffectation_group' id='groups' class='dropdown'><option>Ne pas affecter</option>";

        while($group=mysqli_fetch_assoc($result_select_groups_L1_copy2)){
          echo "<option value='".$group["name"]."'>".$group["name"]."</option>";
        }
        echo"
        </select></div>
        </div></div></div>";
        echo "<div class='field-container justification-wrap'> <label for='Justification'>
        Justification de réaffectation :  
      </label>
      <input name='justification_de_réaffectation' id='justification' class='justification'></div><input type = 'submit' class='submit' id='affectation_sub' name ='affectation' value='submit'></fieldset> </form>";
      }

      if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["affectation"]))
      {
        if(isset($_POST["groups_daffectation_L1"]) && $_POST["groups_daffectation_L1"]!=NULL)
        {
          $groups=$user_info["groupes_affectation"].$_POST["groups_daffectation_L1"]."__";
          $update_groups_query="update  services SET groupes_affectation ='".$groups."',état='ouverte au niveau L1' WHERE id=".$user_info["id"];
          mysqli_query($conn,$update_groups_query);
        }
        if(isset($_POST["réaffectation_group"]) && $_POST["réaffectation_group"]!=NULL)
        {
          if($_POST['justification_de_réaffectation']==NULL)
          {
            echo "<script>myinput=document.getElementById('justification');myinput.placeholder='* Veuillez remplir ce champs';</script>";
          }else{
            $insert_reaffectation_query="INSERT INTO réaffectation (service_id,réaffecté_par,justification,groupe) VALUES (".$user_info["id"].",'".$_SESSION["user_email"]."','";

          }
        }


      }


  }

  
  } //Prise en charge 



?>           
      
            
   

      
            



          



  </div>
</div>
</div>
<?php 

?>

<script src="../js/searchabledropdown.js"></script>
<script>dropdown("");</script>

<script src="../js/demandeDeService.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
<script src="../js/datepicker.js"></script>
<script src="../js/fetchEmplacement.js"></script>










</body>

</html>


<!-- <div name='états' style='width:160px' class='searchable-dropdown' id='searchable-dropdown'>
    <div class='searchable-dropdown-group' id='searchable-dropdown-group'>
      <span class='searchable-dropdown-arrow' id='searchable-dropdown-arrow'></span>
      <select name='état' id='groups' class='dropdown'>

         </select>
        </div></div></div>"; -->
