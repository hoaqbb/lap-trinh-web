<?
    //Kiểm tra form có phải là phương thức POST hay không
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        //Kiểm tra user và pass
        if($username == "timduongdi" && $password == "abc123"){
            //Tạo cookie có thời hạn 1 phút
            $cookie_name = "user";
            $cookie_value = $username;
            setcookie($cookie_name, $cookie_value, time() + 60, "/");
        }
        //Quay về trang chủ
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập hệ thống</title>
</head>
<body>
    <h2>Đăng nhập hệ thống</h2>
    <form name="frmLOGIN" action="" method="post">
        <fieldset>
            <legend>Thông tin đăng nhập</legend>
            <p>
                <label for="username"> User name:</label>
                <input name="username" id="username" type="text" 
                                placeholder="User name"/>            
            </p>
            <p>
                <label for="password">Password:</label>
                <input name="password" id="password" type="password"
                                placeholder="Password"/>
            </p>
            <p>
                <input type="submit"/>
                <input type="reset"/>   
            </p>
        </fieldset>
    </form>
</body>
</html>