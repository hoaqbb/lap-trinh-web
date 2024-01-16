<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minh họa cookie kiểm soát đăng nhập</title>
</head>
<body>
    <h1>Minh họa cookie</h1>
    <!-- Đây là đoạn nhúng PHP -->
    <?
    try{
        if(isset($_COOKIE["user"])){
            $username = $_COOKIE["user"];
            echo "Welcome !" . $username;
        } else{
            die ("You're not logged in!");
        }
    } catch(Exception $e){
        echo $e->getMessage();
    }
    ?>
</body>
</html>