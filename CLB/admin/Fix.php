<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sửa Thông Tin Tài Khoản</title>
<style>
    /* CSS code here */
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f3f3;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
    height: 100%;
    background: url('ANIMANGASCENERY.gif') no-repeat center center fixed;
    background-size: cover;
}
    

    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 70px;
    }

    h2 {
        margin-bottom: 20px;
        position: relative;
        left: 150px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"], input[type="email"], input[type="password"] {
        width: 95%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        font-weight: bold;
        text-transform: uppercase;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
<div class="container">
<h2>Sửa Thông Tin Tài Khoản</h2>
<?php
// Kiểm tra xem ID tài khoản được truyền từ URL không
if(isset($_GET['id'])) {
    $account_id = $_GET['id'];

    // Kết nối đến cơ sở dữ liệu
    include "../connect.php";
    $conn = connect();

    // Truy vấn cơ sở dữ liệu để lấy thông tin tài khoản
    $sql = "SELECT * FROM user WHERE ID = :ID";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':ID', $account_id);
    $stmt->execute();
    $account = $stmt->fetch(PDO::FETCH_ASSOC);

    // Kiểm tra xem tài khoản có tồn tại không
    if($account) {
        // Xử lý khi người dùng gửi biểu mẫu cập nhật
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $SDT = $_POST['SDT'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            // Cập nhật dữ liệu trong cơ sở dữ liệu
            $sql_update = "UPDATE user SET name = :name, email = :email, SDT = :SDT, password = :password, role = :role WHERE ID = :ID";
            $stmt_update = $conn->prepare($sql_update);
            $stmt_update->bindParam(':name', $name);
            $stmt_update->bindParam(':email', $email);
            $stmt_update->bindParam(':SDT', $SDT);
            $stmt_update->bindParam(':password', $password);
            $stmt_update->bindParam(':role', $role);
            $stmt_update->bindParam(':ID', $account_id);
            if($stmt_update->execute()) {
                header("Location: admin.php");
                exit();
            } else {
                echo "Có lỗi xảy ra khi cập nhật thông tin tài khoản.";
            }
        }

        // Hiển thị biểu mẫu chỉnh sửa thông tin tài khoản
?>
        <form method="post">
            <div class="form-group">
                <label for="name">Họ và Tên:</label>
                <input type="text" id="name" name="name" value="<?php echo $account['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $account['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="SDT">Số Điện Thoại:</label>
                <input type="text" id="SDT" name="SDT" value="<?php echo $account['SDT']; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" value="<?php echo $account['password']; ?>" required>
            </div>
            <div class="form-group">
                <label for="role">Quyền:</label> 
                <select id="role" name="role" style="width:100px ; font-weight:bold; ">
                    <option value="1" <?php if($account['role'] == 1) echo 'selected'; ?>>ADMIN</option>
                    <option value="0" <?php if($account['role'] == 0) echo 'selected'; ?>>USER</option>
                    <option value="2" <?php if($account['role'] == 2) echo 'selected'; ?>>CAPTAIN</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Cập nhật">
        </form>
<?php
    } else {
        // Hiển thị thông báo nếu không tìm thấy tài khoản
        echo "Không tìm thấy thông tin tài khoản.";
    }

    // Đóng kết nối
    $conn = null;
} else {
    // Hiển thị thông báo nếu không có ID tài khoản được truyền
    echo "Không có ID tài khoản được cung cấp.";
}
?>
</div>
</body>
</html>
