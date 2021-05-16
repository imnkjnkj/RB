<?php 
include('config.php');
$id=$_GET["id"];

$conn=mysqli_connect("localhost","root","","realbook");
$sql="sELECT tieude,noidung, hinh, id, date,nguon from contentlist 
where id='$id'
";
$result=mysqli_query($conn,$sql);
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
    <title> '.$row["tieude"].'</title>

    <div class="title">
        '.$row["tieude"].'  <br>
        <span> 
        <img src="https://i.imgur.com/42mPhdJ.png" alt="">
        '.$row["date"].'
        </span>
        <span>
        <img src="https://i.imgur.com/RmK2GqN.png" alt="">
        tranthianhnhi
        </span>
    </div>
    
                <img src=" '.$row["hinh"].'" alt="">

    <div class="noidung">
    '.$row["noidung"].' 
    
    <div class="nguon">  <br>
    '."Nguồn:".'
    '.$row["nguon"].'
    </div>
    </div>
    ';
    //   $row["tieude"]."<br>";
    //   echo $row["noidung"]."<br>";
    //   echo $row["hinh"]."<br>";
    //   echo '<img src="'.$row["hinh"].'">';
  
  }
  return $row;
  mysqli_close($conn);