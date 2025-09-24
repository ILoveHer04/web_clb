<?php
session_start();

  

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/tuyentv/tuyen.css ">
    <style>
        /* CLB */
        .CLB {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 7px;
            padding: 20px;
            position: relative;
            left: 360px;
            width: 750px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);
            border: 2px solid #007580 ;
            background-color: #fff;
        }

        .CLB a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f9f9f9;
            color: #333;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            position: relative;
            left: 600px;
            top: -47px;
            border: 1px solid blueviolet;
        }
        .CLB span {
            font-size: 20px;
            color: blueviolet;
        }
        .CLB a:hover {
            background-color:orange
        }

        .CLB hr {

            width: 730px;
position: relative;
top: 12px;
        }

       .CLB input[type="submit"]:hover {
        background-color:orange;
    }
   
    </style>
</head>

<body>

    <header class="hea">
        <img src="lưu ảnh/z5325657706180_8c15ef86dede6c80314f4a4bf813ee79.jpg" alt="">
    </header>

    <div class="ulmenu li"> <!-- Menu -->
        <ul class="menu">
            <li><a href="/Trangchu.php"> Trang chủ</a></li>
            <li>
                <a href="#SP"> Giới thiệu</a>
                <ul>
                    <li><a href="/gioithieu/TTCLB.php"> Thông tin câu lạc bộ</a></li>
                    <li><a href="/gioithieu/TTDOINHOM.php">Thông tin hội nhóm </a></li>
                </ul>
            </li>
            <li><a href="/sukien.php"> Sự kiện</a></li>
            <li><a href="/tuyen.php"> Tuyển thành viên</a></li>
            <li style="position: relative; top: -10px;">
                <a href="">
                    <?php
                    if (isset($_SESSION['ID'])) {
                        echo '<a href="/Person/personal.php">' . $_SESSION['ID'] . '</a>';
                    } else {
                        echo '<a href="login.php" >Đăng nhập</a>';
                    }
                    ?>
                </a>
            </li>
        </ul>
    </div>

        <h2 style="color: blue; position:relative; left:550px; margin:20px 0 20px 0; color:white;">Danh Sách Câu Lạc Bộ - Đội Nhóm</h2>
    <div class="CLB"> <!-- Các CLB -->
        <span>CLB Tin học</span> <hr  color="aqua" size="5px" > <a href="">Xin Tham Gia </a>




        <span> Đội Sinh viên tình nguyện</span>  
        <hr  color="aqua" size="5px" >            <a href="">Xin Tham Gia </a>
        <span> Đội Thanh niên xung kích</span>   
        <hr  color="aqua" size="5px" >            <a href="">Xin Tham Gia </a>
        <span>CLB Võ thuật</span>            
        <hr  color="aqua" size="5px" >                <a href="">Xin Tham Gia </a>
        <span> Đội Thanh niên vận động hiến máu nhân đạo</span>  <hr  color="aqua" size="5px" > <a href="">Xin Tham Gia </a>
        <span> CLB Dance</span>              <hr  color="aqua" size="5px" >                     <a href="">Xin Tham gian</a>
        <span>CLB Du lịch</span>           <hr  color="aqua" size="5px" >                       <a href="">Xin Tham Gia </a>
        <span>Đội Văn nghệ tiên phong</span>        <hr  color="aqua" size="5px" >               <a href="">Xin Tham Gia </a>
        <span>CLB Múa dân gian</span>           <hr  color="aqua" size="5px" >                   <a href="">Xin Tham Gia </a>
        <span> CLB Tiếng anh</span>               <hr  color="aqua" size="5px" >                <a href="">Xin Tham Gia</a>
        <span>CLB Vườn ươm doanh nhân VWA</span>    <hr  color="aqua" size="5px" >               <a href="">Xin Tham Gia </a>
        <span>CLB Sách và hành động</span>        <hr  color="aqua" size="5px" >                   <a href="">Xin Tham Gia </a>
        <span>CLB Nghề luật</span>             <hr  color="aqua" size="5px" >                   <a href="">Xin Tham Gia </a>
        <span>CLB Hùng biện</span>               <hr  color="aqua" size="5px" >                 <a href="">Xin Tham Gia</a>
        <span>CLB Hành động vì bình đẳng giới và phát triển bền vững</span>  <hr  color="aqua" size="5px" > <a href="">Xin Tham Gia </a>
        <span> CLB Tâm lý học</span>                <hr  color="aqua" size="5px" >              <a href="">Xin Tham Gia</a>
        <span>CLB Nhiếp ảnh</span>               <hr  color="aqua" size="5px" >                  <a href="">Xin Tham Gia </a>
        <span>CLB Thiết kế đa phương tiện</span>        <hr  color="aqua" size="5px" >          <a href="">Xin Tham Gia </a>
    </div>

</body>

</html>