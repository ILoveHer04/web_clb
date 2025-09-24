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
</head>

<body style="height: 250px;">
    
    <header class="hea">
        <img src="lưu ảnh/z5325657706180_8c15ef86dede6c80314f4a4bf813ee79.jpg" alt="">
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
                               echo '<a href="login.php" >Đăng nhập</a>';  }?>  </a></li>                                                                                               
                 </ul>
              </div>
        </div>  
    

    <nav class="anh" >    <!-- phần img CLB -->
         <img src="lưu ảnh/Untitled-1 (3).png" alt="">   <!-- img  -->   
    </nav>
    
    
    <div class="CLB"> <!-- các CLB-->
    <a href="/gioithieu/TTDOINHOM.php"  style="position: relative ;    top: -546px; left: -526px; ;" >Đội Sinh viên tình nguyện</a>    

    <a href="/gioithieu/TTDOINHOM.php" style="position: relative ;        top: -526px; left: -540px;" >Đội Thanh niên xung kích</a>
    
    <a href="/gioithieu/TTCLB.php" style="position: relative ;        top: -206px; left: -447px;"  > CLB Võ thuật</a>
    
    <a href="/gioithieu/TTDOINHOM.css" style="position: relative ;top: -669px;  left: -489px; ; width:220px; ">Đội Thanh niên vận động hiến máu nhân đạo </a>
    
    <a href="/gioithieu/TTCLB.php"  style="position: relative ;   top: -358px;   left: -482px;">CLB Dance</a>
    
    <a href="/gioithieu/TTCLB.php" style="position: relative ;    top: -340px;  left: -462px;" >CLB Du lịch  </a>

   <a href="/gioithieu/TTDOINHOM.php" style="position: relative ;top: -578px; left: -547px;" >Đội Văn nghệ tiên phong </a>
    
    <a href="/gioithieu/TTCLB.php"  style="position: relative ; top: -544px; left: -537px; ">  CLB Múa dân gian      </a>
    
    <a href="" style="position: relative ;top: -514px;   left: -512px;" >CLB Tiếng anh   </a>
    
    <a href=""  style="position: relative ; top: -818px; left: 507px; ">CLB Vườn ươm doanh nhân VWA  </a>
    
    <a href="/gioithieu/TTCLB.php" style="position: relative ; top: -781px; left: 489px;" > CLB Sách và hành động </a>
    
    <a href="/gioithieu/TTCLB.php"  style="position: relative ;        top: -684px;  left: 489px;" > CLB Nghề luật </a>
    
    <a href="/tuyentv/loi.php"  style="position: relative ;     top: -529px;  left: 483px;"> CLB Hùng biện  </a>
    
    <a href=""  style="position: relative ;  width:240px; display: flex;     top: -465px;  left: 499px;"> CLB Hành động vì bình đẳng giới và phát triển bền vững</a>
    
    <a href=""  style="position: relative ;     top: -846px;   left: 479px; " >CLB Tâm lý học  </a>
    
    <a href="/gioithieu/TTCLB.php" style="position: relative ;     top: -737px; left: 499px; " > CLB Nhiếp ảnh   </a>
   
    <a href="/gioithieu/TTCLB.php" style="position: relative  ;     top: -591px;  left: 520px;" > CLB Thiết kế đa phương tiện.  </a>
   
   <?php 
    if(isset($_SESSION['ID'])) {
        // Người dùng đã đăng nhập, kiểm tra role của họ
        if($_SESSION['role'] == 2) {
            // Nếu role = 2, chuyển hướng người dùng đến trang captain.php
            echo '<a href="/CLB/doitruong.php" style="position: relative ;top: -725px; left: 481px;">CLB Tin học</a>';
        } else {
            // Người dùng có role khác, hiển thị link CLB Tin học bình thường
            echo '<a href="/clbtinhoc.php" style="position: relative ;top: -725px; left: 481px;">CLB Tin học</a>';
        }
    } else {
        // Người dùng chưa đăng nhập, hiển thị link CLB Tin học như bình thường
        echo '<a href="/gioithieu/TTCLB.php" style="position: relative ;top: -725px; left: 481px;">CLB Tin học</a>';
    }
?>

                                                       
</div>

    <footer class="FOOT">
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