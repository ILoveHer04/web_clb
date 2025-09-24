<?php
session_start();

// Kiểm tra nếu đã đăng nhập trước đó thì chuyển hướng trực tiếp
if(isset($_SESSION['ID'])) {
    header('location: Trangchu.php');
    exit();
}

ob_start();
include "./connect.php";
include "./user.php";
connect();

$txt_error = ''; // Khởi tạo biến lưu thông báo lỗi

if(isset($_POST['dangnhap'])) {
    $ID = $_POST['ID'];
    $password = $_POST['password'];
    $role = checkuser($ID, $password); 

    if($role === 1) {
        $_SESSION['role'] = $role;
        header('location: ./admin/admin.php');
        exit();
    } else if($role === 0) {
        $_SESSION['role'] = $role;
        $_SESSION['ID'] = $ID; // Lưu ID người dùng vào session
        header('location: Trangchu.php');
        exit();
    } else if($role === 2) {
        // Nếu role là 2 (đội trưởng), chuyển hướng sang trang doitruong.php
        $_SESSION['role'] = $role;
        $_SESSION['ID'] = $ID; // Lưu ID người dùng vào session
        header('location: ./CLB/doitruong.php');
        exit();
    } else {
        $txt_error = '<span style="color: red; font-weight: bold; position: relative; top: -20px;">Tài khoản hoặc mật khẩu sai, hãy nhập lại!</span>'; // Gán thông báo lỗi
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="/login/login.css">
    <link rel="stylesheet" href="/login/sign.css">
</head>
<body>

    <div class="ulmenu li">
        <ul class="menu">
            <li><a href="/Trangchu.php">Trang chủ</a></li>
            <li><a href="/sukien.php">Sự kiện</a></li>
            <li><a href="/tuyen.php">Tuyển thành viên</a></li>
        </ul>
    </div>

    <div class="login-form">
        <div class="login">
            <h2>Đăng Nhập</h2>
            <?php if(!empty($txt_error)): ?> <!-- Hiển thị thông báo lỗi nếu có -->
                <div class="error"><?php echo $txt_error; ?></div>
            <?php endif; ?>
            <form method="post" action="">
                <div class="inputbox">
                    <input type="text" name="ID" placeholder="Mã Sinh Viên" required>
                </div>
                <div class="inputbox">
                    <input type="password" name="password" placeholder="Mật khẩu" required>
                </div>
                <div class="inputbox">
                    <input type="submit" value="Đăng Nhập" name="dangnhap" id="btn">
                </div>
            </form>
            <div class="bottom-content">
                <b><a href="#">Quên Mật Khẩu</a></b>
                <b><a href="/dangky.php">Đăng Kí</a></b>
            </div>
        </div>
    </div>

</body>
</html>
