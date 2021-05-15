<?php
      require_once 'config.php';

function emptyInputLogin ($username,$password) {
    $result;
    if (empty($username) || empty($password)) {
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function uidExists($username){
    $sql="SELECT * FROM admin WHERE username=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: login.php?error=stmttfailed");
        exit();
    }
mysqli_stmt_bind_param($stmt,"s",$username);
mysqli_stmt_execute($stmt);

$resultData=mysqli_stmt_get_result($stmt);
if($row=mysqli_fetch_assoc($resultData)){
return $row;
}
else{
    $result=false;
    return $result;
}
mysqli_stmt_close($stmt);
}

function loginUser($conn,$username, $password){
    $uidExists = uidExists($username);

    if($uidExists == false){
        header("location: login.php?error=wronglogin");
        exit();
        
    }
    $passHashed=$uidExists["password"];
    $checkPass= password_verify($password,$passHashed);

    if($checkPass==false){
        header("location: login.php?error=wronglogin");
        exit();
    }
    else if($checkPass==true){
        session_start();
        $_SESSION["username"]= $uidExists["username"];
        header("location: welcome.php");
        exit();
        }
}