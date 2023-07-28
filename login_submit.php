<?php
    session_start();
    include 'config.php';
    if( isset($_POST["submit"]) && $_POST["username"]!='' && $_POST["password"] != '' ){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = " select * from user where username = '$username' and password = '$password'";
        $user = mysqli_query($conn,$sql);
        if( mysqli_num_rows($user) > 0){
            $_SESSION["username"] = $username;
            header("Location: ../layout.php?page=trangchu");
            
        } else{
            $_SESSION["thongbao"]= " sai ten dang nhap hoac mat khau";
            header('location:../layout.php?page=login');
        }}
        else{   
            $_SESSION["thongbao"]= "Xin mời nhập đầy đủ thông tin";
            header("location:../layout.php?page=login");
        }
        ?>