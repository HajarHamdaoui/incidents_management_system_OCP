<!DOCTYPE html>
<?PHP
include("../includes/connect.php");
session_start();
$_SESSION['user_email']=$_GET['user_email'];
$sql_select = "SELECT * FROM user WHERE user_email = '".$_GET["user_email"]."'";
$result_select = mysqli_query($conn,  $sql_select);
$result_row = mysqli_fetch_assoc($result_select);
$_SESSION['user_first_name'] = $result_row["first_name"];          
$_SESSION['user_last_name'] =  $result_row["last_name"];
$_SESSION['user_phone'] =  $result_row["last_name"];
$_SESSION['gender'] =  $result_row["gender"];
$_SESSION['user_image'] =  $result_row["user_image"];
$_SESSION['affectation_groups'] =  $result_row["affectation_groups"];
$_SESSION['niveau'] =  $result_row["niveau"];
$_SESSION['user_id'] = $result_row["user_id"];
$_SESSION['emplacement'] = $result_row["emplacement"];


?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        * {
            box-sizing: border-box;
        }
        .input-container {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 15px;
           
        }
        .icon {
            padding: 10px;
            background: green;
            color: white;
            min-width: 50px;
            text-align: center;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }
        .input-field:focus {
            border: 2px solid dodgerblue;
        }
        /* Set a style for the submit button */
        .btn {
            /* background-color: dodgerblue; */
            background-color: green;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        form{
            padding-top: 30px;
        }
        .btn:hover {
            opacity: 1;
        }
        .fa-passwd-reset>.fa-lock {
            font-size: 0.85rem;
        }
        .reset{
            display:flex;
            justify-content:center;
        }
    </style>
    <script>
        let check = function() {
            if (document.getElementById('password-1').value == document.getElementById('password-2').value) {
                document.getElementById("formSubmit").disabled = false;
                document.getElementById("formSubmit").style.background = 'blue';
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Password Matched';
            } else {
                document.getElementById("formSubmit").disabled = true;
                document.getElementById("formSubmit").style.background = 'grey';
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Password not matching';
            }
        }
        let validate = function() {
            console.log(document.getElementById('password-1').value)
            console.log(document.getElementById('password-2').value)
            if (document.getElementById('password-1').value.length < 5) {
                document.getElementById('pwd-length-1').innerHTML = 'Minimum 6 characters';
            } else {
                document.getElementById('pwd-length-1').innerHTML = '';
                check();
            }
            if (document.getElementById('password-2').value.length < 5) {
                document.getElementById('pwd-length-2').innerHTML = 'Minimum 6 characters';
            } else {
                document.getElementById('pwd-length-2').innerHTML = '';
                check();
            }
        }

    </script>
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
                              
                <li><a href="#">Contact</a></li>
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Mode Admin</a></li>
                <li><a href="#">
                  
                  <div class="account-container">
                      <img src=<?php echo "../imgs/usersImages/".$_SESSION['user_image'] ?> class = "logo-image" alt=""> <h3><?php echo $_SESSION['user_last_name']." ".$_SESSION['user_first_name'];  ?></h3>
                  </div>
              </a></li>  

            </ul>
            <div class = "logo-container">
                
            <img src="../imgs/LOGO.svg" class="logo-image" alt="">
   
             <h1 class="logo">ResolveSphere</h1>
            </div>
   
        </div>
    </nav>


    <form method="POST" style="max-width:500px;margin:auto">
      <div class = "reset" ><img class ="width:551.76px;height:356.8px;" src="../imgs/logoocp.svg">
      </div>
       
        <!-- Title  -->
            <div class = "reset">
            <h2><span class="fa-passwd-reset fa-stack"><i class="fa fa-undo fa-stack-2x"></i><i class="fa fa-lock fa-stack-1x"></i></span>Reset your Password<span class="fa-passwd-reset fa-stack"><i class="fa fa-undo fa-stack-2x"></i><i class="fa fa-lock fa-stack-1x"></i></span></h2>
            </div>

                    
        <!-- First Input Text  -->
        <div class="input-container"><i class="fa fa-key icon"></i>
            <input class="input-field" id="password-1" type="password" placeholder="Saisissez votre nouveau mot de passe ..." name="password" oninput='validate();'>
        </div>
        <!-- Length  -->
        <span id="pwd-length-1"></span>
        <!-- Second Input Text  -->
        <div class="input-container"><i class="fa fa-key icon"></i>
            <input class="input-field" id="password-2" type="password" placeholder="Confirmez votre mot de passe" name="confirmPassword" oninput='validate();'>
        </div>
        <!-- Length  -->
        <span id="pwd-length-2"></span>
        <!-- Validation Message - 1  -->
        <span id="message"></span>
        <button class="btn" id="formSubmit" type="submit" disabled>Réinitialiser</button>
    </form>
</body>
</html>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $update_query='UPDATE  user SET  user_password = "'.password_hash($_POST['password'],PASSWORD_DEFAULT).'" where user_email="'.$_SESSION["user_email"].'";';
    mysqli_query($conn,$update_query);
    echo "<script>location.href ='../RH/interface_RH.php';</script>";

}
?>