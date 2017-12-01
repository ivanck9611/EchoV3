<?php
session_start();
if(!isset($_SESSION['Admin']))
{

echo "<h2> Please Login First..... </h2>";

}
else
{

?>

<! DOCTYPE HTML>
<head>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
<script language = "javascript">
function seeList(form)
{
	var result = ""
	for (var i = 0; i < form.menu1.length; i++)
	{
		if (form.menu1.options[i].selected)
		{
			result += "\n " + form.menu1.options[i].label
		}
	}
			document.getElementById("optionlable").value = result;
}

</script>
</head>
<body>

<h1 align = center class = "f"> Add Products </h1>
<hr>
<form  method="post" action="<?php $_PHP_SELF ?>" enctype = "multipart/form-data">
<table width="450" cellpadding="9" cellspacing="9">
	<tr>
	 <td>Name</td>
	 <td>
				 <textarea name="name" rows="1" cols="35" required ></textarea>
				 <div style = "visibility:hidden;"><input type = "text" name = "lable" id = "optionlable"></div></td>
 </tr>
 <tr>
  <tr>
    <td>Brand Name</td>
    <td>
			<textarea name="brands" rows="1" cols="35" required ></textarea>
			<div style = "visibility:hidden;"><input type = "text" name = "lable" id = "optionlable"></div></td>

  </tr>
  <tr>
    <td>Product Type</td>
    <td>
<select name="menu1" id = "m" class = "in40">
<option> ------------------------Select------------------------</option>
<optgroup name = "producttype" label = "Category">
<option  label = "router" value="router"><rb></rb>Router</option>
<option label = "headphone" value="headphone">Headphone</option>
<option label = "speaker" value="speaker">Speaker</option>
<option label = "hifi" value="hifi">Hi-Fi</option>
<option label = "portablespeaker" value="portablespeaker">Portable speaker</option>
<option label = "mouse" value="mouse">Mouse</option>
<option label = "keyboard" value="keyboard">Keyboard</option>
</optgroup>
    </select>
	</td></tr>

<tr>
<td>Product Image Path</td>
<td>
<select name="menu2" id = "m" class = "in40">
<optgroup name = "imgpath" label = "Image Path">
<option label = "routerpath" value="img/products/router/">Router Img Path</option>
<option label = "headphonepath" value="img/products/headphone">Headphone Img Path</option>
<option label = "speakerpath" value="img/products/speaker">Speaker Img Path</option>
<option label = "hifipath" value="img/products/HiFi/">Hi-Fi Img Path</option>
<option label = "portablespeakerpath" value="img/products/PortableSpeaker">Portable Speaker Img Path</option>
<option label = "mouse" value="img/products/mouse">Mouse Img Path</option>
<option label = "keyboard" value="img/products/keyboard">Keyboard Img Path</option>
</optgroup>
    </select>
	</td></tr>

    <td>Price</td>
    <td style = "font-family:Rupee Foradian">$
      <input type="text" name="price" size = 16 required>        </td>
  </tr>
  <tr>
    <td>Upload Image </td>
    <td> &nbsp;  &nbsp;<input type = "file" name = "FileToUpload" required>     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="submit" type = "submit" name = "submit" value = "Add Product" class="button3" onclick = "seeList(this.form) ">
        <input name="clear" type = "reset" value = "Clear" class="button4">      </td>
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

//name
$n = $_POST['name'];

$b = $_POST['brands'];

//category
$c = $_POST['menu1'];

$path = $_POST['menu2'];

//price
$p = $_POST['price'];

$lab =  trim($_POST['lable']);

$tf = $path.basename($_FILES['FileToUpload']['name']);

//img path
$np = $tf;

if($c == 'router')
{
	mysqli_query($db,"INSERT INTO router(Category, name, brand, price, path) VALUES('".$c."', '".$n."', '".$b."', '".$p."', '".$np."')") or die("Failed to Insert Data in Database");
}

elseif($c == 'headphone')
{
	mysqli_query($db,"INSERT INTO hedphone(Category, name, brand, price, path) VALUES('".$lab."', '".$b."', '".$p."', '".$np."', '".$desc."')") or die("Failed to Insert Data in Database");
}
elseif($c == 'speaker')
{
	mysqli_query($db,"INSERT INTO speaker(Category, name, brand, price, path) VALUES('".$lab."', '".$b."', '".$p."', '".$np."', '".$desc."')") or die("Failed to Insert Data in Database");
}
elseif($c == 'hifi')
{
	mysqli_query($db,"INSERT INTO hifi(Category, name, brand, price, path) VALUES('".$lab."', '".$b."', '".$p."', '".$np."', '".$desc."')") or die("Failed to Insert Data in Database");
}
elseif($c == 'portablespeaker')
{
	mysqli_query($db,"INSERT INTO portablespeaker(Category, name, brand, price, path) VALUES('".$lab."', '".$b."', '".$p."', '".$np."', '".$desc."')") or die("Failed to Insert Data in Database");
}
elseif($c == 'mouse')
{
	mysqli_query($db,"INSERT INTO mouse(Category, name, brand, price, path) VALUES('".$lab."', '".$b."', '".$p."', '".$np."', '".$desc."')") or die("Failed to Insert Data in Database");
}
elseif($c == 'keyboard')
{
	mysqli_query($db,"INSERT INTO keyboard(Category, name, brand, price, path) VALUES('".$lab."', '".$b."', '".$p."', '".$np."', '".$desc."')") or die("Failed to Insert Data in Database");
}


$flag = "";

if($_FILES['FileToUpload']['name'] != "" )
{
$fileType = pathinfo($tf,PATHINFO_EXTENSION);

$check = getimagesize($_FILES['FileToUpload']['tmp_name']);

if($check == true)
{
	$flag = 1;
}

else
{
	echo "<h3> File is not an Image</h3>";
	$flag = 0;

}

if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif")
{

echo "<h3>This Type of File is Not allowed</h3>";
$flag = 0;

}
else
{

$flag = 1;

}

if(file_exists($tf))
{

echo "<h3>File is Already Exists.....!!!</h3>";
$flag = 0;
}
else
{
$flag = 1;
}

if($flag == 1)
{
move_uploaded_file($_FILES['FileToUpload']['tmp_name'], $tf) or die( "Could not Move file!");

echo "<h3>Successfullly Product Added....!!!!</h3>";
}
else
{

echo "</br> <h3>Failed to Upload file....!!!!</h3>";

}

}

else
{
echo "<h3> No file Selected....<h3>";

}

mysqli_close($db);
}
?>
