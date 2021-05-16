<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Sách - RealBook</title>

    <link href="tinsach.css" rel="stylesheet">
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
        <a href="tinsach.php">Tin Sách</a>
    </div>

    <div class="content">
      <div class="trai">
        <div class="head">
          <p>Tin Sách</p>
        </div>

        <div class="gr1">
            <?php include('tinsach .inc .php');
            ?>
       </div>
    </div>

<div class="phai">
    <!-- <div class="head1">
        <p>Bài viết mới</p>
    </div>
    <div class="c1">
            <div class="it1">
              <img src="" alt="">
              <div class="title">djfbhjskfbkajf</div>
              <div class="noidung"></div>
              <span> 
                <img src="https://i.imgur.com/42mPhdJ.png" alt="">
                15/05/2021
             </span>
              <span>
              <img src="https://i.imgur.com/RmK2GqN.png" alt="">
                tranthianhnhi
              </span>
            </div>
            <div class="it1">
              <img src="" alt="">
              <div class="title">djfbhjskfbkajf</div>
              <div class="noidung"></div>
              <span> 
                <img src="https://i.imgur.com/42mPhdJ.png" alt="">
                15/05/2021
             </span>
              <span>
              <img src="https://i.imgur.com/RmK2GqN.png" alt="">
                tranthianhnhi
              </span>
            </div>
    </div> -->
    <?php 
    include ('baivietmoi.php');
    ?>
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
</div>
</div>
</body>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
</html>