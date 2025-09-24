<?php
session_start();
include "../connect.php";

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['ID'])) {
    header("Location: login.php");
    exit();
}

// Kiểm tra xem người dùng có quyền ADMIN hay không
if ($_SESSION['role'] != 1) {
    echo "Bạn không có quyền truy cập trang này.";
    exit();
}

// Kiểm tra xem có dữ liệu được gửi từ form sửa không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem tất cả các trường dữ liệu có được gửi không
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['SDT']) && isset($_POST['password']) && isset($_POST['role']) && isset($_POST['account_id'])) {
        // Lấy thông tin từ form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $SDT = $_POST['SDT'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $account_id = $_POST['account_id'];

        // Kết nối đến cơ sở dữ liệu
        $conn = connect();

        // Kiểm tra xem ID của thành viên có khớp với clb_id = 2 không
        $sql_check_clb = "SELECT clb_id FROM user WHERE ID = :ID";
        $stmt_check_clb = $conn->prepare($sql_check_clb);
        $stmt_check_clb->bindParam(':ID', $account_id);
        $stmt_check_clb->execute();
        $result_check_clb = $stmt_check_clb->fetch(PDO::FETCH_ASSOC);

        if ($result_check_clb['clb_id'] == 2) {
            // Câu lệnh SQL để cập nhật thông tin tài khoản
            $sql_update = "UPDATE user SET name = :name, email = :email, SDT = :SDT, password = :password, role = :role WHERE ID = :ID";
            $stmt_update = $conn->prepare($sql_update);
            $stmt_update->bindParam(':name', $name);
            $stmt_update->bindParam(':email', $email);
            $stmt_update->bindParam(':SDT', $SDT);
            $stmt_update->bindParam(':password', $password);
            $stmt_update->bindParam(':role', $role);
            $stmt_update->bindParam(':ID', $account_id);

            // Thực thi câu lệnh SQL
            if ($stmt_update->execute()) {
                // Chuyển hướng người dùng đến trang admin sau khi cập nhật thành công
                header("Location: admin.php");
                exit();
            } else {
                echo "Có lỗi xảy ra khi cập nhật thông tin tài khoản.";
            }
        } else {
            echo "Bạn không được phép chỉnh sửa thông tin của thành viên này.";
        }
    } else {
        echo "Dữ liệu không hợp lệ.";
    }
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
