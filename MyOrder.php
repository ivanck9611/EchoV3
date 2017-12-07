<!DOCTYPE html>
<head>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="validation3.js"></script>
</head>
<style>
body {margin:10;}

.icon-bar {
    width: 100%;
    overflow: auto;
}

.icon-bar a {
    float: left;
    width: 20%;
    text-align: center;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: black;
    font-size: 20px;
}

.icon-bar a:hover {
    background-color: #666666;
}

.active {
    background-color: #999999 !important;
}
</style>

<body>
  <p class = 'f' style="text-align:center font-size: 30px;">My Profile</p>
  <div class="icon-bar" style="text-align:center;margin-left: 25%;">
    <a href="Myprofile.php" target = "myframe"><i class="fa fa-address-book-o"><br>My Profile</i></a>
    <a href="Changepassword.php" target = "myframe"><i class="fa fa-unlock-alt"><br>Change Password</i></a>
    <a href="MyOrder.php" target = "myframe"><i class="fa fa-edit"><br>My Order</i></a>
  </div>

<?php

session_start();

if(!isset($_SESSION['Email']))
{

echo "<h2>Please Login first</h2>";

}
else
{

include 'Connection.php';



echo "<p class = 'f'> My order </p> <hr>";

echo "<table cellspacing = 5 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:400;'> <tr align = center>";

echo "<td> <strong>Order Id  <td> <strong> Payment Method <td> <strong> Name of Credit Card <td><strong> Name on Credit Card <td><strong>Credit Card No<td> <strong> <strong>Shipping Address </td><td><strong> Order Ammount  <td><strong> Email id <td><strong> Action </td> <tr align = center>";

if(isset($_SESSION['Email']))
{
	$eid = $_SESSION['Email'];


$result = mysqli_query($db,"select * from orders where Email_id = '$eid'") or die("Error in Selecting Data from Orders");

while($row = mysqli_fetch_row($result))
{

	echo "<td>".$row[0];
	echo "<td>".$row[9];
	echo "<td>".$row[11];
	echo "<td>".$row[10];
	echo "<td>".$row[12];
	echo "<td>".$row[7];
	echo "<td>"."HKD$".$row[15];
	echo "<td>".$row[18];
	echo "<td> <a href = 'viewcart.php?id=$row[0]&em=$row[18]'>View </a>";
	echo "<tr align = center>";
}

echo "</tr></table>";

}
}
?>
</body>
</html>
