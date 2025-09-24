<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="admin.css">
<title>ADMIN</title>

</head>
<body>
  
<header class="hea">
        <img src="/lưu ảnh/z5325657706180_8c15ef86dede6c80314f4a4bf813ee79.jpg" alt="">
   </header>

<div class="text">
    <h1>WELCOME ADMIN</h1>
</div>

<div class="container">
    <h2>Danh Sách Thông Tin Tài Khoản</h2>
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Tìm kiếm...">
        <button type="button" onclick="searchAccount()">Tìm kiếm</button>
    </div>
    <a href="../dangxuat.php" class="btn btn-back">Đăng xuất</a>
    <a href="addTK.php" class="btn btn-add">Thêm tài khoản</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
                <th>Password</th>
                <th>Quyền</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../connect.php";

            // Kết nối đến cơ sở dữ liệu
            $conn = connect();

            // Truy vấn cơ sở dữ liệu để lấy thông tin tài khoản
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);

            // Kiểm tra xem có dữ liệu được trả về không
            if ($result->rowCount() > 0) {
                // Duyệt qua từng dòng dữ liệu và hiển thị thông tin tài khoản trong bảng
                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                   
                    echo "<tr ID='account-".$row["ID"]."'>";

                    echo "<td>" . $row["ID"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["SDT"] . "</td>";
                    echo "<td>" . $row["password"] . "</td>";
                    echo "<td>" . ($row["role"] == 1 ? "ADMIN" : ($row["role"] == 2 ? "CAPTAIN" : "USER")) . "</td>";
                    echo "<td>";
                    echo '<a href="Fix.php?id='.$row["ID"].'" class="btn btn-edit">Sửa</a>';
                    echo '<a href="Xoa.php?ID='.$row["ID"].'" class="btn btn-delete" onclick="return confirm(\'Bạn có chắc muốn xóa tài khoản này?\')">Xóa</a>';
                    
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Không có thông tin tài khoản.</td></tr>";
            }

            // Đóng kết nối
            $conn = null;
            ?>
        </tbody>
    </table>
</div>


</body>
</html>
