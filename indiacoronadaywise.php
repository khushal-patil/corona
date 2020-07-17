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
<section class="corona_update container-fluid" id="worldid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">covid-19 LIVE UPDATES OF INDIA DAY WISE</h3>
	</div>

	<div class="table-responsive">
		<table class="table  text-center" id="tbL">
<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$daywise = json_decode($data, true);

$totalcount = count($daywise['cases_time_series']);

$i=0;
while($i < $totalcount){

?>
<tr>
	<th class="text-left">Date & Month</th>
</tr>
<tr>
	<td colspan="6" class="text-left"><?php echo $daywise['cases_time_series'][$i]['date'] ."<br>" ;?></td>
</tr>

<tr class="text-capitalize text-white">
	<th style="color: #fff; background: #2196f3;">Total confirmed</th>
	<th style="color: #fff; background: #ffc107;">Daily Confirmed</th>
	<th style="color: #fff; background: #008C76FF;">Daily Recovered</th>
	<th style="color: #fff; background: #e91e7f;">Daily Deceased</th>
	<th style="color: #fff; background: #4caf50;">Total Recovered</th>
	<th style="color: #fff; background: #EE2737FF;">Total Deceased</th>
</tr>

<tr class="mb-5">
 <td style="background: #bed2f3;"><?php echo $daywise['cases_time_series'][$i]['totalconfirmed'] . "<br>";?></td>
 <td style="background: #ffe493;"><?php echo $daywise['cases_time_series'][$i]['dailyconfirmed'] . "<br>";?></td>
 <td style="background: #9ED9CCFF;"><?php echo $daywise['cases_time_series'][$i]['dailyrecovered'] . "<br>";?></td>
 <td style="background: #fc95c6;"><?php echo $daywise['cases_time_series'][$i]['dailydeceased'] . "<br>";?></td>
 <td style="background: #fb99a1;"><?php echo $daywise['cases_time_series'][$i]['totalrecovered'] . "<br>";?></td>
 <td style="background: #bed2f3;"><?php echo $daywise['cases_time_series'][$i]['totaldeceased'] . "<br>";?></td>
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

</script>
</body>
</html>

