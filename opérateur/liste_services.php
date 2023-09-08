<?php
session_start();
include("../includes/connect.php");
include("../includes/tempsRestantCalcul.php");
include("../includes/tricky_functions.php");
echo time();
?>
<html>
    <head>
        <title>Liste des services</title>
    </head>
    <body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/interface_util.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/user_history.css">
    <style>
        nav{
            top:0;
        }
        body{
            background-color:#e2e5e4 ;
            background-image:none;
        }
        fieldset{
            width:500px;
        }

    </style>


    
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
  <h2>Liste des services</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">ID</div>
      <div class="col col-2">Titre</div>
      <div class="col col-3">Etat</div>
      <div class="col col-4">SLA</div>
      <div class="col col-5"></div>
    </li>

    <?php
    $select_admin_groups_query="SELECT affectation_groups FROM user where user_id=".$_SESSION["user_id"];
    $result_select_admin_groups=mysqli_query($conn,$select_admin_groups_query);
    $groups_row=mysqli_fetch_assoc($result_select_admin_groups);
    $groups_string=$groups_row["affectation_groups"];


$admin_groups = extractSubstrings($groups_string);

$conditions = [];
$conditions2 = [];
$conditions3 = [];
$conditions4 = [];
foreach ($admin_groups as $group) {
    $conditions[] = "groupes_affectation LIKE '%__" . $conn->real_escape_string($group) . "__%'";
    $conditions2[]="groupes_affectation LIKE '%__" . $conn->real_escape_string($group). "__'";
    $conditions3[]="groupes_affectation LIKE '__" . $conn->real_escape_string($group)."__%'" ;
    $condition4[]="groupes_affectation LIKE '__" . $conn->real_escape_string($group)."__'" ;

}



    $select_query="SELECT * FROM services where ". implode(' OR ', $conditions). implode(' OR ', $conditions4).' OR '. implode(' OR ', $conditions2).' OR '. implode(' OR ', $conditions3);
    $result_select=mysqli_query($conn,$select_query);

    while($row=mysqli_fetch_assoc($result_select))
    {  
      $temps_restant=calculerTempsRestant($row["date_de_création"],$row["SLA"]);
      echo '    <li class="table-row">
      <div class="col col-1" data-label="ID service:">'.$row["id"].'</div>
      <div class="col col-2" data-label="Titre:">'.$row["titre"].'</div>
      <div class="col col-3" data-label="état:">'.$row["état"].'</div>
      <div class="col col-4" data-label="SLA:">'.$temps_restant.'</div>
      <div class="col col-5"> <a href="./service_admin.php?service_id='.$row["id"].'" ><button class="ms-button">détail</button></a></div>';
    }
    
    ?>

   
  </ul>
</div>



  </body>
</html>