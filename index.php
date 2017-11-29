<?php

session_start();

if(isset($_GET['logout']))
{
unset($_SESSION['Email']);
unset($_SESSION['name']);

if(isset($_SESSION['Admin']))
{
unset($_SESSION['Admin']);
}
}


?>

<! DOCTYPE HTML>
<head>
<title>Echo.com</title>
</head>
<body>
<?php include 'InputHeader.php'; ?>

<iframe src = "Contain.php" style = " border: 0px; height:1200px; width:25%;" seamless="seamless">
</iframe>
<iframe src = "Show.php" style = " border : 0px;width:100%; height:1070px;position:absolute;" name="myframe" seamless="seamless">
</iframe>


<footer>
 <?php include 'Footer.php'; ?>
</footer>

</body>
</html>
