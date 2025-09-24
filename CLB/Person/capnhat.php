<?php
session_start();

if (!isset($_SESSION['ID'])) {
    header('location: login.php');
    exit();
}

include '../connect.php'; // Kết nối đến cơ sở dữ liệu

try {
    $conn = connect(); // Lấy kết nối từ hàm connect trong tập tin connect.php

    // Kiểm tra xem dữ liệu được gửi từ form sửa thông tin có tồn tại không
    if (isset($_POST['new_name']) && isset($_POST['new_ID']) && isset($_POST['new_email']) && isset($_POST['new_SDT']) && isset($_POST['new_password'])) {
        // Lấy dữ liệu từ form
        $new_name = $_POST['new_name'];
        $new_ID = $_POST['new_ID'];
        $new_email = $_POST['new_email'];
        $new_SDT = $_POST['new_SDT'];
        $new_password = $_POST['new_password'];

        // Cập nhật dữ liệu vào cơ sở dữ liệu
        $stmt = $conn->prepare('UPDATE user SET name = :new_name, email = :new_email, SDT = :new_SDT, password = :new_password WHERE ID = :ID');
        $stmt->bindParam(':new_name', $new_name);
        $stmt->bindParam(':new_email', $new_email);
        $stmt->bindParam(':new_SDT', $new_SDT);
        $stmt->bindParam(':new_password', $new_password);
        $stmt->bindParam(':ID', $_SESSION['ID']);
        $stmt->execute();

        // Chuyển hướng người dùng đến trang thông tin cá nhân sau khi cập nhật thành công
        header('location: personal.php');
        exit();
    } else {
        echo 'Dữ liệu gửi từ form không hợp lệ';
    }
} catch (PDOException $e) {
    echo 'Lỗi: ' . $e->getMessage(); // Hiển thị thông báo lỗi nếu có
}
?>
