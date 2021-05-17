<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
//Kết nối tới database
include('config.php');
  
//Lấy dữ liệu nhập vào
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
  
//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
if (!$username || !$password) {
echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
  
// mã hóa pasword
$password = md5($password);
  
//Kiểm tra tên đăng nhập có tồn tại không
$query = mysql_query("SELECT username, password FROM member WHERE username='$username'");
if (mysql_num_rows($query) == 0) {
echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
  
//Lấy mật khẩu trong database ra
$row = mysql_fetch_array($query);
  
//So sánh 2 mật khẩu có trùng khớp hay không
if ($password != $row['password']) {
echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
  
//Lưu tên đăng nhập
$_SESSION['username'] = $username;
echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
die();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald:300"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="login.css" />
    <title>Log in - RealBook</title>
  </head>
  <body>
    <div class="container">

      <div class="top">
        <img src="https://i.imgur.com/Ih4Cbv2.png" alt="" />
        <p>Đăng nhập vào Real Book</p>
      </div>
      <div class="login">
      <form action='login.php?do=login' class="dangnhap" method='POST'> 
          Tên đăng nhập : <input type='text' name='username' /> 
          Mật khẩu : <input type='password' name='password' /> 
<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
          <a href="#">Forgot password?</a>
\        </form>
 

      </div>
      
    </div>

  </body>

</html>
