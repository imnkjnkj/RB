
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="homepage.css" /> -->
    <link href="homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <title>Real Book</title>
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
        <div id="slide" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#slide" data-slide-to="0" class="active"></li>
            <li data-target="#slide" data-slide-to="1"></li>
            <li data-target="#slide" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="https://i.imgur.com/MOnS2wA.jpg" alt="" />
            </div>
            <div class="carousel-item">
              <img src="https://i.imgur.com/ruPq0uJ.jpg" alt="" />
            </div>
            <div class="carousel-item">
              <img src="https://i.imgur.com/uCvA5D7.jpg" alt="" />
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#slide"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#slide"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <a href="#">
          <p class="name">REAL BOOK</p>
        </a>

        <i><p class="slogan">For Real Life</p></i>
      </div>
        </div>
        

      <div class="content">
        <div class="top">
          <div class="news">
          
            <!-- <div class="g1"> -->
              <!-- <a href="#">
              <img src="./icon/homepage/pic3.jpg" class="pic1" alt="" />
              <p class="title1">
                Đấu Giá Quyển Sách Đã Từng Du Hành <br />
                Đến Mặt Trăng
              </p>
              <img src="/icon/homepage/icon_tinsach.png" class="tag1" alt="" />
              </a>
            </div> -->
            <?php
          include('homepage .inc .php');
          ?>
            <!-- <div class="g2">
              <a href="#">
              <img src="/icon/homepage/pic4 (1).jpg" class="pic" alt="" />
              <p class="title2">5 cuốn sách hay về Samurai đáng nghiền ngẫm</p>
              <p class="mota">
                5 cuốn sách hay về Samurai giúp bạn đọc hiểu thêm về những chiến
                binh Samurai, tầng lớp từng gây ảnh hưởng to lớn trong xã hội Nhật
              </p>
              <img src="/icon/homepage/icon_goiysach.png" class="tag2" alt="" />
            </a>
            </div>

            <div class="g3">
              <a href="#">
              <img src="/icon/homepage/pic5 (1).jpg" class="pic" alt="" />
              <p class="title2">Review sách: Đàn Ông Sao Hỏa Đàn Bà Sao Kim</p>
              <p class="mota">
                Trong tháng này, khi tập trung vào chủ đề tình yêu, tôi quyết định
                xem lại cuốn sách nổi tiếng về các mối quan hệ: Đàn Ông Sao Hỏa
                Đàn Bà Sao Kim của tác giả John Gray.
              </p>
              <img src="/icon/homepage/icon_reviewSach.png" class="tag3" alt="" />
            </a>
            </div>

            <div class="g4">
              <a href="#">
              <img src="/icon/homepage/pic6 (1).jpg" class="pic" alt="" />
              <p class="title2">
                Vừa ra mắt “Con chim xanh biếc bay về” đứng đầu danh sách bán chạy
              </p>
              <p class="mota">
                Vừa ra mắt tác phẩm truyện dài “Con chim xanh biếc bay về” của nhà
                văn Nguyễn Nhật Ánh đang đứng đầu danh sách bán chạy của các trang
                phát hành online.
              </p>
              <img src="/icon/homepage/icon_goiysach.png" class="tag4" alt="" />
            </a>
            </div>

            <div class="g5">
              <a href="#">
              <img src="/icon/homepage/pic2.jpeg" class="pic" alt="" />
              <p class="title2">
                Cuốn Truyện Thiếu Nhi Xuất Sắc Đoạt Giải Nobel Văn Chương
              </p>
              <p class="mota">
                Năm 1906, ở Thụy Điển có một cuộc thi viết truyện cho thiếu nhi
                tiểu học và “Cuộc phiêu lưu kì diệu của Nils Holgersson” đã được
                trao giải nhất.
              </p>
              <img src="/icon/homepage/icon_tinsach.png" class="tag5" alt="" />
            </a>
            </div>

            <div class="g6">
              <a href="#">
              <img src="/icon/homepage/pic7 (1).jpg" class="pic" alt="" />
              <p class="title2">10 lợi ích của việc đọc sách bạn nên biết</p>
              <p class="mota">
                Lần cuối cùng bạn đọc một cuốn sách hoặc một bài báo quan trọng
                trên tạp chí là khi nào? Thói quen đọc hàng ngày của bạn có xoay
                quanh các dòng tweet, cập nhật trên Facebook
              </p>
              <img src="/icon/homepage/icon_cafeSach.png" class="tag6" alt="" />
            </a>
            </div>

            <div class="g7">
              <a href="#">
              <img src="/icon/homepage/pic1 (1).jpg" class="pic" alt="" />
              <p class="title2">Để Chinh Phục Con Ngựa Bất Kham</p>
              <p class="mota">
                Năm 1906, ở Thụy Điển có một cuộc thi viết truyện cho thiếu nhi
                tiểu học và “Cuộc phiêu lưu kì diệu của Nils Holgersson” đã được
                trao giải nhất.
              </p>
              <img src="/icon/homepage/icon_tinsach.png" class="tag7" alt="" />
            </a>
            </div>

          </div>
  
            <div class="resach">
              <div class="title">
                <h3>Review Sách</h3>
              </div>
              <a href="#">
              <div class="r1">
                <img src="/icon/homepage/sach-khong-gia-dinh.jpeg" alt="">
                <div class="r2">
                  <h4>Không Gia Đình</h4>
                  <div class="danhgia">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="r1">
                <img src="/icon/homepage/Biện Hộ Trắng Án.jpeg" alt="">
                <div class="r2">
                  <h4>Biện Hộ Trắng Án</h4>
                  <div class="danhgia">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="r1">
                <img src="/icon/homepage/Kinh Tế Học Hài Hước.jpeg" alt="">
                <div class="r2">
                  <h4>Kinh Tế Học Hài Hước</h4>
                  <div class="danhgia">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="r1">
                <img src="/icon/homepage/Bí Mật Dotcom.jpeg" alt="">
                <div class="r2">
                  <h4>Bí Mật Dotcom</h4>
                  <div class="danhgia">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                  </div>
                </div>
              </div>
            </a>

            <a href="#">
              <div class="r1">
                <img src="/icon/homepage/Berlin Rules – Cách Của Người Đức.jpeg" alt="">
                <div class="r2">
                  <h4>Berlin Rules – Cách Của Người Đức</h4>
                  <div class="danhgia">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                  </div>
                </div>
              </div>
            </a>
            </div>
        </div>
        <div class="middle">
          <div class="title">
            <h3>Gợi Ý Sách</h3>
          </div>
          <div class="nd">
            <div class="m1">
              <img src="/icon/homepage/sachhaythnag5.jpeg" alt="">
              <p class="title2">Những cuốn sách hay tháng 5/2020 bạn không nên bỏ qua</p>
              <p class="mota">Có thể thấy tủ sách hay tháng 5/2020 của chúng 
                ta tập trung nhiều vào vun đắp tinh thần. Sau quảng thời gian khó khăn do ảnh hưởng của dịch bệnh, cuộc sống mọi người trở nên đảo lộn và đang cố gắng từng ngày để khôi phục. Vậy lúc này là lúc hoàn hảo để nuôi dưỡng tâm hồn bằng những lời hay ý đẹp trong từng cuốn sách vì chặng đường phía trước còn nhiều gian nan.
              </p>
            </div>
  
            <div class="m1">
              <img src="/icon/homepage/7quyensach.png" alt="">
              <p class="title2">7 quyển sách hay về đại suy thoái đầy sắc sảo và nhiều thông tin</p>
              <p class="mota">7 quyển sách hay về đại suy thoái này là tài liệu quý giá cho bất kỳ ai muốn tìm hiểu về đại suy thoái và sự hình thành bong bóng tài chính, cũng như cách thức tránh bị mắc kẹt trong những đợt khủng hoảng kinh tế tiếp theo.
            </p>
          </div>

          <div class="m1">
            <img src="/icon/homepage/phunu.png" alt="">
            <p class="title2">7 cuốn sách hay về người phụ nữ quyến rũ</p>
            <p class="mota">
              7 cuốn sách hay về người phụ nữ quyến rũ dành cho những cô gái 
              đang tìm kiếm vẻ đẹp đích thực. Đấy chính là vẻ đẹp không bị mài 
              mòn theo thời gian, mà ngược lại, năm tháng qua đi, sự mặn mà, đằm thắm ấy càng ngày càng sắc nét, tròn vị.
                        </p>
        </div>
          </div>
        </div>

        <div class="bottom">
