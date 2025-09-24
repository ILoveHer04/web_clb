<?php
// Kết nối đến cơ sở dữ liệu
include "../connect.php"; // Thay đường dẫn đến file kết nối của bạn
$conn = connect(); // Thực hiện kết nối

// Kiểm tra xem có ID được truyền qua URL hay không
if(isset($_GET['id']) && !empty($_GET['id'])){
    // Lấy ID từ URL
    $id = $_GET['id'];
    
    // Xây dựng câu truy vấn để xóa thông tin thành viên
    $sql = "DELETE FROM user WHERE ID = :id"; // Thay user bằng tên bảng chứa thông tin thành viên của bạn

    // Chuẩn bị và thực thi câu truy vấn
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    // Thực thi câu truy vấn
    if ($stmt->execute()) {
        // Xóa thành công, chuyển hướng người dùng về trang danh sách thành viên hoặc hiển thị thông báo
        header("Location: captain.php");
        exit(); // Kết thúc script sau khi chuyển hướng
    } else {
        echo "Lỗi khi thực hiện truy vấn xóa.";
    }
} else {
    echo "ID không hợp lệ.";
}

// Đóng kết nối
$conn = null;
?>
