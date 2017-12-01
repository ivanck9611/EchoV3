<!DOCTYPE html>
<head>
<title>My Profile</title>
<link href="menu.css" rel="stylesheet" type="text/css"/>
<link href="mystyle.css" rel="stylesheet" type="text/css"/>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "Styles/contactus.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
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

echo "<h2>Please Login first...........</h2>";

}
else
{

$e = $_SESSION['Email'];

include 'Connection.php';

$result = mysqli_query($db,"SELECT * from signuptable where EmailId = '$e' ");

$row = mysqli_fetch_row($result);

?>

<div style = "height: 1000px; width: 1000px;">
<br>

<p class = 'f'> My Profile</p>
<hr>
<form id="contact" action="" method="post">

  <fieldset>
    First Name:
    <br>
    <input name="firstname" placeholder="<?php echo $row[1] ?>" type="text" tabindex="1" required autofocus>
  </fieldset>
  <fieldset>
    Last Name:
    <br>
    <input name="lastname" placeholder="<?php echo $row[2] ?>" type="text" tabindex="1" required autofocus>
  </fieldset>
  <fieldset>
    Gender:
    <br>
    <input name="gender" placeholder="<?php echo $row[3] ?>" type="text" tabindex="1" required autofocus>
  </fieldset>
  <fieldset>
    Contact no:
    <br>
    <input name="contactno" placeholder="<?php echo $row[4] ?>" type="text" tabindex="1" required autofocus>
  </fieldset>
  <fieldset>
    <button name="send" type="submit" id="contact-submit" data-submit="...Sending">Save Changes</button>
  </fieldset>

</form>
<?php
}


?>

</body>
</html>
