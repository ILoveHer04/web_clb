<?php

function connect(){
    $serve = "localhost";
    $user = "root";
    $pass = "";
    
    try {
        $conn = new PDO("mysql:host=$serve;dbname=webcuatoi", $user, $pass);
   
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn; // Trả về kết nối nếu thành công
    } catch(PDOException $e) {
        // Xử lý lỗi nếu có
        echo "Connection failed: " . $e->getMessage();
        return null; // Trả về null nếu kết nối thất bại
    }
}

$conn = connect();
if($conn !== null) {
  
    $result = $conn->query("SELECT * FROM user");
    // Tiếp tục xử lý...
} else {
    // Xử lý khi kết nối không thành công
}
?>