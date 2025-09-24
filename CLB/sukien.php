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
    <link rel="stylesheet" href="/banner/banner.css">
</head>
<body>
     
    <header class="hea">
        <img src="lưu ảnh/z5325657706180_8c15ef86dede6c80314f4a4bf813ee79.jpg" alt="" >
   </header>

    <div class="ulmenu li">                                                  <!-- Menu-->
                <ul class="menu" >
                      <li>  <a href="/Trangchu.php"> Trang chủ</a></li>
                              
                  <li>  <a href="#SP"> Giới thiệu</a>   <!-- thành phần trong ulmenu li và li a-->
                                 <ul>
                                   
                                      <li>  <a href="/gioithieu/TTCLB.php"> Thông tin câu lạc bộ</a>
                                       
                                           </li>
                                      <li>  <a href="/gioithieu/TTDOINHOM.php">Thông tin hội nhóm </a>
                                
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

     <div style="width: 100%; height: 100%;display: grid; position: relative; top: 40px; ">
            <h1 style="place-self: center; color: rgb(127, 127, 255);"> Sự kiện </h1>
     </div>
        <div class="ig-slide"  >      <!-- làm banner-->
            <div class="slider">
                <div class="list-slide">
                    <div class="slide">                  <!-- danh sách ảnh-->
                        <img src="/picture banner/sk.jpg " alt="image 1">
                    </div>
                    <div class="slide">
                        <img src="/picture banner/434190200_801407592017059_771443729000382554_n.jpg" alt="image 2">
                    </div>
                    <div class="slide">
                        <img src="/picture banner/434194844_800797845411367_8148427545073616762_n.jpg" alt="image 3">
                    </div>
                    <div class="slide">
                        <img src="/picture banner/434358118_804016348422850_7961951306219816285_n.jpg" alt="image 4">
                    </div>
                    <div class="slide">
                        <img src="/picture banner/434861673_810971164394035_943674037989736273_n.jpg" alt="image 5">
                    </div>
                </div>
    
                <!-- button prev and next -->
                <div class="slide-btn">                      <!-- Nút ấn chuyển hướng ảnh-->
                    <button id="prev">
                        <   </button>
                            <button id="next">></button>
                </div>
    
                <ul class="slide-dots">              <!--dot dùng hiển thi các dấu chấm của item và có thể cho chuyển nhanh đến ảnh mong muốn-->
                    <li class="active"></li>            
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>       
        <script src="/banner/banner.js"></script>        <!-- js hiệu ứng chuyển cảnh cho banner-->
</body>
</html>
