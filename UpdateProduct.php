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
      <optgroup name = "menclothes" label = "Men's Clothes">
        <option> router</option>
        <option> speaker</option>
        <option> hi-fi</option>
        <option> portable speaker</option>
        <option> headphone</option>
        <option> mouse</option>
        <option> keyboard</option>
      </optgroup>
    </select> </td>
	<td>Brand : </td>
	<td>
	<select name="brands" required>
      <option value = ""> ------------------------Select------------------------</option>
	 <option value = "None">None</option>
	  <optgroup name = "Man's Brand" label = "Man's Brand">
	<option> ASUS </option>
	<option>Turtle </option>
	<option>Tom Hatton </option>
	<option>Peter England </option>
	<option>LondonBridge </option>
	<option>Lotto </option>
	</td>
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

$b = $_POST['brands'];

if($m == 'router')
{
	$result = mysqli_query($db,"SELECT * FROM router where category = '$m' and Brand = '$b'");
}

else
{
	$result = mysqli_query($db,"SELECT * FROM woman where ProductType = '$m' and Brand = '$b'");
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
