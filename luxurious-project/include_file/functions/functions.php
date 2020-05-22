<?php

$conn = mysqli_connect("localhost","root","","fancy-hardware");

function get_main_cat(){
	global $conn;
	$a = "select * from main_category";
	$b = mysqli_query($conn,$a);
	while ($c = mysqli_fetch_array($b)) {
		$d = $c['cat_id'];
		$e = $c['title'];		echo "<a href='products.php?maincat=$d'><li>$e</li></a>";
	}
}

?>