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