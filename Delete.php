<?php

include 'Connection.php';

$c = $_POST['category'];

$p = $_POST['pid'];

$pri = $_POST['price'];

	if($c == 'router')
	{
		$r = mysqli_query($db,"SELECT path from router where id = '$p'");
		while($r2 = mysqli_fetch_array($r)){
		$string =  $r2['path'];
		$newstring = str_replace('/img/poducts/router/','',$string);
		$query = "DELETE from router where id = '$p'";

		$l = mysqli_query($db,$query);
		if($l)
		{
			echo "<h2> Successfully Deleted.........";
			unlink($newstring);
		}
		else
		{
			echo "<h2> Failed to delete...............";
		}

	}
}
	elseif($c == 'speaker')
	{

		$query = "SELECT Imagepath from woman where Product_id = '$p'";
		$r = mysqli_query($db, $query);
		$r2 = mysqli_fetch_array($r);
		$string =  $r2['Imagepath'];
		$newstring = str_replace('/PJ/','',$string);
		$query = "DELETE from woman where Product_id = '$p'";

		$l2 = mysqli_query($db,$query);

		if($l2)
		{
			echo "<h2> Successfully Deleted.........";
			unlink($newstring);
		}
		else
		{
			echo "<h2> Failed to delete...............";
		}

}

else if($c == 'router')
{

	$query = "SELECT Imagepath from woman where Product_id = '$p'";
	$r = mysqli_query($db, $query);
	$r2 = mysqli_fetch_array($r);
	$string =  $r2['Imagepath'];
	$newstring = str_replace('/PJ/','',$string);
	$query = "DELETE from woman where Product_id = '$p'";

	$l2 = mysqli_query($db,$query);

	if($l2)
	{
		echo "<h2> Successfully Deleted.........";
		unlink($newstring);
	}
	else
	{
		echo "<h2> Failed to delete...............";
	}

}

mysqli_close($db);
?>
