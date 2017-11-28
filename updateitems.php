<?php

include 'Connection.php';

if(isset($_POST['submit']))
{

$p = $_POST['id'];

$pri = $_POST['p'];

$c = $_POST['cat'];


	if($c == 'router')
	{

	$query2 = "UPDATE router SET Price = '$pri' WHERE id = '$p'";

	$l2 = mysqli_query($db,$query2);

		if($l2)
		{
			echo "Successfully Update item Details........";
		}
	else
	{
			echo "Failed to Update item Details........";
	}

	}
	elseif($c == 'woman')
	{

	$query = "UPDATE woman SET Description = '$d' WHERE Product_id = '$p'";
	$query2 = "UPDATE woman SET Price = '$pri' WHERE Product_id = '$p'";

	$l = mysqli_query($db,$query);
	$l2 = mysqli_query($db,$query2);

	if($l)
	{
		if($l2)
		{
			echo "<h2>Successfully Update item Details........</h2>";
		}
	}
	else
	{
			echo "<h2>Failed to Update item Details........</h2>";
	}


	}
	else
	{

	}



mysqli_close($db);


}

?>
