<HTML>
<head>
<title>Echo.com</title>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "dropdownmenu2.css">
<link rel = "stylesheet" type = "text/css" href = "Headerbtn.css">
</head>
<body alink = blue vlink = red>
<?php
// $p = $_GET['remark'];

if(isset($_SESSION['name']))
{
	$p = $_SESSION['name'];
}
?>
				<div class="banner">
					<link rel="stylesheet" type="text/css" href="Styles/banner.css">
					</div>


					<div class="container lightGreen pullDown">
				    <a href="index.php">HOME</a>
				    <a href="Category.php" target="myframe">CATEGORY</a>
				    <a href="AboutUs.html" target="myframe">ABOUT US</a>
						<a href="FAQ.php" target="myframe">FAQ</a>
				    <a href="contactus.php" target="myframe">CONTACT US</a>
						<a href="account.php" target="myframe"><?php echo "$p" ?></a>
				    <a href="Cart.php" target="myframe">CART</a>
						<a href="index.php?logout">Logout</a>

				  </div>

</div>

</body>
</html>
