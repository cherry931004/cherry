<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊</title>
</head>
<body>
<?php
    // 接收表單資料
    $account = $_POST['account'];
    $password = $_POST['password'];

    // 連接資料庫
    $link = mysqli_connect('localhost', 'root', '', '產業實習平台');
    if (!$link) {
        die("資料庫連線失敗: " . mysqli_connect_error());
    }

    // 查詢資料表
    $sql = "insert into sign (account, password, level) values ('$account', '$password', 'student')";
    $result = mysqli_query($link, $sql);
    header("Location: 登入.html");
?>
</body>
</html>