<?php 
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
?>

!DOCTYPE html>
<html>
<head>
<title>first web dev</title>
<link rel='stylesheet' type='text/css' href='ss.css'>
<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
<style>
  
  .flights1{
    visibility: visible;

  }
  .hotels1{
    visibility: visible;
  }
  .restaurants1{
    visibility: visible;
  }
  </style>
</head>
<body style="background-image:url('im.png'); height: '100vh'; background-size: 'cover'; background-position: 'center';">
<?php
      $user= $user_data['user_name'];
      $sql = "select * from flights WHERE user='$user'";
      $result = $con->query($sql);
?>
<div class='title'>
<div class='w3-center'>
<button class='w3-button demo' onclick='addflights()'>flight itenary</button> 
<button class='w3-button demo' onclick='addhotels()'>hotel itenary</button>
<button class='w3-button demo' onclick='addrest()'>food itenary</button> 
</div>
<div class="flights" id="flights">
<div class='w3-content' style='max-width:800px'>
<div class='mySlides' style='width:100%'>
<table style='margin:auto;' border='1' >
<caption><strong><h1>My Flights</h1></strong></caption>
<th>Flight-no</th><th>Start</th><th>Destination</th><th>Price</th>
<?php
      if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['fno'] . "</td><td>" . $row['src'] . "</td><td>" . $row['dst'] . "</td><td>" . $row['price'] . "</td></tr>";
  }

} else {
  echo "0 results";
}
?>
</div>
</div>


<?php
      $sql = "select * from hotels WHERE user='$user'";
      $result = $con->query($sql);
?>
<div class="hotels" id="hotels">
<div class='mySlides' style='width:100%'>
<table style='margin:auto;' border='1' >
<caption><strong><h1>My Hotels</h1></strong></caption>
<th>Hotel-name</th><th>Address</th><th>Rating</th><th>Provider</th>

<?php
      if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['title'] . "</td><td>" . $row['addr'] . "</td><td>" . $row['star'] . "</td><td>" . $row['prov'] . "</td></tr>";
  }
} else {
  echo "0 results";
}
?>

</div>
</div>

 <?php  
   $sql = "select * from foods WHERE user='$user'";
      $result = $con->query($sql);
?>
<div class="restaurants" id="restaurants">
<div class='mySlides' style='width:100%'>
<table style='margin:auto;' border='1' >
<caption><strong><h1>My Restaurants</h1></strong></caption>
<th>Restaurant-Name</th><th>Rating</th><th>Cuisine</th><th>Status-Now</th>

<?php
      if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['star'] . "</td><td>" . $row['cuisine'] . "</td><td>" . $row['status'] . "</td></tr>";}

} else {
  echo "0 results";
}
?>

</div>
</div>
</div>
<script>
  /*var slideIndex = 1;
  showDivs(slideIndex);
  function plusDivs(n) { 
     showDivs(slideIndex += n);
  }
  function currentDiv(n) {  
      showDivs(slideIndex = n);
  }
  function showDivs(n) {  
          var i;  
          var x = document.getElementsByClassName('mySlides');  
          var dots = document.getElementsByClassName('demo');  
          if (n > x.length) {
            slideIndex = 1;
          }      
          if (n < 1) {
            slideIndex = x.length;
          }  
          for (i = 0; i < x.length; i++) {    
            x[i].style.display = 'none';    
          }  
          for (i = 0; i < dots.length; i++) {    
            dots[i].className = dots[i].className.replace(' w3-red', ''); 
          }  
          x[slideIndex-1].style.display = 'block';    
          dots[slideIndex-1].className += ' w3-red';
  }*/
  function addflights(){
    let fl=flights.getElementById("hotels1");
    let fl1=flights.getElementById("restaurants1");
    fl.classList.remove("hotels1");
    fl1.classList.remove("restaurants1");
  }
  function addhotels(){
    let fli=flights.getElementById("flights1");
    let fli2=flights.getElementById("restaurants1");
    fli.classList.remove("flights1");
    fli2.classList.remove("restaurants1");
  }
  function addrest(){
    let fli2=flights.getElementById("restaurants1");
    fli2.classList.remove("flights1");
    fli2.classList.remove("hotels1");
  }

</script>   
  

</body></html>
