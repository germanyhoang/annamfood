<?php 		
ob_start();
require_once "db.php";
	$idSP = $_GET["idSP"];
	$sql= "SELECT * FROM daychuyen WHERE idSP=".$idSP;
	$result = mysqli_query($conn,$sql);

	$product_cart = array();
	foreach ($result as $value) {
		$product_cart[$value["idSP"]]= $value;
	} 
	//$detail = $product_cart[$idSP];
	// echo "<pre>";
	// print_r($detail); 
	if (isset($_POST["themvaogiohang"])) {
		$sl = $_POST["sl"];
			if (!isset($_SESSION["cart"])|| $_SESSION["cart"] ==null) {
		$product_cart[$idSP]["sl"] = $sl;
		
		$_SESSION["cart"][$idSP] = $product_cart[$idSP];
	}
	else{
		if (array_key_exists($idSP, $_SESSION["cart"])) {
			$_SESSION["cart"][$idSP]["sl"] +=$sl;
		}
		else{
			$product_cart[$idSP]["sl"] = $sl;
			$_SESSION["cart"][$idSP] = $product_cart[$idSP];
			
		}
		
		}
		
		
       

	}
	
	 
 ?>
 <script> location.replace("../layout.php?page=viewcart"); </script>