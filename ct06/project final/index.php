<?
    require "config.php";
    require "classes/database.php";
    require "classes/user.php";
    $conn = require "classes/database.php";

    if($conn){
        //echo "Kết nối thành công <br/>";
        // $rs = User::authenticate($conn, "timduongdi", "abc123");
        $rs = User::authenticate($conn, $username, $password);
    } if($rs){
        echo "Đăng nhập thành công!";
        //tạo session
    }else{
        die ("Thông tin đăng nhập không đúng!");
    }
?>