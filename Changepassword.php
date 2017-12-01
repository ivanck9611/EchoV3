<?php

session_start();

if(!isset($_SESSION['Email']))
{

echo "<h2>Please Login first...........</h2>";

}
else
{

?>

<!DOCTYPE html>
<head>
<title>Change Password</title>
<script src="passvalidation.js"></script>
</head>
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

<p class = "f">Change Password</p>
<hr>

<form id="contact" <form name="Change" action = "Updatepassword.php" method = "post" onSubmit="return check()">

  <fieldset>
    New Password:
    <br>
    <input name="npassword" placeholder="New Password" type="text" tabindex="1" required autofocus>
  </fieldset>
  <fieldset>
    Comfirm Password:
    <br>
    <input name="c_password" placeholder="Comfirm Password" type="text" tabindex="1" required autofocus>
    <br>
    </fieldset>
    <input type="submit" name = "submit" value = " Change Password " class = "Addtocart">
</form>
</body>
</html>
<?php
}
?>