<div class="cafe">
  <div class="title">
    <h3>Cafe Sách</h3>
  </div>
  <div class="nd1">
    <img src="/icon/homepage/pic8.jpeg" alt="">
    <div class="m2">
      <p class="title2">Dậy sớm, Đọc sách, Nghe nhạc..là thói quen tốt để cải thiện cuộc sống</p>
      <p class="mota">
        Bạn hình dung như thế nào về cuộc sống của 1 người trưởng thành: tiền bạc dư giả, 
        không phải lo lắng về nguồn tài chính, gia đình hạnh phúc, các món đồ hiệu đắt đỏ, 
        làm chủ công việc buôn bán riêng hay những mối quan hệ thượng lưu…?
      </p>
    </div>
  </div>

  <div class="nd1">
    <img src="/icon/homepage/pic9.jpeg" alt="">
    <div class="m2">
      <p class="title2">5 bí kíp chọn Sách và Đọc sách thông minh nhất</p>
      <p class="mota">
        Có một lúc nào đó, bạn vô tình ra nhà sách mà không biết chọn lựa 
        sách như thế nào? Sách không đắt nhưng thấy nhiều cuốn hay cùng một 
        lúc nên thành ra không nỡ về mà tay không cầm nhiều hơn 1 cuốn?
      </p>
    </div>
  </div>

  <div class="nd1">
    <img src="/icon/homepage/pic10.jpeg" alt="">
    <div class="m2">
      <p class="title2">Đọc Sách Vì Điều Gì?</p>
      <p class="mota">
        Ban đầu tôi đọc sách vì có thời gian rãnh
         và muốn thử một loại hình giải trí mới, đọc.
          Thật thì trước đó tôi không hề có một ai chỉ 
          dẫn hay thấy được lợi ích của việc này. Tôi thử đọc 
          sách như một loại ma tuý trong lúc tôi đang nhàm chán với những thứ xung quanh. 
          Và, tôi đã nghiện. 
      </p>
    </div>
  </div>

  <div class="nd1">
    <img src="/icon/homepage/pic11.jpeg" alt="">
    <div class="m2">
      <p class="title2">Đọc sách hay mỗi ngày – Một thói quen tốt đấy bạn</p>
      <p class="mota">
        Đọc sách là một thói quen tốt của hầu hết những nhà thành đạt trên thế giới.
