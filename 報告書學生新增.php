<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
    // 接收表單資料
    $_SESSION['re_title'] = $_POST['re_title'];
    $_SESSION['re_content'] = $_POST['re_content'];

    // 連接資料庫
    $link = mysqli_connect('localhost', 'root', '', '產業實習平台');
    if (!$link) {
        die("資料庫連線失敗: " . mysqli_connect_error());
    }

    // 查詢資料表
    $sql = "insert into 實習報告書上傳 (re_title, re_content,account) values ('".$_SESSION['re_title']."','".$_SESSION['re_content']."','".$_SESSION['account']."')";
    $result = mysqli_query($link, $sql);
    echo $sql;
    if ($result) {
        header("Location: 個人介面-學生.html");
        exit;
    } else {
        die("資料插入失敗: " . mysqli_error($link));
    }
?>
</body>
</html>
