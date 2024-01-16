<?
    //Nhận thông tin gửi từ index.php (POST)
    $hoten =$_POST['hoten'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    //kiểm tra password
    if($password == "abc123"){
        echo "Chào !" . $hoten . " - " . $email;
    } else{
        echo "Vui lòng đăng ký thành viên";
    }
    
?>