Sách không những mang lại cho bạn một kho tàng kiến thức rộng lớn về mọi lĩnh vực, mà còn giúp bạn nâng cao khả năng phân tích và tư duy mạnh mẽ hơn.
Đọc sách càng nhiều, khả năng vốn từ của bạn được mở rộng và là giúp bạn kích thích tinh thần, giảm căng thẳng, tăng trí nhớ.
      </p>
    </div>
  </div>
</div>
            <div class="resach">
              <div class="title">
                <h3>Review Sách</h3>
              </div>
              <div class="r1">
                <img src="/icon/homepage/sach-khong-gia-dinh.jpeg" alt="">
                <div class="r2">
                  <h4>Không Gia Đình</h4>
                  <div class="danhgia">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="r1">
                <img src="/icon/homepage/Biện Hộ Trắng Án.jpeg" alt="">
                <div class="r2">
                  <h4>Biện Hộ Trắng Án</h4>
                  <div class="danhgia">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                  </div>
                </div>
              </div>
              <div class="r1">
                <img src="/icon/homepage/Kinh Tế Học Hài Hước.jpeg" alt="">
                <div class="r2">
                  <h4>Kinh Tế Học Hài Hước</h4>
                  <div class="danhgia">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                  </div>
                </div>
              </div>
              <div class="r1">
                <img src="/icon/homepage/Bí Mật Dotcom.jpeg" alt="">
                <div class="r2">
                  <h4>Bí Mật Dotcom</h4>
                  <div class="danhgia">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                  </div>
                </div>
              </div>

              <div class="r1">
                <img src="/icon/homepage/Berlin Rules – Cách Của Người Đức.jpeg" alt="">
                <div class="r2">
                  <h4>Berlin Rules – Cách Của Người Đức</h4>
                  <div class="danhgia">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star.svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                    <img src="/icon/star (1).svg" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

 -->
 </div>
 
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
</div>

    </div>
    
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
  </body>
</html>
