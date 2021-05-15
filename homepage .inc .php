<?php 
include('config.php');

$conn=mysqli_connect("localhost","root","","realbook");
$sql="sELECT * from contentlist
LIMIT 1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
  while($row=mysqli_fetch_assoc($result)){
    // echo $row["id"]."<br>";
    echo '<div class="g1">
    <a href="#">
    <img src="'.$row["hinh"].'"class="pic1" alt="">
    
    <p class="title1">
      '.$row["tieude"].'
    </p>
    </a>
  </div>
    ';
    // $row["tieude"]."<br>";
    // // echo $row["noidung"]."<br>";
    // // echo $row["hinh"]."<br>";
    // echo '<img src="'.$row["hinh"].'">';

}
return $row;
}
else {
  echo "0";
}
mysqli_close($conn);
    // "title". $row[1] . "content" . $row[2]. "<img src='$row[3]'>";

