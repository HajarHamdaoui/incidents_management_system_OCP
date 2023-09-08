
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
			setTimeout(()=>{loader.classList.add("display_none")},2500);
			setTimeout(()=>{location.href="../utilisateur/userlogin.php"},2700);

			



		}


		

		
	  } else{
			elem.style.width = (stepValue + 10) + "%";
			elem.innerHTML = (stepValue + 10) + "%";
			stepValue=(stepValue + 10);
		}

	  }
	}
  
move();





