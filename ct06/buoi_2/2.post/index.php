<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minh họa method GET</title>
</head>
<body>
    <h1>Lớp CT06N - Lập trình web với PHP</h1>
    <form name="frmPOST" action="form_post.php" method="post">
        <fieldset>
            <legend>Thông tin người dùng</legend>
            <p>
                <label for="hoten"> Họ tên:</label>
                <input name="hoten" id="hoten" type="text" 
                                placeholder="Nhập họ tên"></input>         
            </p>
            <p>
                <label for="email">Email:</label>
                <input name="email" id="email" type="email"
                                placeholder="Nhập Email"></input>
            </p>
            <p>
                <label for="password">Password:</label>
                <input name="password" id="password" type="password"
                                placeholder="Nhập password"></input>
            </p>
            <p>
                <input type="submit"/>
                <input type="reset"/>
            </p>
        </fieldset>
    </form>
</body>
</html>