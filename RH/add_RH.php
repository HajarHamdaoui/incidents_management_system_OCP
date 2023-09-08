<?php 
include("../includes/connect.php");
$select_users_query="SELECT * FROM user ORDER BY last_name, first_name";
$result_select_users=mysqli_query($conn,$select_users_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/modify_users.css">

</head>
<body>
  <div class="container" >
  <h2>Ajouter des Ressources Humaines</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="mycol mycol-1 collo">Le nom: </div>
      <div class="mycol mycol-2">Le prénom: </div>
      <div class="mycol mycol-3">Ajouter_RH</div>
      <div class="mycol mycol-4">Supprimer_RH</div>
    </li>


      <?php
      while ($row = mysqli_fetch_assoc($result_select_users)) {
          echo '<li class="table-row">
              <div class="mycol mycol-0"><img src="../imgs/usersImages/'.$row["user_image"].'" class="user-image"></div>
              <div class="mycol mycol-1" data-label="Nom">'.$row['last_name'].'</div>
              <div class="mycol mycol-2" data-label="Prénom">'.$row['first_name'].'</div>
              <div class="mycol mycol-3"><form method="POST"> <button class="ms-button" type = "submit" name="ajouterRh'.$row['user_id'].'">Ajouter_RH</button></form></div>
              <div class="mycol mycol-4"><form method="POST"> <button class="ms-button" type = "submit" name="supprimerRh'.$row['user_id'].'">Supprimer_RH</button></form>
              </div>


          </li>';
          
      }
      

      ?>
 
  
  </ul>
</div>  


    
    <!-- Other modals... -->

    <!-- Scripts... -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // if post=ajouter_row
   

  

    if (isset($_POST["ajouterRh".$row['user_id']])) {
        $update_query = "UPDATE user SET is_RH = true WHERE user_id = $select_users_query";
        $update_result = mysqli_query($conn, $update_query);

        // if ($update_result) {
        //     header("Location: add_RH.php");
        //     exit;
        // } else {
        //     echo "Erreur lors de l'ajout d'un RH : " . mysqli_error($conn);
        // }
    } 

}
?>
</body>
</html>