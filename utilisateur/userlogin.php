<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include("../includes/connect.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>user login</title>
    
    <link rel="stylesheet" href="../css/userlogin.css">

    <script src ="../js/userlogin.js"></script>
</head>
<body>
<div id="container" class="container ">
	<!-- FORM SECTION -->
<div class="row">
	<!-- CHANGE PASSWORD -->
	<div class="myform col align-items-center flex-col change-password">
		<div class="form-wrapper align-items-center">
			<div class="form change-password">
			<div>
				<img src="LOGO.svg" style = "background-color:transparent" class = "logo" alt="">
			</div>
				<div class="input-group">
					<i class='bx bxs-user'></i>
					<input type="text" placeholder="email">
				</div>
				<button>
					Continue
				</button>
				<p>
					<b onclick="toggle()" class="pointer">
						Sign in here
					</b>
				</p>
			</div>
		</div>
	
	</div>
	<!-- END CHANGE PASSWORD -->
	<!-- SIGN IN -->
	<div class="myform col align-items-center flex-col sign-in">
		<div class="form-wrapper align-items-center">
			<form class="form sign-in" method ="post">
				<div>
					<img src="../imgs/LOGO.svg" style = "background-color:transparent" class = "logo" alt="">
				</div>						
				<div class="input-group">
					<i class='bx bxs-user'></i>
					<input type="text" name = 'email' placeholder="email">
				</div>
				<div class="input-group">
					<i class='bx bxs-lock-alt'></i>
					<input type="password" name ='password' placeholder="Password">
                </div>
                
				<input type='submit' class ='submit_button' value='sign in'>
                <p  id = "error-message" class="error-message" style="visibility:hidden">
                <i class="fa-solid fa-triangle-exclamation" style ="color:red"></i>
					<span style="color:red" >Email or password incorrect </span>
                </p>
				<p>
					<span>
						Forgot password?
					</span>
					<b onclick="toggle()" class="pointer">
						change password
					</b>
				</p>
			</form>
		</div>
        
		<div class="form-wrapper">

		</div>
	</div>
	<!-- END SIGN IN -->
</div>
<!-- END FORM SECTION -->
<!-- CONTENT SECTION -->
<div class="row content-row">
	<!-- SIGN IN CONTENT -->
	<div class="col align-items-center flex-col">
		<div class="text sign-in">
			<h2>
				Welcome
			</h2>

		</div>
		<div class="img sign-in">

		</div>
	</div>
	<!-- END SIGN IN CONTENT -->
	<!-- change password CONTENT -->
	<div class="col align-items-center flex-col">
		<div class="img change-pssword">
		
		</div>
		<div class="text change-password">
			<h2>
				Change your password
			</h2>

		</div>
	</div>
	<!-- END Change password CONTENT -->
</div>

<!-- END CONTENT SECTION -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the provided password (assuming you hash passwords before storing)


    // Prepare and execute the SQL query
    $sql_select = "SELECT * FROM user WHERE user_email = '$email' AND user_password = '$password'";
    $result_select = mysqli_query($conn,  $sql_select);

    if ($result_select->num_rows === 1) {
        // User exists, login successful
        echo "
        <script>
        errorMessage = document.getElementById('error-message');
        errorMessage.style.visibility='hidden';
        </script>";

        $result_row = mysqli_fetch_assoc($result_select);
        $_SESSION['user_first_name'] = $result_row["first_name"];          
        $_SESSION['user_last_name'] =  $result_row["last_name"];
        $_SESSION['user_email'] =  $result_row["user_email"];
        $_SESSION['user_phone'] =  $result_row["last_name"];
        $_SESSION['user_profil'] =  $result_row["user_profil"];
        $_SESSION['gender'] =  $result_row["gender"];
        $_SESSION['user_image'] =  $result_row["user_image"];
		echo "
		<script>
			window.open('../utilisateur/interface_util.php','_blank');
		</script>
		";



        
        // You can also set a session variable or redirect the user to a different page
    } else {
        // Login failed
        echo "
        <script>
        errorMessage = document.getElementById('error-message');
        console.log(errorMessage);
        errorMessage.style.visibility='visible';
        </script>
        ";
    
    }
}

$conn->close();
?>





	</div>
</body>
</html>