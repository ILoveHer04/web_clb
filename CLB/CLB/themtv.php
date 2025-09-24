<?php
session_start();
include "../connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $SDT = $_POST['SDT'];

    // Kiểm tra xem người dùng có tồn tại trong cơ sở dữ liệu hay không
    $conn = connect();
    $stmt = $conn->prepare("UPDATE user SET clb_id = 2 WHERE ID = :ID AND name = :name AND SDT = :SDT");
    $stmt->bindParam(':ID', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':SDT', $SDT);
    if ($stmt->execute()) {
        echo '<div style="text-align:center;font-size:30px;font-weight:bold; color:#007580; margin-top:300px;">Bạn đã đăng ký thành công, sau 1s sẽ chuyển hướng về trang đội trưỏng.</div>';
        header('refresh:1; url=captain.php');
        exit();
    } else {
        echo '<div style="text-align:center;font-size:30px;font-weight:bold; color:#ff0000; margin-top:300px;">Có lỗi xảy ra. Vui lòng thử lại.</div>';
    }

    // Đóng kết nối
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thành viên</title>
    <!-- Include các file CSS cần thiết -->
    <link rel="stylesheet" href="/TV/nguon.css">
    <link rel="stylesheet" href="CLB.css">

    <style>
        
/* CSS cho nội dung trang */
.TVCLB {
    margin-top: 50px;
    text-align: center;
}

.TVCLB h1 {
    font-size: 24px;
    color: #007580;
    margin-bottom: 20px;
}

/* CSS cho form */
form {
    display: inline-block;
    text-align: left;
    border: 2px solid #007580;
    padding: 20px;
    border-radius: 10px;
}

form label {
    display: block;
    margin-bottom: 10px;
    color: #007580;
    font-weight: bold;
}

form input[type="text"] {
    width: 90%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form input[type="submit"] {
    background-color: #007580;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

form input[type="submit"]:hover {
    background-color:orange;
    transition: background-color 0.3s;
}

form input:hover{
    background:aqua;
    transition: background-color 0.6s;
}


    </style>
</head>

<body>
    <header class="hea">
        <img src="/lưu ảnh/z5325657706180_8c15ef86dede6c80314f4a4bf813ee79.jpg" alt="">
    </header>

    <!-- Menu -->
    
            <!-- Các mục menu -->
        </ul>
    </div>

    <div class="TVCLB">
        <h1>Thêm thành viên</h1>

        <!-- Form để thêm thành viên -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <!-- Mã sinh viên -->
            <label for="id">Mã Sinh Viên</label>
            <input type="text" id="id" name="id" required>

            <!-- Họ và tên -->
            <label for="name">Họ và tên:</label>
            <input type="text" id="name" name="name" required>

            <!-- Số điện thoại -->
            <label for="SDT">Số điện thoại:</label>
            <input type="text" id="SDT" name="SDT" required>

            <!-- Nút thêm thành viên -->
            <input type="submit" value="Thêm thành viên">
        </form>
    </div>
</body>

</html>
