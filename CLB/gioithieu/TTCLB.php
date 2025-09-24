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
    <link rel="stylesheet" href="TTCLB.css">
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
       
       <h2>Giới Thiệu Câu Lạc Bộ VWA</h2>
       <ul id="Danhsach">
                    
        <a href="https://www.facebook.com/CLBTinhoc.hvpnvn">  <div class="VP">
            <img src="/img/tinhoc.jpg" alt="">
              <span>Câu lạc bộ Tin Học</span>
              <p>Câu lạc bộ là môi trường giao lưu, giúp sinh viên phát triển kỹ năng mềm hay mong muốn trau đồi thêm các kiến thức về CNTT. Được sống trong môi trường thúc đẩy phát triển bản thân, tìm hiểu và tiếp xúc với xu thế về Công nghệ trong thời đại công nghệ 4.0. Tiếp cận nguồn tài liệu và được đào tạo bởi các công ty tập đoàn là đối tác CNTT, mở rộng cơ hội việc làm tại các công ty liên kết với Học viện.</p>
</div></a> 


    <a href="https://www.facebook.com/vwaenglishclub/">      <div class="VP">
           <img src="/img/clb tiếng anh.jpg" alt="">
              <span>Câu lạc bộ Tiếng Anh</span>
              <p> Improve your English with VWA's English Club.
 </p>
           </div></a> 

      <a href="https://www.facebook.com/vaaphotography/"><div class="VP">
           <img src="/img/clb nhiếp ảnh.jpg" alt="">
              <span>Câu lạc bộ Nhiếp ảnh</span>
              <p> Câu Lạc Bộ Nhiếp Ảnh là nơi dành cho các bạn học tập, trải nghiệm và phát triển kỹ năng nhiếp ảnh (Photo), thiết kế (Design), viết nội dung (Content), tổ chức sự kiện (Program) và tạo ra những kỉ niệm đẹp trong khoảng thời gian làm sinh viên
 </p>
           </div></a>     


      <a href="https://www.facebook.com/bluewings.vwa/">   <div class="VP">
           <img src="/img/dance.jpg" alt="">
              <span>Câu lạc bộ Dance</span>
              <p> New era is waiting for you
 </p>
           </div></a>  

      <a href="">   <div class="VP">
           <img src="/img/hùng b.png" alt="">
              <span>Câu lạc bộ Hùng Biện</span>
              <p> 
              Câu lạc bộ Hùng Biện là tổ chức do Khoa Luật - Ngành Luật Kinh Tế, Học viện PNVN thành lập với mục đích tạo môi trường để các Thành viên giao lưu, trao đổi thông tin, chia sẻ học hỏi, kiến thức, kỹ năng về Hùng biện, MC, Tranh luận nhằm góp phần nâng cao chất lượng, hiệu quả hoạt động học tập, trau dồi kỹ năng nghề nghiệp </p>
           </div></a>  

     <a href="https://www.facebook.com/clbdulichvwa/">     <div class="VP">
           <img src="/img/dy lịch.jpg" alt="">
              <span>Câu lạc bộ Du Lịch</span>
              <p>
              CLB Du lịch VWA được xây dựng như một mái nhà chung của những thành viên đam mê “xê dịch”. CLB là sân chơi không chỉ dành cho các bạn sinh viên ngành Quản trị dịch vụ du lịch và lữ hành mà còn dành cho tất cả những ai có đam mê, yêu thích du lịch, muốn cải thiện các kỹ năng như: thuyết trình, hoạt náo, trò chuyện trước đám đông, kỹ năng dẫn chương trình, giao tiếp, kỹ năng tổ chức teambuilding, lễ tân, … CLB cũng là nơi kết nối việc làm, tạo nhiều cơ hội cho các bạn sinh viên thực hành nghề nghiệp, kiếm thêm thu nhập ngay từ khi còn là sinh viên. Tham gia CLB, các bạn sinh viên có môi trường thực hành, rèn luyện nghề và xây dựng tác phong làm việc độc lập. </p>
           </div></a> 

      <a href="">     <div class="VP">
           <img src="/img/võ thuật.jpg" alt="">
              <span>Câu lạc bộ Võ Thuật</span>
              <p> 
              Học võ không chỉ giúp bạn rèn luyện sức khỏe hay nâng cao khả năng tự vệ mà đồng thời, bộ môn này còn giúp bạn thêm tự tin, kỷ luật và cải thiện sức chịu đựng của bản thân. </p>
           </div></a>

           
    <a href="https://www.facebook.com/Psychologyclub.vwa/?paipv=0&eav=Afbx2NYkIfHGRzdnztoc0outrqnJvcmmMoRYzZ_L6SrNdx_RdSSkc-yUSlFJSp4vd48&_rdr">      <div class="VP">
           <img src="/img/tâm lý hc.jpg" alt="">
              <span>Câu lạc bộ Tâm Lý Học</span>
              <p> 
              Hoạt động của CLB Tâm lý học xoay quanh các chủ đề về tâm lý, kỹ năng sống thông qua các hình thức nghiên cứu, hoạt động thực tế, tọa đàm… Tham gia CLB, các bạn có thể bổ sung thêm những kiến thức và kĩ năng thực tế để hiểu rõ hơn về tâm lý học và định hướng rõ hơn con đường nghề nghiệp của bản thân. Điều này giúp các bạn trưởng thành hơn và có sự trải nghiệm thực tiễn với nghề nghiệp. </p>
           </div></a> 


           
      <a href="https://www.facebook.com/CLBNGHELUAT/">   <div class="VP">
           <img src="/img/luật.jpg" alt="">
              <span>Câu lạc bộ Nghề luật</span>
              <p> 
              CLB Nghề Luật được thành lập với mục đích giao lưu, trao đổi thông tin, chia sẻ kinh nghiệm và kiến thức pháp luật giữa các thành viên và với những người đang làm công tác thực tế. Ngoài việc trải nghiệm thực tế, giao lưu với thầy cô và những luật sư, thẩm phán giàu kinh nghiệm, các thành viên CLB còn được tham gia các hoạt động ngoại khoá và Phiên toà thực tế giúp các thành viên trau dồi kiến thức cải thiện kỹ năng khi giao tiếp, kỹ năng thuyết trình hay tham gia các cuộc thi nâng cao giá trị bản thân. </p>
           </div></a>  


        

       
     
</Main>             <!-- xong phần mục các sản phẩm bán-->
</body>
</html>
    