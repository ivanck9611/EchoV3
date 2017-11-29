<HTML>
<head>
<title>FashioMode.com</title>
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



					<div align="center" style="top:0px">
<table align="center" class = "t">
				<tr>

				<td style = "text-align:center"><a href="index.php"><button class = "btn">Home </button> </a></td>

	<td style = "text-align:center" class = "menu">
		<div class="dropdown2">Category
	<div class="dropdown-content2">
		<a href="Menwear.php" target= "myframe">Men's Wear</a>
	<a href="WomanWear.php" target= "myframe">Woman's Wear </a>
	</div> </div></td>

	<td style = "text-align:center"><a href = "ContactUs.php" target = "myframe"><button class = "btn">Contact us</button></a></td>


	<td style = "text-align:center" class = "menu">
		<div class="dropdown2"> <?php echo "$p" ?>
	<div class="dropdown-content2">
		<a href="Myprofile.php" target = "myframe">My Profile</a>
		<a href="Changepassword.php" target = "myframe">Change Password</a>
		<a href="MyOrder.php" target = "myframe">My Order</a>
		<a href="index.php?logout">Logout</a>
	</div> </div></td>

					<td style = "text-align:center"> <a href="Cart.php" target = "myframe"><button class = "btn">Cart</button></td>
				</tr>
			</table>

</div>

</body>
</html>
