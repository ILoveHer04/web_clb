<?php
session_start();

// Kiểm tra nếu chưa đăng nhập thì chuyển hướng về trang đăng nhập
if (!isset($_SESSION['ID'])) {
    header('location: login.php');
    exit();
}

include '../connect.php'; // Kết nối đến cơ sở dữ liệu

try {
    $conn = connect(); // Lấy kết nối từ hàm connect trong tập tin connect.php

    // Truy vấn dữ liệu từ bảng user
    $stmt = $conn->prepare('SELECT * FROM user WHERE ID = :ID');
    $stmt->bindParam(':ID', $_SESSION['ID']);
    $stmt->execute();

    // Kiểm tra xem có bản ghi nào không
    if ($stmt->rowCount() > 0) {
        // Lấy dòng dữ liệu đầu tiên
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Gán giá trị cho các biến thông tin cá nhân
        $name = $row['name'];
        $ID = $row['ID'];
        $email = $row['email'];
        $SDT = $row['SDT'];
        $password = $row['password'];
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
    } else {
        echo 'Không tìm thấy thông tin tài khoản';
    }
} catch (PDOException $e) {
    echo 'Lỗi: ' . $e->getMessage(); // Hiển thị thông báo lỗi nếu có
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Cá Nhân</title>
    <link rel="stylesheet" href="/lưu ảnh/trang chủ.css">
    <link rel="stylesheet" href="person.css">
</head>

<body style="height: 250px; font-family: 'Times New Roman', Times, serif;">
    <header class="hea">
        <img src="/lưu ảnh/z5325657706180_8c15ef86dede6c80314f4a4bf813ee79.jpg" alt="">
    </header>

    <div class="ulmenu li">
        <ul class="menu">
            <li><a href="/Trangchu.php"> Trang chủ</a></li>
            <li><a href="#SP"> Giới thiệu</a>
                <ul>
                    <li><a href="/gioithieu/TTCLB.php"> Thông tin câu lạc bộ</a></li>
                    <li><a href="/gioithieu/TTDOINHOM.php">Thông tin hội nhóm </a></li>
                </ul>
            </li>
            <li><a href="/sukien.php"> Sự kiện</a></li>
            <li><a href="/tuyen.php"> Tuyển thành viên</a></li>
        </ul>
    </div>

    <div class="wrapper">
        <div class="container">
            <h2>Thông Tin Cá Nhân</h2>
            <p><strong>Họ và Tên:</strong> <span style="color:darkcyan;"> <?php echo $name; ?> </span></p>
            <p><strong>Mã Sinh Viên:</strong> <span style="color:darkcyan;"> <?php echo $ID; ?> </span></p>
            <p><strong>Email:</strong> <span style="color:darkcyan;"> <?php echo $email; ?> </span> </p>
            <p><strong>Số Điện Thoại:</strong> <span style="color:darkcyan;"><?php echo $SDT; ?> </span></p>
            <p><strong>Mật Khẩu:</strong><span style="color:darkcyan;"> <?php echo $password; ?></span></p>
            <p><strong>Bạn là :</strong><span style="color:darkcyan;"> <?php echo ($role === 2) ? 'Đội trưởng' : 'Thành viên'; ?> </span></p>


            <!-- Nút sửa thông tin -->
            <a href="#" id="edit-btn" style="margin-right: 10px;">Sửa Thông Tin</a>
            <!-- Nút đăng xuất -->
            <a href="/dangxuat.php" style="position: relative; left:230px ;">Đăng Xuất</a>
        </div>
    </div>

    <!-- Form sửa thông tin -->
    <div class="edit-form" id="edit-form">
        <h2>Sửa Thông Tin Cá Nhân </h2>
        <form action="capnhat.php" method="POST">
            <div>
                <label for="new_ID">Mã Sinh Viên: ( Không thể sửa )</label>
                <input type="text" name="new_ID" id="new_ID" placeholder="Mã Sinh Viên" value="<?php echo $ID; ?>" style="font-size: 15px; padding-left: 10px;border: 2px solid #000;  background-color: aquamarine;" readonly>
                
            </div> 
            <div>
                <label for="new_name">Họ và Tên:</label>
                <input type="text" name="new_name" id="new_name" placeholder="Họ và Tên" value="<?php echo $name; ?>" style="font-size: 15px; padding-left: 10px;border: 2px solid #000;">
            </div>
            <div>
                <label for="new_email">Email:</label>
                <input type="email" name="new_email" id="new_email" placeholder="Email" value="<?php echo $email; ?>" style="font-size: 15px; padding-left: 10px;border: 2px solid #000;">
            </div>
            <div>
                <label for="new_SDT">Số Điện Thoại:</label>
                <input type="tel" name="new_SDT" id="new_SDT" placeholder="Số Điện Thoại" value="<?php echo $SDT; ?>" style="font-size: 15px; padding-left: 10px;border: 2px solid #000;">
            </div>
            <div>
                <label for="new_password">Mật Khẩu:</label>
                <input type="password" name="new_password" id="new_password" placeholder="Mật Khẩu" value="<?php echo $password; ?>" style="font-size: 15px; padding-left: 10px; border: 2px solid #000;">
                <button type="button" id="showPasswordBtn" onclick="togglePasswordVisibility()" class="MK">Hiển Thị Mật Khẩu</button>
            </div>
            <!-- Các trường dữ liệu khác bạn muốn sửa -->
            <button type="submit" class="nut">Lưu Thay Đổi</button>


        </form>
    </div>


    <script>
        // JavaScript để hiển thị form sửa thông tin khi nhấp vào nút "Sửa Thông Tin"
        document.getElementById('edit-btn').addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ 'a'
            document.getElementById('edit-form').style.display = 'block'; // Hiển thị form sửa thông tin
            document.querySelector('.container').style.display = 'none'; // Ẩn form thông tin cá nhân
        });
    </script>

    <script>
        //hiển thị mk 


        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("new_password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                document.getElementById("showPasswordBtn").textContent = "Ẩn Mật Khẩu";
            } else {
                passwordInput.type = "password";
                document.getElementById("showPasswordBtn").textContent = "Hiển Thị Mật Khẩu";
            }
        }
    </script>
</body>

</html>