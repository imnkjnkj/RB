<?php 
include('config.php');

$conn=mysqli_connect("localhost","root","","realbook");
$sql="sELECT tieude, SUBSTRING(noidung,1,350), hinh, id, date from contentlist where tag = 'goi y sach' 
";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_assoc($result)){
    //   echo $row["id"]."<br>";

    //   echo '<div class="g1">
    //   <a href="#">
    //   <img src="'.$row["hinh"].'"class="pic1" alt="">
      
    //   <p class="title1">
    //     '.$row["tieude"].'
    //   </p>
    //   </a>
    // </div>
    //   ';
    echo '
    <div class="it1">
    <img src=" '.$row["hinh"].' " alt="">
     <div class="it2">
       <div class="it3">
        <span> 
          <img src="https://i.imgur.com/42mPhdJ.png" alt="">
          '.$row["date"].'
       </span>
        <span>
        <img src="https://i.imgur.com/RmK2GqN.png" alt="">
          tranthianhnhi
        </span>
        <br>
        </div>
      <div class="title">'.$row["tieude"].'</div>
      <div class="noidung">'.$row["SUBSTRING(noidung,1,350)"].' </div>
      <a href="content.php? id='.$row["id"].'">
      <button type="button">Đọc Tiếp</button>
      </div>
      </a>
  </div>
    ';

  }
  return $row;
  }
  else {
    echo "0";
  }
  mysqli_close($conn);