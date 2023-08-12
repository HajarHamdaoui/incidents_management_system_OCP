<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login</title>
    <link rel="stylesheet" href="../css/userlogin.css">
</head>
<body>

<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">

			<!-- CHANGE PASSWORD -->

			<div class="col align-items-center flex-col change-password">
				<div class="form-wrapper align-items-center">
					<div class="form change-password">
                    <div>
                        <img src="../LOGO.svg" style = "background-color:transparent" class = "logo" alt="">
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
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Password">
						</div>
						<button>
							Sign in
						</button>

						<p>
							<span>
								Forgot password?
							</span>
							<b onclick="toggle()" class="pointer">
								change password
							</b>
						</p>
					</div>
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
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img change-pssword">
				
				</div>
				<div class="text change-password">
					<h2>
						Change your password
					</h2>
	
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>  
    <script src="../js/userlogin.js"></script> 
</body>
</html>

