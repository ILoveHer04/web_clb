<?php
session_start();

// Hủy bỏ phiên đăng nhập của người dùng bằng cách xóa các biến session
session_unset(); // Xóa tất cả các biến session
session_destroy(); // Hủy bỏ phiên session


// Xoá cookie liên quan đến phiên đăng nhập
setcookie(session_name(), '', time() - 3600, '/');

// Xóa cookie
if (isset($_COOKIE['name']) && isset($_COOKIE['password'])) {
    unset($_COOKIE['name']);
    unset($_COOKIE['password']);
    setcookie('name', '', time() - 3600);
    setcookie('password', '', time() - 3600);
}
// Chuyển hướng người dùng về trang đăng nhập hoặc bất kỳ trang nào khác bạn muốn
// Chuyển hướng người dùng về trang đăng nhập hoặc bất kỳ trang nào khác bạn muốn
header('Location: login.php');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
exit();
?>
