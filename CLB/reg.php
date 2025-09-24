<?php
    require 'connect.php' ;

    if(isset($_POST[ 'SUB' ]))

        {
            $name = $_POST['name'] ;
            $ID = $_POST['ID'] ;
            $email = $_POST['email'] ;
            $SDT = $_POST['SDT'] ;
            $password = $_POST['password'] ;
            $repass = $_POST['repass'] ;
        }

        if(!empty($ID) && !empty($name) && !empty( $email) && !empty( $SDT) && !empty($password) && !empty( $repass))
        {
            $sql = "INSERT INTO `user` ( `name` , `ID` , `email` , `SDT` , `password`)  VALUES('$name','$ID', '$email' , '$SDT' , '$password')" ;

            if($conn->query($sql) === true) {
                // Thành công
            } else {
                echo '<div style="text-align:center;font-size:30px;font-weight:bold; color:#007580; margin-top:300px;">Bạn đã đăng ký thành công, sau 3s sẽ chuyển hướng về đăng nhập để tiếp tục.</div>';
                header('refresh:3; url=login.php');
            }
        } else {
            echo "bạn cần nhập đầy đủ thông tin trước khi đăng ký" ;
                }
?>

