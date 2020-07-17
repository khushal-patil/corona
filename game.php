<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
	html{
		scroll-behavior: smooth;
	}

	*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli',sans-serif; }

.row{ margin-left: 0!important; margin-right: 0!important; }
.nav_style{
	background-color: #a29bfe!important;
}
.nav_style a{ color: white; }



ul li a:hover{
background-color: #fff;
color: #000;
}

/*//////////////// main header \\\\\\\\\\\\*/

.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{
	font-size: 3rem;
}
.corona_rot img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}

.leftside img{ animation: heartbeat 5s linear infinite; }
@keyframes heartbeat
{
	0%{
		transform: scale(.75);
	}
	20%{
		transform: scale(1);
	}
	40%{
		transform: scale(.75);
	}
	60%{
		transform: scale(1);
	}
	80%{
		transform: scale(.75);
	}
	100%{
		transform: scale(.75);
	}
}


/************* corona update ************/

.corona_update{
	display: inline!important;
	margin: 0 0 30px 0;
}

.corona_update h3{ color: #ff7675; }

.corona_update h1{ font-size: 2rem; text-align: center; }



/*////////////////// about section ////////////*/

.sub_section{
	background-color: #fbfafd;
}

/*////////////////// footer ////////////*/

.footer_style{
	background-color: #a29bfe!important;
}
.footer_style p{
	margin-bottom: 0!important;
}

/******************** top scroll ****************/
#myBtn {
	display: none; /* Hidden by default */
	position: fixed; /* Fixed/sticky position */
	bottom: 30px; /* Place the button at the bottom of the page */
	right: 40px; /* Place the button 30px from the right */
	z-index: 99; /* Make sure it does not overlap */
	border: none; /* Remove borders */
	outline: none; /* Remove outline */
	background-color: #00A8FF; /* Set a background color */
	color: white; /* Text color */
	cursor: pointer; /* Add a mouse pointer on hover */
	padding: 10px; /* Some padding */
	border-radius: 10px; /* Rounded corners */
}

#myBtn:hover {
	background: #606060; /* Add a dark-grey background on hover */
}

/*//////////// responsive //////////*/

@media(max-width: 768px)
{	.main_header{ height: 700px; text-align: center; }
	.main_header h1{
	text-align: center;
	padding: 0;
	width: 100%;
	font-size: 30px;}

	.count_style{
		display: inline!important;
	}
	.count_style p{
		text-align: center;
	}
}
</style>
</head>






<body onload="fetch()">
	<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#worldid">World Corona Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">India Corona Live</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          other
        </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown" btn-success>
          <a class="dropdown-item text-center  bg-warning md-3 mt-auto" href="#sympid">sympotoms</a>
          <a class="dropdown-item text-center bg-secondary md-3 mt-auto" href="#preventid">prevention</a>
		  <a class="nav-link text-center bg-success md-3 mt-auto" href="#contactid">contact</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/eksaath.png" width="300" height="300">
			</div>
			
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against <br>Cor<span class="corona_rot">
					<img src="images/corona1.png" width="50" height="50">
				</span>na Virus</h1>
			</div>
			
		</div>
	</div>
</div>


<!-- ********************* corona latest updates *************** -->

<section class="corona_update container-fluid" id="worldid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">covid-19 LIVE UPDATES OF THE WORLD</h3>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th>Country</th>
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>
				<th>TotalDeaths</th>
				<th>NewConfirmed</th>
				<th>NewRecovered</th>
				<th>NewDeaths</th>

			</tr>
		</table>
	</div>

</section>


<!--**************** about section ***************-->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> About COVID-19</h1>
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-3">
			<img src="images/aboutcorona1.jpg" class="img-fluid pt-5 w-150 h-49">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h3>What is COVID-19 (Corona-Virus) </h3>
			<p>COVID-19 is the infections disease caused by the most recently discovered corona virus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.</p>
			<p>Corona Viruses are a large family of viruses which may cause illness in animals or humans. In humans, several corona viruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered corona virus causes corona virus disease COVID-19.</p>
		</div>
	</div>

</div>


<!-- ////////////// corona sympotns //////////// -->

<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Coronavirus Symptoms</h1>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="120" height="120">
				<figcaption> cough</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/runny nose.png" class="img-fluid" width="120" height="120">
				<figcaption> runny nose</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/fever2..jpeg" class="img-fluid" width="120" height="120">
				<figcaption> fever</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cold.jpg" class="img-fluid" width="120" height="120">
				<figcaption> cold</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/tiredness.png" class="img-fluid" width="200" height="200">
				<figcaption> tiredness</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-4">
				<figure class="text-center">
				<img src="images/difficulty breathing.png" class="img-fluid" width="120" height="120">
				<figcaption> difficulty breathing</figcaption>
				</figure>
			</div>
		</div>
	</div>

</div>

<!-- ////////////// Prevention Against Coronavirus //////////// -->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1>
	</div>

