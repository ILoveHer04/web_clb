
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
  <head>
    <meta charset="UTF-8">
    <title>Đăng Kí</title>
    <link rel="stylesheet" href="/login/signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="login/sign.css">
   </head>
<body>



  <div class="container">
    <div class="title">Đăng Kí</div>
    <div class="content">

      <form action="reg.php" method="post" >

        <div class="user-details">

        <?php
                    // Check if error message is set in reg.php (optional)
                    if (isset($_GET['error']) && $_GET['error'] == 'duplicate_id') {
                        echo '<p style="color: red; font-weight: bold;">Mã sinh viên đã được sử dụng. Vui lòng chọn mã khác!</p>';
                    }
        ?>

          <div class="input-box">
            <span class="details">      Họ Tên</span>

            <input type="text" placeholder="Nhập Họ Và Tên " required name="name">
          </div>
          <div class="input-box">
            <span class="details">     Mã Sinh Viên </span>

            <input type="text" placeholder="Nhập Tên Tài KHoản" required name="ID">
          </div>
          <div class="input-box">
            <span class="details">          Email </span>

            <input type="email" placeholder=" Nhập Email" required name="email">
          </div>
          <div class="input-box">
            <span class="details">          Số Điện Thoại</span>

            <input type="text" placeholder="Nhập Số Điện Thoại" required name="SDT">
          </div>
          <div class="input-box">
            <span class="details">          Mật Khẩu</span>

            <input type="password" placeholder="Nhập Mật Khẩu" required name="password">
          </div>
          <div class="input-box">
            <span class="details">      Nhập Lại Mật Khẩu</span>
            
            <input type="password" placeholder="Xác Nhận Mật Khẩu" required name="repass">
          </div>
        </div>
        
        <div class="button">
          <input type="submit" name="SUB" value="Đăng Kí" style="font-size: 22px;">
          <a href="login.php">Quay lại đăng nhập</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>