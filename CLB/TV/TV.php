<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nguon.css">
    
    <link rel="stylesheet" href="/CLB/CLB.css">
   

    <style>
        body {
            font-family: Arial, sans-serif;
            /* Chọn font chữ */
            background-image: none;
        }

        /* Định dạng table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            position: relative;
            top: 100px;
            left: -270px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            /* Đường viền của ô */
            text-align: left;
            /* Căn lề nội dung của ô sang trái */
            padding: 8px;
            /* Khoảng cách nội dung trong ô */
        }

        th {
            background-color: #f2f2f2;
            /* Màu nền của ô tiêu đề */
            color: black;
            /* Màu chữ của ô tiêu đề */
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
            /* Màu nền của các dòng chẵn */
        }

        tbody tr:hover {
            background-color: #ddd;
            /* Màu nền khi di chuột qua dòng */
        }

        .TD {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .TD h1 {
            margin-top: 30px;
            font-family: serif;
            color: rgb(0, 51, 255);
        }

        .TVCLB {
            justify-content: center;
            display: flex;
            align-items: center;
        }

        .TVCLB h1 {
            position: relative;
            left: 520px;
            top: -10px;
            color: rgb(0, 51, 255);
            width: 1000px;
        }
    </style>
</head>

<body>
    <header class="hea">
        <img src="/lưu ảnh/z5325657706180_8c15ef86dede6c80314f4a4bf813ee79.jpg" alt="">
    </header>

    <div class="ulmenu li"> <!-- Menu-->
        <ul class="menu">
            <li><a href="/Trang chủ.html">Trang chủ</a></li>
            <li>
                <a href="#SP">Giới thiệu</a> <!-- thành phần trong ulmenu li và li a-->
                <ul>
                    <li><a href="/gioithieu/TTCLB.php">Thông tin câu lạc bộ</a></li>
                    <li><a href="/gioithieu/TTDOINHOM.php">Thông tin hội nhóm</a></li>
                </ul>
            </li>
            <li><a href="/sukien.php">Sự kiện</a></li>
            <li><a href="#foo">Tuyển thành viên</a></li>
            <li  style="position: relative; top: -10px;"> <a href="">  
                        <?php 
                                 if(isset($_SESSION['ID'])) {
                                                                // Người dùng đã đăng nhập, hiển thị nút đăng xuất
                               echo '<a href="/Person/personal.php">' . $_SESSION['ID'] . '</a>';
                               } else {
                                                                // Người dùng chưa đăng nhập, hiển thị nút đăng nhập hoặc điều hướng đến trang đăng nhập
                               echo '<a href="login.php" >Đăng nhập</a>';
                                                            }
 
                                                        ?> </a></li>
        </ul>
    </div>

    <div class="TVCLB">
        <h1>Thành Viên Câu Lạc bộ Tin Học</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Chức vụ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../connect.php";

                // Kết nối đến cơ sở dữ liệu
                $conn = connect();

                // Truy vấn cơ sở dữ liệu để lấy thông tin tài khoản có clb_id = 2
                $sql = "SELECT * FROM user WHERE clb_id = 2  ORDER BY role DESC";
                $result = $conn->query($sql);

                // Kiểm tra xem có dữ liệu được trả về không
                if ($result->rowCount() > 0) {
                    // Duyệt qua từng dòng dữ liệu và hiển thị thông tin tài khoản trong bảng
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr ID='account-" . $row["ID"] . "'>";
                        echo "<td>" . $row["ID"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . ($row["role"] == 1 ? "ADMIN" : ($row["role"] == 2 ? "Đội trưởng" : "Thành viên")) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Không có thành viên nào trong câu lạc bộ này.</td></tr>";
                }

                // Đóng kết nối
                $conn = null;
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
