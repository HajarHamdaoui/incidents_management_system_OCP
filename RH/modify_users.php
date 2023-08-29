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
  <div class="container">
  <h2>Modifiez les informations des utilisateurs</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="mycol mycol-1 collo">Le nom: </div>
      <div class="mycol mycol-2">Le prénom: </div>
      <div class="mycol mycol-3">Modifier</div>
      <div class="mycol mycol-4">Supprimer</div>
    </li>
    <?php
    while($row=mysqli_fetch_assoc($result_select_users) )
    {

        echo '    <li class="table-row">
        <div class="mycol mycol-0"><img src="../imgs/usersImages/'.$row["user_image"].'" class="user-image"></div>
        <div class="mycol mycol-1" data-label="Nom">'.$row['last_name'].'</div>
        <div class="mycol mycol-2" data-label="Prénom">'.$row['first_name'].'</div>
        <div class="mycol mycol-3" > <button class="ms-button">Modifier</button></div>
        <div class="mycol mycol-4" >   <!-- Button trigger modal -->
        <button type="button" class="ms-button" data-toggle="modal" data-target="#exampleModal">
          Supprimer
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Supprimer</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Etes-vous sure ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <form method="POST"><button type="submit" name = "confirm-ok'.$row['user_id'].'"  class="ms-button confirm-ok'.$row['user_id'].'" >Oui</button></form>
              </div>
            </div>
          </div>
        </div>
      </li>';

   

    }
$result_select_users1=mysqli_query($conn,$select_users_query);
    while($row=mysqli_fetch_assoc($result_select_users1) ){
      if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["confirm-ok".$row['user_id']])) {
          echo "<script>console.log(".$row['user_id'].")</script>";
   

          $delete_query="DELETE FROM user WHERE user_id='".$row['user_id']."';";
    
          $delete_result=mysqli_query($conn,$delete_query);
    
          echo "<script>location.reload();</script>";
        }  
      }
    
    }



    ?>
  </ul>
</div>  

</body>

