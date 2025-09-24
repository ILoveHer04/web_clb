<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/lưu ảnh/trang chủ.css ">
    <link rel="stylesheet" href="TTDOINHOM.css">
</head>

<body style="height: 250px;">
    
    <header class="hea">
        <img src="/lưu ảnh/z5325657706180_8c15ef86dede6c80314f4a4bf813ee79.jpg" alt="">
   </header>

    <div class="ulmenu li">                                                  <!-- Menu-->
                <ul class="menu" >
                      <li>  <a href="/Trangchu.php"> Trang chủ</a></li>
                              
                  <li>  <a href="#SP"> Giới thiệu</a>   <!-- thành phần trong ulmenu li và li a-->
                                 <ul>
                                   
                                      <li>  <a href="TTCLB.php"> Thông tin câu lạc bộ</a>
                                       
                                           </li>
                                      <li>  <a href="TTDOINHOM.php">Thông tin hội nhóm </a>
                                
                                           </li>    
                                  </ul>
                              
                  </li>
                      <li>  <a href="/sukien.php"> Sự kiện</a></li>          
                      <li>  <a href="/tuyen.php" > Tuyển thành viên</a></li>       
                      <li  style="position: relative; top: -10px;"> <a href="">  
                        <?php 
                                 if(isset($_SESSION['ID'])) {
                                                                // Người dùng đã đăng nhập, hiển thị nút đăng xuất
                               echo '<a href="/Person/personal.php">' . $_SESSION['ID'] . '</a>';
                               } else {
                                                                // Người dùng chưa đăng nhập, hiển thị nút đăng nhập hoặc điều hướng đến trang đăng nhập
                               echo '<a href="/login.php" >Đăng nhập</a>';  }?>  </a></li>                                                                                               
                 </ul>
              </div>
        </div>  
    

    <nav class="anh" >    <!-- phần img CLB -->
         <img src="lưu ảnh/Untitled-1 (3).png" alt="">   <!-- img  -->   
    </nav>


    <Main id="SP">          <!-- tạo gian hàng MAIN-->
       
       <h2>Giới Thiệu Đội Nhóm VWA</h2>
       <ul id="Danhsach">
                    
          <a href="https://www.facebook.com/doimauhocvienphunu/?locale=vi_VN" > <div class="VP">
            <img src="/img/tnvn hiến mấu.jpg" alt="">
              <span>Đội Thanh niên vận động  </span> <br>
              <span style="position:relative ; left:130px;"> hiến máu nhân đạo</span>
<p>
Là tổ chức tình nguyện đặc thù của sinh viên Học viện Phụ nữ Việt Nam .
Tuyên truyền, vận động hiến máu tình nguyện vì cộng đồng .

           Tổ chức và tham gia tổ chức các chương trình hiến máu tình nguyện trong và ngoài phạm vi Học viện .

          Tham gia vào các hoạt động khác theo sự chỉ đạo và phân công của Đoàn Thanh niên Học viện.

</p> 
</div></a>


        <a href="https://www.facebook.com/doisinhvientinhnguyenhocvienphunu/?locale=vi_VN">  <div class="VP">
           <img src="/img/sv tình nguyện.jpg" alt="">
              <span>Đội Sinh viên tình nguyện</span>
              <p> 
              Thực hiện các hoạt động tình nguyện vì cộng đồng; Tham gia, tổ chức, thực hiện phong trào Tiếp sức mùa thi, các hoạt động chung của Học viện và thực hiện các nhiệm vụ khác theo sự phân công của Đoàn Thanh niên Học viện. </p>
           </div></a> 

         <a href="https://www.facebook.com/doanthanhnienHVPNVN/">  <div class="VP">
           <img src="/img/thanh niên.jpg" alt="">
              <span>Đội Thanh niên xung kích</span>
              <p> 
              Đảm bảo an ninh khu nội trú của Học viện; Phát hiện và báo cáo kịp thời các tình huống liên quan đến an ninh, trật tự, vi phạm pháp luật, vi phạm nội quy trong khu nội trú với cán bộ bảo vệ trực ban, Ban quản lý Khu nội trú và Lãnh đạo Đoàn Thanh niên trực tiếp để xử lý hiệu quả, kịp thời; Duy trì sự đoàn kết trong môi trường nội trú và thực hiện các nhiệm vụ khác theo sự phân công của Đoàn Thanh niên Học viện. </p>
           </div></a>


         <a href="https://www.facebook.com/doanthanhnienHVPNVN/"> <div class="VP">
           <img src="/img/văn nghệ tiên phong.jpg" alt="">
              <span>Đội Văn Nghệ Tiên Phong </span>
              <p> 
              Xây dựng, tập luyện và biểu diễn các tiết mục văn nghệ phục vụ cho chương trình, sự kiện… của Học viện và cơ quan cấp trên; đại diện cho Học viện tham gia các cuộc thi về văn hóa, văn nghệ và thực hiện các nhiệm vụ khác theo sự phân công của Đoàn Thanh niên Học viện. </p>
           </div></a> 
</Main>             <!-- xong phần mục các sản phẩm bán-->
</body>
</html>
    