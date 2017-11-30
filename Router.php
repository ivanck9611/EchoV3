<!DOCTYPE HTML>
<head>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
<?php


include 'Connection.php';

$result = mysqli_query($db,"SELECT * FROM router");

echo "<p class = 'f'> ROUTER</p>";

echo "<table class=hovertable'> <tr>";

$c = 0;

//p=category p2=id p3=name
while($row = mysqli_fetch_array($result))
{
$c++;

echo "<td class=tdproduct onmouseover=this.style.backgroundColor='#D8D8D8' onmouseout=this.style.backgroundColor='#fff'>
<a href ='DisplayProduct.php?p=$row[1]&p2=$row[0]&p3=$row[2]'><img class=show src ='".$row['path']."' height = 245 width = 245>
</a><br><br>
<span class=price style = 'font-family:Rupee Foradian' >Product Name: </span>".$row['name'];
echo "<br><span class=price style = 'font-family:Rupee Foradian' >HKD$</span>".$row['price'];

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
