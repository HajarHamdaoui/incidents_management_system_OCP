const containerHTML =
`
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
			<div class="form sign-in">
				<div>
					<img src="../imgs/LOGO.svg" style = "background-color:transparent" class = "logo" alt="">
				</div>						
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
`;
const container = document.getElementById("container");
const loader = document.getElementById("loader");
const oLetter = document.getElementById("o");
const cLetter = document.getElementById("c");
const pLetter = document.getElementById("p");

var x = 0;
const ids = ["one","two","three","four","five"];
let i=0;
let stars=[];

for(i=0; i< 5;i++)
{
	stars[i]=document.getElementById(ids[i]);
	console.log(stars[i]);
}
console.log(stars[i-1]);
function loading(){
	if(x>0)
	{
		stars[x-1].classList.remove("visibility");
	}else 
	{
		stars[4].classList.remove("visibility")
	}
	stars[x].classList.add("visibility");
	x++;
	if(x>4)
	{ x =0;
	}

	}

	let intervalId =setInterval(loading,100);



// PROGRESS BAR 
let stepValue = 0;
function move() {

	let elem = document.getElementById("greenBar");
	let stepValue = 0;
	let id = setInterval(frame, 500);
	let progressBar = document.getElementById("progressbarWrapper");
  
	function frame() {

  
	  if (stepValue >= 100) {
		if(stepValue == 100)
		{
			clearInterval(intervalId);
			for(i=0;i<5;i++)
			{
				stars[i].classList.remove("visibility");
			}
			clearInterval(id);
			setTimeout(()=>{progressBar.classList.add("visibility")},500);
			setTimeout(()=>{oLetter.classList.remove("visibility")},1000);
			setTimeout(()=>{cLetter.classList.remove("visibility")},1500);
			setTimeout(()=>{pLetter.classList.remove("visibility")},2000);
			setTimeout(()=>{loader.classList.add("display_none");
							container.innerHTML=containerHTML;
							toggle = () => {
								container.classList.toggle('sign-in')
						
								container.classList.toggle('change-password')
							}
							
							setTimeout(() => {
								container.classList.add('sign-in')
							}, 200)
							console.log(container);


							},2500);

		}


		

		
	  } else{
			elem.style.width = (stepValue + 10) + "%";
			elem.innerHTML = (stepValue + 10) + "%";
			stepValue=(stepValue + 10);
		}

	  }
	}
  
move();
console.log(stepValue);





