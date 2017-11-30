<!DOCTYPE HTML>
<head>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
<?php


include 'Connection.php';

$result = mysqli_query($db,"SELECT * FROM mouse");

echo "<p class = 'f'> MOUSE</p>";

echo "<table cellspacing = 5 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:400;'> <tr>";

$c = 0;

//p=category p2=id p3=name
while($row = mysqli_fetch_array($result))
{
$c++;

echo "<td class=tdproduct>
<a href ='DisplayProduct.php?p=$row[1]&p2=$row[0]&p3=$row[2]'><img src ='".$row['path']."' height = 245 width = 245> </a
><br><br>
<span class=price style = 'font-family:Rupee Foradian' ></span>".$row['name'];
echo "<br><span class=price style = 'font-family:Rupee Foradian' >HKD$</span>".$row['price'];
echo "<td></td>";
if($c == 3)
{
echo "<tr>";
}

if($c >= 3)
{
$c = 0;
}
}


echo "</td></tr></table>";

mysqli_close($db);

?>


</body>
</html>
