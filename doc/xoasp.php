<?php
 require_once "db.php";
?>
<?php
    $id = $_GET["idSP"];
    $sql = "DELETE FROM daychuyen WHERE  idSP =$id";
    $query  = mysqli_query($conn,$sql);
    header('location: ../doc/quanly.php?page=table-data-product');
    
?>