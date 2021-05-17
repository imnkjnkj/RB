<?php
      require_once 'config.php';

function loginUser($conn,$u, $p){
    $conn=mysqli_connect("localhost","root","","realbook");
    $sql="select *from admin where username =' ".$u."' and password= '" .$u."' ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        echo"Thông tin đăng nhập không đúng";
    }   
    else{
        include('homepage.php');
    } 
}
