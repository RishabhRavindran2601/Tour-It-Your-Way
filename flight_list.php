<?php 
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
?>

<!Doctype html>
<html>
	<head>
		<title>API testing</title>
		<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
		<style>
html{
	background: url("https://previews.123rf.com/images/ilkerergun/ilkerergun1701/ilkerergun170100015/69197957-businessman-waiting-at-the-airport-departure-area.jpg");
	height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.topnav {
  overflow: hidden;
  background-color: white;
  margin: auto;
  width: 90%;
  margin-top: 15px;
  border-style: solid;
  border-color: black;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  padding-right: 175px;
  text-decoration: none;
  font-size: 20px;
}


.topnav:hover {
  background-color: lightblue;
}
</style>
<style type="text/css">
	

/* Add padding to containers */
.container {
  padding: 1px;
  background-color:Astros Navy;
  opacity: 100%;
  border-radius: 1%;
  box-sizing: border-box;
  margin-left: 10px;
  margin-right: 10px;
}

/* Full-width input fields */
input{
  width: 25%;
  padding: 15px;
  margin: 0px 45px 10px 5px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input:focus{
  background-color: #ddd;
  outline: none;
}

.h1{
	text-align: center;
	color: navy;
	background-color: lightblue;
	padding: 5px;
	border: solid lightcyan;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
}

.registerbtn {
  background-color: #f5804b;
  color: white;
  padding: 16px 20px;
  margin-left: 42%;
  margin-bottom: 0.5%;
  border: none;
  cursor: pointer;
  width: 15%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

</style>

<style>


/*
=====
DEPENDENCES
=====
*/

.r-link{
  display: var(--rLinkDisplay, inline-flex) !important;
}

.r-link[href]{
  color: var(--rLinkColor) !important;
  text-decoration: var(--rLinkTextDecoration, none) !important;
}

.r-list{
  padding-left: var(--rListPaddingLeft, 0) !important;
  margin-top: var(--rListMarginTop, 0) !important;
  margin-bottom: var(--rListMarginBottom, 0) !important;
  list-style: var(--rListListStyle, none) !important;
}


/*
=====
CORE STYLES
=====
*/

.menu{
  --rLinkColor: var(--menuLinkColor, currentColor);
}

.menu__link{
  display: var(--menuLinkDisplay, block);
}

/* 
focus state 
*/

.menu__link:focus{
  outline: var(--menuLinkOutlineWidth, 2px) solid var(--menuLinkOutlineColor, currentColor);
  outline-offset: var(--menuLinkOutlineOffset);
}

/* 
fading siblings
*/

.menu:hover .menu__link:not(:hover){
  --rLinkColor: var(--menuLinkColorUnactive, rgba(22, 22, 22, .35));
}

/*
=====
PRESENTATION STYLES
=====
*/

.menu{
  background-color: var(--menuBackgroundColor, #f0f0f0);
  box-shadow: var(--menuBoxShadow, 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24));
}

.menu__list{
  display: flex;  
}

.menu__link{
  padding: var(--menuLinkPadding, 1.5rem 2.5rem);
  font-weight: 700;
  text-transform: uppercase;
}

/* 
=====
TEXT UNDERLINED
=====
*/

.text-underlined{
  position: relative;
  overflow: hidden;

  will-change: color;
  transition: color .25s ease-out;  
}

.text-underlined::before, 
.text-underlined::after{
  content: "";
  width: 0;
  height: 3px;
  background-color: var(--textUnderlinedLineColor, currentColor);

  will-change: width;
  transition: width .1s ease-out;

  position: absolute;
  bottom: 0;
}

.text-underlined::before{
  left: 50%;
  transform: translateX(-50%); 
}

.text-underlined::after{
  right: 50%;
  transform: translateX(50%); 
}

.text-underlined:hover::before, 
.text-underlined:hover::after{
  width: 100%;
  transition-duration: .2s;
}

/*
=====
SETTINGS
=====
*/

.page__custom-settings{
  --menuBackgroundColor: #6c5ce7;
  --menuLinkColor: #fff;
  --menuLinkColorUnactive: #241c69;
  --menuLinkOutlineOffset: -.5rem; 
}

/*
=====
DEMO
=====
*/



.page{
  box-sizing: border-box;
  padding-left: .75rem;
  padding-right: .75rem;
  margin: auto;
  padding-bottom: 10px;
}

.page__menu:nth-child(n+2){
  margin-top: 3rem;
}


.substack{
  border:1px solid #EEE; 
  background-color: #fff;
  width: 100%;
  max-width: 480px;
  height: 280px;
  margin: 1rem auto;;
}

.linktr{
  display: flex;
  justify-content: flex-end;
  padding: 2rem;
  text-align: center;
}

.linktr__goal{
  background-color: rgb(209, 246, 255);
  color: rgb(8, 49, 112);
  box-shadow: rgb(8 49 112 / 24%) 0px 2px 8px 0px;
  border-radius: 2rem;
  padding: .75rem 1.5rem;
}

.r-link{
    --uirLinkDisplay: var(--rLinkDisplay, inline-flex);
    --uirLinkTextColor: var(--rLinkTextColor);
    --uirLinkTextDecoration: var(--rLinkTextDecoration, none);

    display: var(--uirLinkDisplay) !important;
    color: var(--uirLinkTextColor) !important;
    text-decoration: var(--uirLinkTextDecoration) !important;
}

</style>

	</head>
	<body>

		<div class="page">
  <nav class="page__menu menu">
    <ul class="menu__list r-list">
      <li class="menu__group"><a href="home_logged.php" class="menu__link r-link text-underlined">Home</a></li>
      <li class="menu__group"><a href="itenary.php" class="menu__link r-link text-underlined">Itenary</a></li>
      <li class="menu__group"><a href="logout.php" class="menu__link r-link text-underlined">Logout</a></li>
    </ul>
  </nav>
		</div>

		<div>
  			<div class="container">
    				<h1 class="h1">Flight Booking</h1>
    				<hr>

    					<input style="margin-left: 20%;" type="text" placeholder="From" name="src" id="src" required>

    					<label style="font-size: 43px; color: #39FF14;"><strong>---></strong></label>
    					<input type="text" placeholder="To" name="dst" id="dst" required>
    					<br>

    					<input style="margin-left: 20%;" placeholder="Start Date" name="inDate" id="inDate" required>

    					<input  style="margin-left: 5%;" placeholder="End Date" name="outDate" id="outDate" required>
    					<br>
    					<input  style="margin-left: 20%;" type="number" placeholder="Adults" id="adults">
    					<input style="margin-left: 5%;" type="number" placeholder="Children" id="childs">

    				<hr>

    				<button class="registerbtn" onclick="go();">Find Flights</button>
  			</div>
		</div>
		<div id="table_body">
		</div>
		<script>
		function go(){


const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'c25dd37861msh8ccd93175b1ebe8p174e46jsnf58ed0c13be2',
		'X-RapidAPI-Host': 'tripadvisor16.p.rapidapi.com'
	}
};

var op1 = document.getElementById("src").value;
var op2 = document.getElementById("dst").value;
var op3 = document.getElementById("inDate").value;
var op4 = document.getElementById("outDate").value;
var op5 = document.getElementById("adults").value;
var op6 = document.getElementById("childs").value;

fetch('https://tripadvisor16.p.rapidapi.com/api/v1/flights/searchFlights?sourceAirportCode='+op1.toString()+'&destinationAirportCode='+op2.toString()+'&date=2022-12-01&itineraryType=ONE_WAY&sortOrder=PRICE&numAdults=1&numSeniors=0&classOfService=ECONOMY&returnDate=2022-12-03&currencyCode=IND', options)
	.then((data)=>{
		//console.log(data);
		return data.json();
	}).then((objectData)=>{
		let tableData = "";

		for (var i =0; i < 5; i++) {
			var a = objectData.data.flights[i].segments[0].legs[0].flightNumber;
			var b = objectData.data.flights[i].segments[0].legs[0].originStationCode;
			var c = objectData.data.flights[i].segments[0].legs[0].destinationStationCode;
			var d = objectData.data.flights[i].purchaseLinks[0].totalPricePerPassenger;
			var e = objectData.data.flights[i].segments[0].legs[0].departureDateTime.substring(11,15);
			var f = objectData.data.flights[i].segments[0].legs[0].arrivalDateTime.substring(11,15);
			

			tableData += `<div class="topnav">`;

			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].flightNumber}</a>`;
			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].departureDateTime.substring(11,15)}</a>`;
			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].originStationCode}</a>`;
			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].arrivalDateTime.substring(11,15)}</a>`;
			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].destinationStationCode}</a>`;
			tableData += `<a>${objectData.data.flights[i].purchaseLinks[0].totalPricePerPassenger}</a>`;
			tableData += `<button onclick="addIT(${a},'${b}','${c}',${d},'${e}','${f}');">ADD</button>`;
			tableData += `</div>`;
		}
		document.getElementById("table_body").innerHTML = tableData;
	})

}
</script>
	</body>

	<script type="text/javascript">
		function addIT(a,b,c,d,e,f){
			var ob = {};
			ob.flno = a;
			ob.src = b;
			ob.dst = c;
			ob.cost = d;
			ob.stime = e;
			ob.etime = f;


			console.log(ob);
			$.ajax({
				url:"insIT.php",
				method:"post",
				data:ob,
				success: function(res){
					console.log(res)
				}
			})
			window.location.href="itenary.php";
			
		}
	</script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>

        $("#inDate").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#outDate").datepicker({ dateFormat: 'yy-mm-dd' });
  </script>
</html>