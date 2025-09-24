    

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
                      <li>  <a href="Trang Chủ Bán Hàng .html"> Trang chủ</a></li>
                              
                  <li>  <a href="#SP"> Giới thiệu</a>   <!-- thành phần trong ulmenu li và li a-->
                                 <ul>
                                   
                                      <li>  <a href="bảo trì.html"> Thông tin câu lạc bộ</a>
                                       
                                           </li>
                                      <li>  <a href="bảo trì.html">Thông tin hội nhóm </a>
                                
                                           </li>    
                                  </ul>
                              
                  </li>
                      <li>  <a href="Khuyến MÃi.html"> Sự kiện</a></li>          
                      <li>  <a href="#foo" > Tuyển thành viên</a></li>       
                      <li  style="position: relative; top: -10px;"> <a href="">  
                             <a href="login.php" >Đăng nhập</a>';
                                                            
 
                                                         </a></li>
                 </ul>
              </div>
        </div>  
    

    <nav class="anh" >    <!-- phần img CLB -->
         <img src="lưu ảnh/Untitled-1 (3).png" alt="">   <!-- img  -->   
    </nav>
    
    
    <div class="CLB"> <!-- các CLB-->
    <a href="/CLB/CLB SVTinhNGUYEN.html"  style="position: relative ;    top: -546px; left: -526px; ;" >Đội Sinh viên tình nguyện</a>    

    <a href="" style="position: relative ;        top: -526px; left: -540px;" >Đội Thanh niên xung kích</a>
    
    <a href="" style="position: relative ;        top: -206px; left: -447px;"  > CLB Võ thuật</a>
    
    <a href="" style="position: relative ;top: -669px;  left: -489px; ; width:220px; ">Đội Thanh niên vận động hiến máu nhân đạo </a>
    
    <a href=""  style="position: relative ;   top: -358px;   left: -482px;">CLB Dance</a>
    
    <a href="" style="position: relative ;    top: -340px;  left: -462px;" >CLB Du lịch  </a>

   <a href="" style="position: relative ;top: -578px; left: -547px;" >Đội Văn nghệ tiên phong </a>
    
    <a href=""  style="position: relative ; top: -544px; left: -537px; ">  CLB Múa dân gian      </a>
    
    <a href="" style="position: relative ;top: -514px;   left: -512px;" >CLB Tiếng anh   </a>
    
    <a href=""  style="position: relative ; top: -818px; left: 507px; ">CLB Vườn ươm doanh nhân VWA  </a>
    
    <a href="" style="position: relative ; top: -781px; left: 489px;" > CLB Sách và hành động </a>
    
    <a href=""  style="position: relative ;        top: -684px;  left: 489px;" > CLB Nghề luật </a>
    
    <a href=""  style="position: relative ;     top: -529px;  left: 483px;"> CLB Hùng biện  </a>
    
    <a href=""  style="position: relative ;  width:240px; display: flex;     top: -465px;  left: 499px;"> CLB Hành động vì bình đẳng giới và phát triển bền vững</a>
    
    <a href=""  style="position: relative ;     top: -846px;   left: 479px; " >CLB Tâm lý học  </a>
    
    <a href="" style="position: relative ;     top: -737px; left: 499px; " > CLB Nhiếp ảnh   </a>
   
    <a href="" style="position: relative  ;     top: -591px;  left: 520px;" > CLB Thiết kế đa phương tiện.  </a>
    
    <?php
// Kiểm tra nếu đã đăng nhập và clb_id là 2 thì mới cho phép chuyển tiếp
if(isset($_SESSION['clb_id']) && $_SESSION['clb_id'] == 2) {
    echo '<a href="YOUR_LINK_HERE" style="position: relative; top: -725px; left: 481px;">CLB Tin học</a>';
} else {
    echo "Bạn không được phép truy cập vào CLB Tin học.";
}
?>    </div>

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