<?php
include "../connect.php";

// Kiểm tra xem có tham số ID được truyền từ URL không
if(isset($_GET['ID'])) {
    // Lấy ID của tài khoản từ tham số truyền vào
    $account_id = $_GET['ID'];

    // Kết nối đến cơ sở dữ liệu
    $conn = connect();

    // Truy vấn SQL để xóa tài khoản dựa trên ID
    $sql = "DELETE FROM user WHERE ID = :ID";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':ID', $account_id, PDO::PARAM_INT);

    // Thực thi truy vấn và kiểm tra kết quả
    if($stmt->execute()) {
        // Nếu xóa thành công, chuyển hướng người dùng về trang danh sách tài khoản
        header("Location: admin.php");
        exit();
    } else {
        // Nếu xóa không thành công, hiển thị thông báo lỗi
        echo "Xảy ra lỗi khi xóa tài khoản.";
    }

    // Đóng kết nối
    $conn = null;
} else {
    // Nếu không có tham số ID, hiển thị thông báo lỗi
    echo "Không có ID tài khoản được cung cấp.";
}
?>