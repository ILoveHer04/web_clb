<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thêm Tài Khoản</title>
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
        margin-top: 50px;
    }

    h2 {
        margin-bottom: 20px;
        position: relative;
        left: 200px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"], input[type="email"], input[type="password"] {
        width: 96%;
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
        background-color: blanchedalmond;
    }
</style>
</head>
<body>
<div class="container">
<h2>Thêm Tài Khoản</h2>
<form method="post" action="them.php">
    <div class="form-group">
        <label for="id">Mã Sinh Viên:</label>
        <input type="text" id="id" name="id" required>
    </div>
    <div class="form-group">
        <label for="name">Họ và Tên:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="SDT">Số Điện Thoại:</label>
        <input type="text" id="SDT" name="SDT" required>
    </div>
    <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
        <label for="role">Quyền:</label> <br>
        <select id="role" name="role"   style="width:100px ; font-weight:bold; ">
            <option value="1">ADMIN</option>
            <option value="0">USER</option>
            <option value="2">CAPTAIN</option>
        </select>
    </div>

    <input type="submit" name="submit" value="Thêm Tài Khoản">
</form>
</div>
</body>
</html>
