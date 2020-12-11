<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "dodo");
	$query = mysqli_query($connect, "SELECT * FROM products WHERE id = '{$_GET['id']}'");
	$result = $query->fetch_assoc();	
	$ins = "INSERT INTO trash ( name, description, price, img) VALUES ('".$result["name"]."','".$result["description"]."','".$result["price"]."','".$result["img"]."')";
	mysqli_query($connect, $ins);
	header("location:index.php");
?>