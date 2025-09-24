<?php
include "../connect.php";

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $SDT = $_POST['SDT'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Kết nối đến cơ sở dữ liệu
    $conn = connect();

    // Truy vấn SQL để thêm tài khoản mới vào cơ sở dữ liệu
    $sql = "INSERT INTO user (ID, name, email, SDT, password, role) VALUES (:ID, :name, :email, :SDT, :password, :role)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':ID', $id); 
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':SDT', $SDT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':role', $role);

    // Thực thi truy vấn và kiểm tra kết quả
    if($stmt->execute()) {
        // Nếu thêm thành công, chuyển hướng người dùng về trang danh sách tài khoản
        header("Location: admin.php");
        exit();
    } else {
        // Nếu thêm không thành công, hiển thị thông báo lỗi
        echo "Xảy ra lỗi khi thêm tài khoản mới.";
    }

    // Đóng kết nối
    $conn = null;
} else {
    // Nếu người dùng truy cập trang này mà không gửi dữ liệu từ biểu mẫu, chuyển hướng về trang thêm tài khoản
    header("Location: add_account.php");
    exit();
}
?>
