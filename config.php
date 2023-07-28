
<?php 
	$currency = '$';
	$server ='localhost';
	$username ='root';
	$password ='';
	$namedb ='store_lq';

	$conn = mysqli_connect($server,$username,$password,$namedb);

	if ($conn) {
		
		mysqli_query($conn,"SET NAMES 'utf8'");
	}
	else {

		echo "kết nối thất bại";
	}
 ?>