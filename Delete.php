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

		$query = "SELECT path from speaker where id = '$p'";
		$r = mysqli_query($db, $query);
		$r2 = mysqli_fetch_array($r);
		$string =  $r2['path'];
		$newstring = str_replace('/img/poducts/speaker/','',$string);
		$query = "DELETE from speaker where id = '$p'";

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

elseif($c == 'hifi')
{

	$query = "SELECT path from hifi where id = '$p'";
	$r = mysqli_query($db, $query);
	$r2 = mysqli_fetch_array($r);
	$string =  $r2['path'];
	$newstring = str_replace('/img/poducts/hifi/','',$string);
	$query = "DELETE from hifi where id = '$p'";

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

elseif($c == 'portable speaker')
{

	$query = "SELECT path from portable speaker where id = '$p'";
	$r = mysqli_query($db, $query);
	$r2 = mysqli_fetch_array($r);
	$string =  $r2['path'];
	$newstring = str_replace('/img/poducts/portable speaker/','',$string);
	$query = "DELETE from portable speaker where id = '$p'";

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

elseif($c == 'headphone')
{

	$query = "SELECT path from headphone where id = '$p'";
	$r = mysqli_query($db, $query);
	$r2 = mysqli_fetch_array($r);
	$string =  $r2['path'];
	$newstring = str_replace('/img/poducts/headphone/','',$string);
	$query = "DELETE from path where id = '$p'";

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
elseif($c == 'keyboard')
{

	$query = "SELECT path from keyboard where id = '$p'";
	$r = mysqli_query($db, $query);
	$r2 = mysqli_fetch_array($r);
	$string =  $r2['path'];
	$newstring = str_replace('/img/poducts/keyboard/','',$string);
	$query = "DELETE from keyboard where id = '$p'";

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

elseif($c == 'mouse')
{

	$query = "SELECT path from mouse where id = '$p'";
	$r = mysqli_query($db, $query);
	$r2 = mysqli_fetch_array($r);
	$string =  $r2['path'];
	$newstring = str_replace('/img/poducts/mouse/','',$string);
	$query = "DELETE from mouse where id = '$p'";

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
