<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Sách - RealBook</title>

    <link href="review.css" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css?family=Oswald"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald:300"
      rel="stylesheet"
      type="text/css"
    />
     <!-- Bootstrap CSS -->
     <link
     rel="stylesheet"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous"
   />
</head>
<body>
<div class="container-my">
    <div class="navbar-my">
        <a href="homepage.php">
        <img src="https://i.imgur.com/Ih4Cbv2.png" alt="" />
        </a>
        <div class="list">

          <div class="tin">
            <a href="tinsach.php" >
              <div class="chu">
              <img src="https://i.imgur.com/Yv917Nm.png" alt="" />
              <p>Tin Sách</p>
              </div>
              <div class="icon">
              <img src="https://i.imgur.com/F6wuHgN.png" alt="" ></div>
            </a>
          </div>

          <div class="review">
            <a href="review.php"
              >
              <div class="chu">
              <img src="https://i.imgur.com/Mp1Jbku.png" alt="" />
              <p>Review Sách</p>
              </div>
              <div class="icon">
              <img src="https://i.imgur.com/F6wuHgN.png" alt="" ></div>
            </a>
          </div>

          <div class="cafe">
            <a href="cafesach.php"
              >
              <div class="chu">
              <img src="https://i.imgur.com/k9S2y8Y.png" alt="" />
              <p>Cafe Sách</p>
              </div>
              <div class="icon">
              <img src="https://i.imgur.com/F6wuHgN.png" alt="" ></div>
            </a>
          </div>

          <div class="goiy">
            <a href="goiysach.php"
              >
              <div class="chu">
                <img src="https://i.imgur.com/AtyL8Y2.png" alt="" />
              <p>Gợi Ý Sách</p>
              </div>
              <div class="icon">
              <img src="https://i.imgur.com/F6wuHgN.png" alt="" ></div>

            </a>
          </div>
        </div>

        <div class="search-1">
          <input type="text" class="search" placeholder="Nhập từ khoá..."> 
          <img src="https://i.imgur.com/oqccuuD.png" alt="" />
        </div>
    </div>
    <div class="header">
        <a href="homepage.php">Trang chủ /</a>
        <a href="reviews.php">Review Sách</a>
    </div>

    <div class="content">
      <div class="head">
        <p>Review Sách </p>
      </div>

      <div class="body">
        <!-- <div class="it1">
            <img src="./icon/c6071f2f4141df9e128c2c33e8f78e75.jpeg" alt="">
              <div class="title">Đàn Ông Sao Hỏa Đàn Bà Sao Kim </div>

              <button type="button">Đọc Tiếp</button>
              <br>
              <div class="du">
             <span> 
            <img src="https://i.imgur.com/42mPhdJ.png" alt="">
            </span>
            <span>
            <img src="https://i.imgur.com/RmK2GqN.png" alt="">
            tranthianhnhi
            </span>
            </div>
            </div> -->
          <?php
            include ('review .inc .php');
          ?>
            
        </div>


    </div>


    <div class="footer-my">
  <div class="top">
    <img src="https://i.imgur.com/Ih4Cbv2.png" alt="">
    <p>REAL BOOK</p>
  </div>
  <div class="down">
    <div class="left">
      <p>ABOUT US: <br> <br>

        Mọi bài viết đăng tải trên trang web được chắt lọc và tổng hợp từ các bài viết, ý kiến các chuyên gia và sách báo để đem đến cho bạn đọc nguồn thông tin đa dạng chính xác. </p>
  
    </div>

      <div class="right">
        <p>
          CÁC TRANG:
          <br> <br>
          <li> Liên Hệ
          <li> Giới Thiệu
          <li> Bản Quyền

        </p>

      </div>

</div>
</body>
</html>