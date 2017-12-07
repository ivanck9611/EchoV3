<!DOCTYPE HTML>
<head>
<title>Echo.com</title>
<style type="text/css">
<style>

.button
{
    width: 116px;
    height: 50%;
    padding: 5px;
    background-color: #555;
    color: white;
    border-radius: 5px;
}
#cover
{
position:fixed;
top:0;
left:0;
background-color:#F2F2F2;
z-index:1;
width:100%;
height:100%;
display:none;

}

#signupscreen
{
height:450px;
width:450px;
top:80px;
left:455px;
position:fixed;
z-index:10;
display:none;
box-shadow: -8px 8px 20px 8px rgba(0,0,0,0.2);
background-color:white;
border:5px solid #00000;
border-radius:5px;
font-family:sans-serif;
}
#loginscreen
{

height:auto;
width:auto;
top:5px;
left:900px;
position:fixed;
display:none;
background-color:white;
}


#signupscreen:target, #signupscreen:target + #cover{ display:block; opacity:0.9; }

#loginscreen:target,#loginscreen:target + #cover{ display:block; opacity:0.9; }


.cancel
{
display:block;
position:absolute;
top:0px;
right:0px;
background-color:rgb(245,245,245);
color:gray;
height:30px;
width:35px;
font-size:30px;
text-decoration:none;
text-align:center;
}
.cancel:hover
{

	color:red;

}

.hi{
  text-decoration: none;
  color: white;
  font-family: gurmukhi sangam mn;
}

</style>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "dropdownmenu.css">
<link rel = "stylesheet" type = "text/css" href = "Headerbtn.css">
</head>
<body>
  <table align= "right">
  <tr>

    <td class="LOGINbtn"><a class ="hi" href="#loginscreen">Login </a>&nbsp;|
	<td>
    <a class ="hi" href="#signupscreen">&nbsp;&nbsp;Sign up </a></td>
	<tr>
	<td>  <div id = "loginscreen"> <a href="#" class="cancel">&times;</a>
		<?php include 'Login.php'; ?>
	    </td>

  </tr>
</td>
</tr>

</table>

  <div class="banner">
      <link rel="stylesheet" type="text/css" href="Styles/banner.css">
  </div>

  <div class="container lightGreen pullDown">
    <a href="index.php">HOME</a>
    <a href="Category.php" target="myframe">CATEGORY</a>
    <a href="AboutUs.html" target="myframe">ABOUT US</a>
    <a href="FAQ.php" target="myframe">FAQ</a>
    <a href="contactus.php" target="myframe">CONTACT US</a>
    <a href="Cart.php" target="myframe">CART</a>

  </div>
<div id="signupscreen">
		<a href="#" class="cancel">&times;</a>
		<?php include 'signup.php'; ?>
</div>
<div id="cover"></div>

</body>
</html>
