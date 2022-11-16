<?php 
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);


echo "<!DOCTYPE html><html><head><title>first web dev</title><link rel='stylesheet' type='text/css' href='ss.css'><link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'> </head><body> ";


      $user= $user_data['user_name'];
      $sql = "select * from flights WHERE user='$user'";
      $result = $con->query($sql);
      echo "<table style='margin:auto;' border='1' >";
      echo "<caption><strong><h1>My Flights</h1></strong></caption>";
    echo "<th>Flight-no</th><th>Start</th><th>Destination</th><th>Price</th>";
      if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['fno'] . "</td><td>" . $row['src'] . "</td><td>" . $row['dst'] . "</td><td>" . $row['price'] . "</td></tr>";
  }
} else {
  echo "0 results";
}



   //echo "<h1>My Hotels</h1>";
      $sql = "select * from hotels WHERE user='$user'";
      $result = $con->query($sql);
      echo "<table style='margin:auto;' border='1' >";
      echo "<caption><strong><h1>My Hotels</h1></strong></caption>";
    echo "<th>Hotel-name</th><th>Address</th><th>Rating</th><th>Provider</th>";
      if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['title'] . "</td><td>" . $row['addr'] . "</td><td>" . $row['star'] . "</td><td>" . $row['prov'] . "</td></tr>";
  }
} else {
  echo "0 results";
}

   
   $sql = "select * from foods WHERE user='$user'";
      $result = $con->query($sql);
      echo "<table style='margin:auto;' border='1' >";
      echo "<caption><strong><h1>My Restaurants</h1></strong></caption>";
    echo "<th>Restaurant-Name</th><th>Rating</th><th>Cuisine</th><th>Status-Now</th>";
      if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['star'] . "</td><td>" . $row['cuisine'] . "</td><td>" . $row['status'] . "</td></tr>";}

} else {
  echo "0 results";
}
   
  

echo "</body></html>";

?>
 