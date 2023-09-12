<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  require 'vendor/autoload.php';
session_start();
include("../includes/connect.php");
include("../includes/randomPassword.php")

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
    <style>
      input{
        
      }
    </style>
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
    </div>
    <form method="post" action="" id="survey-form">
        <fieldset>
            <legend> <i class="fa-solid fa-chevron-down"></i>Details de l'employé :</legend>
            <div id="wrapwrap">
               
            <div class="field-container">
              <label for="titre">Nom</label>
              <input type="text" name="nom" id="titre" style="padding-left:10px;">
            </div>   
            <div class="field-container">
                <label for="titre">Prénom</label>
                <input type="text" name="prenom" style="padding-left:10px;" id="titre">
            </div>   
            <div class="field-container">
                <label for="CIN">CIN</label>
                <input type="text" name="cin" style="padding-left:10px;" id="titre">
            </div> 
            <div class="field-container">
                <label for="email">E-mail</label>
                <input type="email" name="email" style="padding-left:10px;" id="titre">
            </div>
            <div class="field-container">
                <label for="numéro_de_téléphone">Numéro de téléphone</label>
                <input type="text" name="numéro_de_téléphone" style="padding-left:10px;" id="titre">
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
                <label for="civilité">Sexe</label>
                <div name="civilité" class="searchable-dropdown" id="searchable-dropdown">
                  <div class="searchable-dropdown-group">
                     <span class="searchable-dropdown-arrow"></span>
                     <select name="civilité" id="civilité" class="dropdown">
                        <option disabled>Selection </option>
                        <option value="Femme">Femme</option>
                        <option value="Homme">Homme</option>
                     </select>
                  </div>
                </div>     
              </div>
            <div class="field-container">
                <label for="">Permis de conduire</label>
                <div name="permis de conduire" class="searchable-dropdown" id="searchable-dropdown">
                  <div class="searchable-dropdown-group">
                     <span class="searchable-dropdown-arrow"></span>
                     <select name="permis" id="permis de conduire" class="dropdown">
                        <option disabled>Selection permis de conduire</option>
                        <option value="Aucun">Aucun</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                     </select>
                  </div>
                </div>     
              </div> 
      
              <div class="field-container">
                <label for="">Local</label>
                <div name="emplacements" class="searchable-dropdown" id="searchable-dropdown">
                  <div class="searchable-dropdown-group">
                     <span class="searchable-dropdown-arrow"></span>
                     <select name="emplacement" id="emplacement" class="dropdown">
                        <option disabled>Selection de l'emplacement</option>
                     </select>
                  </div>
                </div>     
              </div>  
                     
        </fieldset>
      
      <fieldset>
      
       
      <legend> <i class="fa-solid fa-chevron-down"></i>Poste occupé au sein de l' OCP :</legend>
      <div class="field-container">
        <label for="">Poste :</label>
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
        <legend><i class="fa-solid fa-chevron-down"></i>Ajouter plus d'Informations sur l'employé :</legend>
          <textarea name="additional_comments" id="additional-comments" cols="30" rows="10" style="padding-left:10px;"></textarea>
      </fieldset>


      <input type="submit" id="submit" class ="submit" value="Soumission">

    </form>
  </div>
</div>




<script src="../js/demandeDeService.js"></script>
<script src="../js/searchabledropdown.js"></script>
<script src="../js/fetchEmplacement.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
<script src="../js/datepicker.js"></script>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_last_name = $_POST["nom"];
  $user_first_name = $_POST["prenom"];
  $user_cin = $_POST["cin"];
  $user_email = $_POST["email"];
  $user_phone = $_POST["numéro_de_téléphone"];
  $user_adress = $_POST["adresse"];
  $user_birth_date = $_POST["date"];
  $user_sexe = $_POST["civilité"];
  $user_drivers_license = $_POST["permis"];
  $user_emplacement = $_POST["emplacement"];
  $user_post = $_POST["poste"];
  $user_description = $_POST["additional_comments"];
  $user_password=generateRandomPassword(12);
  $user_password_coded= password_hash($user_password,PASSWORD_DEFAULT);




 $insert_query="INSERT INTO user (first_name,last_name,user_email,user_phone,gender,CIN,birth_date,postal_adresse,drivers_license,poste,emplacement,user_description,user_password) VALUES ('".$user_first_name."','".$user_last_name."','".$user_email."','".$user_phone."','".$user_sexe."','".$user_cin."','".$user_birth_date."','".$user_adress."','".$user_drivers_license."','".$user_post."','".$user_emplacement."','".$user_description."','".$user_password_coded."');";
  $result_insert = mysqli_query($conn,$insert_query);
  
  
 

if ($result_insert) {

  $mail = new PHPMailer(true);


try {

    // Server settings

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'resolvesphere@gmail.com'; // Replace with your SMTP username
    $mail->Password = 'emtf syty ollp huyh'; // Replace with your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Recipient
    $mail->setFrom('resolvesphere@gmail.com', 'Resolve Sphere');
    $user_name = $user_last_name." ".$user_first_name;

    $mail->addAddress($user_email, $user_name);

    // Email content
    $mail->isHTML(true); // Set the email format to HTML
    $mail->Subject = 'Mot de Passe par défaut';

    // HTML content for the email
    if($user_sexe=='Female')
    {
      $cher_mot= 'Chère';
    }else {
      $cher_mot='Cher';
    }
    $htmlContent = '
        <!DOCTYPE html>
        <html>
        <head>
            <title>Affectation de mot de passe par défault</title>
        </head>
        <body>
            <h1>Affectation de mot de passe par défault</h1>
            <p>'.$cher_mot.' '.$user_name.",</p>
            <p>Nous vous remercions d'utiliser ResolveSphere. Voici votre mot de passe par défaut :".$user_password.'</p>
            <p> Si vous voulez réinitialiser votre mot de passe clickez sur le lien ci-dessous : 
            <a href="http://localhost/incidents_system_2/incidents_management_system_OCP/utilisateur/reset_password.php?user_email='.$user_email.'" style="display: inline-block; background-color: #007bff; color: #fff; text-decoration: none; padding: 10px 20px; border-radius: 5px;">Reset Password</a>
        </body>
        </html>
    ';

    $mail->Body = $htmlContent;

    // Send the email
    $mail->send();
    echo "Hi3";
    echo '<script>alert(Email sent successfully!)</script>';
} catch (Exception $e) {
    echo 'Email failed  ' . $mail->ErrorInfo;
}
}
  // echo "<script>location.href='../RH/interface_RH.php';</script>";
} else {
  echo "Hi error";
  echo "Error: " . mysqli_error($conn);
}




?>






</body>

</html>