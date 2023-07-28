<?php 
session_start();
$idSP = $_GET["idSP"];
	if (isset($_SESSION["cart"][$idSP])) {
		
		unset($_SESSION["cart"][$idSP]);

		header("location:../layout.php?page=viewcart");
	}
 ?>