<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/washing hands.jpg" class="img-fluid" width="90" height="90">
				</figure>
				</div>
			
				<div class="col-lg8 col-md-8 col-12">
				<p> Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/mask.png" class="img-fluid" width="90" height="90">
				</figure>
				</div>
			
				<div class="col-lg8 col-md-8 col-12">
				<p> Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/social distance.png" class="img-fluid" width="90" height="90">
				</figure>
				</div>
			
				<div class="col-lg8 col-md-8 col-12">
				<p> Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
				</div>
			</div>
		</div>


		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/stay home.png" class="img-fluid" width="90" height="90">
				</figure>
				</div>
			
				<div class="col-lg8 col-md-8 col-12">
				<p> Stay home and self-isolate from others in the household if you unwell</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/news.png" class="img-fluid" width="90" height="90">
				</figure>
				</div>
			
				<div class="col-lg8 col-md-8 col-12">
				<p> Stay informed by watching news & follow the recommended practices</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/all.png" class="img-fluid" width="90" height="90">
				</figure>
				</div>
			
				<div class="col-lg8 col-md-8 col-12">
				<p> If you have fever, cough and difficulty breathing, seek medical care early</p>
				</div>
			</div>
		</div>

	</div>
</div>

</div>



<!-- ////////////// Contact Us ASAP //////////// -->

<div class="container-fluid pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">

				<form  action="" method="POST">
  <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com"  required autocomplete="off">
  </div>
  <div class="form-group">
    <label >mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>

  <div class="form-group">
  	<label> Select Symptoms</label> <br>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
  		<label class="custom-control-label" for="customcheckbox1">Cold</label> 
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
  		<label class="custom-control-label" for="customcheckbox2">Fever</label> 
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
  		<label class="custom-control-label" for="customcheckbox3">Difficulty Breathing</label> 
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
  		<label class="custom-control-label" for="customcheckbox4">Fealing Weak</label> 
  	</div>
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1" >Example Textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary btn-success m-auto d-block" name="submit">Submit</button>
</form>
			</div>
		</div>

	</div>

</div>

<!-- /////////////////// top cursor ////////// -->

<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>


<!-- ///////////////////// footer ////////////// -->
<footer class="mt-5">
	<div class="footer_style text white text-center container-fluid">
		<p>copyright by khushal patil</p>
	</div>
</footer>







<script type="text/javascript">
	$('.count').counterUp({
                delay: 10,
                time: 1000
            });
mybutton = document.getElementById("myBtn");
// when the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
}
}
// when the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; // for Safari
	document.documentElement.scrollTop = 0; // for Chrome, Firefox, IE and Opera
}




function fetch(){
	$.get("https://api.covid19api.com/summary",

		function (data){
			//console.log(data['Countries'].length);
			var tbval = document.getElementById('tbval');

			for(var i=1; i<(data['Countries'].length); i++){
				var x = tbval.insertRow();
				x.insertCell(0);

				tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
				tbval.rows[i].cells[0].style.background = '#7a4a91';
				tbval.rows[i].cells[0].style.color = '#fff';


				x.insertCell(1);
				tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
				tbval.rows[i].cells[1].style.background = '#4bb7d8';

				x.insertCell(2);
				tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
				tbval.rows[i].cells[2].style.background = '#9cc850';

				x.insertCell(3);
				tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
				tbval.rows[i].cells[3].style.background = '#f36e23';

				x.insertCell(4);
				tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
				tbval.rows[i].cells[4].style.background = '#4bb7d8';

				x.insertCell(5);
				tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
				tbval.rows[i].cells[5].style.background = '#9cc850';

				x.insertCell(6);
				tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
				tbval.rows[i].cells[6].style.background = '#f36e23';
			}	
		}
	);
}
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'link/links.php';   ?>
	<?php  include 'css/style.php';   ?>
</head>
<body onload="fetch()">
	<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/CoronaGo/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/CoronaGo/index.php#worldid">World Corona Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronadaywise.php">India Corona Daywise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">India Corona Live</a>
      </li>
    </ul>
  </div>
</nav>

<!-- ********************* corona latest updates *************** -->

<section class="corona_update container-fluid" id="worldid">
  <div class="mb-3">
    <h3 class="text-uppercase text-center">covid-19 LIVE UPDATES OF THE WORLD</h3>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
      <tr>
        <th>lastupdatedtime</th>
        <th>state</th>
        <th>confirmed</th>
        <th>active</th>
        <th>recovered</th>
        <th>deaths</th>

      </tr>

      <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);
$i=1;
while($i < $statescount){

?>

<tr>
  <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'];?></td>
  <td><?php echo $coranalive['statewise'][$i]['state'];?></td>
  <td><?php echo $coranalive['statewise'][$i]['confirmed'];?></td>
  <td><?php echo $coranalive['statewise'][$i]['active'];?></td>
  <td><?php echo $coranalive['statewise'][$i]['recovered'];?></td>
  <td><?php echo $coranalive['statewise'][$i]['deaths'];?></td>
</tr>
<?php
  $i++;
}


?>
    </table>
  </div>

</section>
<!-- /////////////////// top cursor ////////// -->

<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>


<!-- ///////////////////// footer ////////////// -->
<footer class="mt-5">
  <div class="footer_style text white text-center container-fluid">
    <p>copyright by khushal patil</p>
  </div>
</footer>

<script type="text/javascript">
mybutton = document.getElementById("myBtn");
// when the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
}
}
// when the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // for Safari
  document.documentElement.scrollTop = 0; // for Chrome, Firefox, IE and Opera
}
</script>
</body>
</html>


