<?php 
include('config.php');

$conn=mysqli_connect("localhost","root","","realbook");
$sql="sELECT tieude, SUBSTRING(noidung,1,450), hinh from contentlist where tag = 'tin sach' 
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
            <img src=" '.$row["hinh"].'" alt="">
            <div class="title">
            '.$row["tieude"].'
            </div>
            <div class="noidung">
            '.$row["SUBSTRING(noidung,1,450)"].'
            </div>
            <span> 
            <img src="https://i.imgur.com/42mPhdJ.png" alt="">
            15/05/2021
            </span>
            <span>
            <img src="https://i.imgur.com/RmK2GqN.png" alt="">
            tranthianhnhi
            </span>
        </div>
    ';
    //   $row["tieude"]."<br>";
    //   echo $row["noidung"]."<br>";
    //   echo $row["hinh"]."<br>";
    //   echo '<img src="'.$row["hinh"].'">';
  
  }
  return $row;
  }
  else {
    echo "0";
  }
  mysqli_close($conn);