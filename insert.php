<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "shop");
	$ins = "INSERT INTO items(title,descript,img,price) VALUES ('".$_GET["title"]."', '".$_GET["descript"]."','". $_GET["img"] ."', '". $_GET["price"] ."')";
	mysqli_query($connect, $ins);
	header('Location: http://20urok/index.php');
 ?>