<?php
session_start();
if(!isset($_SESSION['Admin']))
{

echo "<h2>Please Login First....</h2>";

}

else
{

?>

<! DOCTYPE html>
<head>
<title>Delete Product</title>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>

<h1 align = center class = "f"> Delete Product </h1><hr>
<form method="post" action="<?php $_PHP_SELF ?>">
<table  border="0" cellpadding="9" cellspacing="9">
  <tr>
    <td>
	<td>Product Type :</td>
    <td><select name="menu1" required>
   <option value = ""> ------------------------Select------------------------</option>
      <optgroup name = "inputdevices" label = "Category">
        <option> router</option>
        <option> speaker</option>
        <option> hi-fi</option>
        <option> portable speaker</option>
        <option> headphone</option>
        <option> mouse</option>
        <option> keyboard</option>
      </optgroup>
    </select> </td>
  <div style = "visibility:hidden;"><input type = "text" name = "lable" id = "path"></div>	<td><input name="submit" type = "submit"  name = "submit" value = "Display" class="d"> </td>
  </tr>
  </table>
</form>
</body>
</html>

<?php

}

?>

<?php

//menu1=product type
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
	$result = mysqli_query($db,"SELECT * FROM headphone where category = '$m'");
}

echo "<form action = 'Delete.php' method = 'post'>";

echo "<table border = 0 cellspacing = 20 cellpadding = 5> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo " <div style = 'visibility:hidden;'><input type = 'text' name = 'category' value = '".$m."'></div>";
echo "<td> <strong> &nbsp; </td>";
echo "<td> <strong> Product Id </td> ";
echo "<td> <strong>Product Image </td>";
echo "<td> <strong>Product Brand </td>";
echo "<td> <strong>Price </td><tr>";

while($row = mysqli_fetch_array($result))
{

	echo "<td> <input type  = 'radio' name = 'pid' value = '".$row['id']."'  required>";
	echo "<td> <input type = 'text' value = '".$row['id']."' readonly size = 1>";
	echo "<td> <img src = '".$row['path']."' height = 245 width = 245";
	echo "<td> <input type = 'text' value = '".$row['brand']."'  readonly>";
	echo "<td style = 'font-family:Rupee Foradian'>$&nbsp;<input type = 'text' name = 'price' value = '".$row['price']."' size = 5  readonly>";
	echo "<td> <input type = 'submit'  class = 'd' value = 'Delete'> </td>";
	echo "<tr>";
}

echo "</td></tr> </table>";

echo "</form>";


mysqli_close($db);
}
?>
