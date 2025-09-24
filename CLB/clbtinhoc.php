<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/TV/nguon.css ">
    <link rel="stylesheet" href="/CLB/CLB.css">
</head>
<body >
      
    <header class="hea">
        <img src="/lưu ảnh/z5325657706180_8c15ef86dede6c80314f4a4bf813ee79.jpg" alt="">
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
                               echo '<a href="login.php" >Đăng nhập</a>';
                                                            }
 
                                                        ?> </a></li>
                 </ul>
              </div>
        </div>  
    
    <div class="TD">
        <h1>Câu Lạc Bộ Tin Học</h1>
    </div>
    
    <div class="Lich">
        <h1><a href="">Quy Tắc</a> <hr color="aqua" size="5px" ></h1> 
        <h2><a href="">Lịch Hoạt Động </a> <hr color="aqua" size="4px" ></h2> 
        <h3><a href="/TV/TV.php">Thành Viên</a> <hr color="aqua" size="5px" ></h3> 
    </div>

    <footer class="FOOT" style="position: relative; top: 210px;">
        <H1> HỌC VIỆN PHỤ NỮ VIỆT NAM </H1> 
        <h2>Địa chỉ: 68 Nguyễn Chí Thanh, <br>phường Láng Thượng, quận Đống Đa, Hà Nội <br> 
            <br>Điện thoại: 024.37752756 <br>
            
            <br> E-mail: vwa@vwa.edu.vn <br>
            
           </h2>
         <a href="https://sinhvien.hvpnvn.edu.vn/"> Website: Cổng Sinh viên </a> 

        <p> HỖ TRỢ </p>

         <h3>
            Viện Công nghệ thông tin <br> <br> 

            Điện thoại: 024.37755778<br>  <br> 
            
            Phòng Đào tạo<br> <br> 
            
            Điện thoại: 024.37751750
        
        </h3>

        <h4>LIÊN KẾT</h4>
      <span>  <a href="https://daotao.hvpnvn.edu.vn/default.aspx?page=gioithieu"> Cổng thông tin Đào tạo </a></span>
     <h5> <a href="https://www.facebook.com/Hocvienphunu"> FACEBOOK Học Viện</a></h5>


    </footer>
</body>
</html>