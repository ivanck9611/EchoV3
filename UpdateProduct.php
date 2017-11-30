<?php
session_start();
if(!isset($_SESSION['Admin']))
{

echo "<h2>Please Login First.....</h2>";

}

else
{

?>

<!DOCTYPE html>
<head>
<title>Update Product</title>

<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
 <h1 align = center class = "f"> Update Product </h1><hr>

<form method="post" action="<?php $_PHP_SELF ?>">
<table  border="0" cellpadding="9" cellspacing="9">
  <tr>
	<td>Product Type :</td>
    <td><select name="menu1" required>
      <option value = ""> ------------------------Select------------------------</option>
      <optgroup name = "Category" label = "Category">
        <option> router</option>
        <option> speaker</option>
        <option> hifi</option>
        <option> portable speaker</option>
        <option> headphone</option>
        <option> mouse</option>
        <option> keyboard</option>
      </optgroup>
    </select> </td>

	<td><input name="submit" type = "submit"  name = "submit" value = "Display" class="d"> </td>
  </tr>
  </table>
</form>
</body>
</html>

<?php

}

?>

<?php

include 'Connection.php';

if(isset($_POST['submit']))
{

$m = $_POST['menu1'];

if($m == 'router')
{
	$result = mysqli_query($db,"SELECT * FROM router where category = '$m'");
}

elseif($m == 'headphone')
{
	$result = mysqli_query($db,"SELECT * FROM headphone where  Category = '$m'  ");
}
elseif($m == 'speaker')
{
	$result = mysqli_query($db,"SELECT * FROM speaker where  Category = '$m'  ");
}
elseif($m == 'portablespeaker')
{
	$result = mysqli_query($db,"SELECT * FROM portablespeaker where  Category = '$m'  ");
}
elseif($m == 'keyboard')
{
	$result = mysqli_query($db,"SELECT * FROM keyboard where  Category = '$m'  ");
}
elseif($m == 'mouse')
{
	$result = mysqli_query($db,"SELECT * FROM mouse where  Category = '$m'  ");
}
elseif($m == 'hifi')
{
	$result = mysqli_query($db,"SELECT * FROM hifi where  Category = '$m'  ");
}


echo "<table cellspacing = 20 cellpadding = 5> <tr align = center>";

$count = 0;

while($row = mysqli_fetch_array($result))
{
	$count++;
	$id = $row[0];

	echo "<td style = 'background-color:#e8e9e7;'><a href = 'UpdateItemsDetails.php?i=$id&c=$m'> <img src = '".$row[5]."' height = 307 width = 230> </a>";

	if($count == 5)
	{
		echo "<tr>";
	}
	if($count > 5)
	{
		$count = 0;
	}


}

echo "</tr> </table>";


mysqli_close($db);

}

?>
