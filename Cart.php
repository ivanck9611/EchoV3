<!Doctype html>
<body>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<style>
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.6667);
 }
.tbl-content{
  height:100%;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #000;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #000;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}



@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #555, #444);
  background: linear-gradient(to right, #fff, #fff);
  font-family: 'Roboto', sans-serif;
	width:100%;
}
section{
  margin: 50px;
}

/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
</style>

</style>
<h1 class = "f"> Your Shoping Cart</h1>
<hr>

<?php


//
session_start();

include 'Connection.php';

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

	if(isset($_POST['submit']))
	{
			$cate = $_POST['c'];

			$p_id = $_POST['id'];

				if($cate == 'router')
				{
					$q = "select * from router where id = $p_id ";
				}
				else
				{
					$q = "select * from woman where Product_id = $p_id";
				}

					$result = mysqli_query($db, $q) or die("Error in Selecting Data");

					while($r = mysqli_fetch_row($result))
					{
						$items[] = $r;
					}

		$itemArray = array($items[0][0]=>array('id' => $items[0][0], 'name'=>$items[0][2], 'brand'=>$items[0][3],  'quan'=>$_POST["quantity"], 'price'=>$items[0][4], 'image'=> $items[0][5]));

		$_SESSION['cart'] += $itemArray;


	}



			elseif(empty($_SESSION['cart']))
			{
				echo "<h2>There is No Items in Your Cart...........</h2>";
			}


			elseif(isset($_GET['action']))
			{
				foreach($_SESSION["cart"] as $k => $v)
				{
					if($_GET["id"] == $k)
					{
						unset($_SESSION["cart"][$k]);

					}

				}
					if(empty($_SESSION['cart']))
					{

						echo "<h2>There is No Items in Your Cart...........</h2>";

					}

	}


	if(!empty($_SESSION['cart']))
	{
		echo "<a href = 'CheckOut.php' target = 'myframe'><Button class = 'Addtocart'> Check Out </button> </a>";

	}

echo "<div class=tbl-content>";

echo "<table  cellpadding=0 cellspacing=0 border=0> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<thead><tr>
				<th>Product ID</th>
				<th>Image</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Sub total</th>
				<th>Action</th>
			</tr></thead></div>";

$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{

	$i = $item['id'];
	$tp = $item['quan'] * $item['price'];
	$tp2 += $tp;

	echo "<table cellpadding=0 cellspacing=0 border=0>
					<tbody><tr>";
	echo "<td align = 'center'> ".$item['id'];
	echo "<td align = 'center'><img src = '".$item['image']."' height = 120 width = 120>";
	echo "<td align = 'center'> ".$item['price'];
	echo "<td align = 'center'> ".$item['quan'];
	echo "<td align = 'center'>".$tp;
	echo "<td align = 'center'> <a href ='Cart.php?action&id=$i'> <img src = 'remove_x.gif' height = 10 width = 10> </a> </td>";
	echo "</tr>";
	echo "<tr>";


}

	echo "</tr>";
	echo "<tr style = 'background-color:#e8e9e7;'> <td colspan = 5 align = right>Grand Total : <td align = 'center'> <span style = 'font-family:Rupee Foradian'><strong>$ </span>".$tp2;;
	echo "<td> </tr></table>";


?>

</body>
</html>
