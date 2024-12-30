<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入結果</title>
</head>
<body>
<?php
// 檢查 POST 鍵是否存在
if (isset($_POST['account']) && isset($_POST['password'])) {
    $account = $_POST['account'];
    $password = $_POST['password'];

    // 連接資料庫
    $link = mysqli_connect('localhost', 'root', '', '產業實習平台');
    if (!$link) {
        die("資料庫連接失敗: " . mysqli_connect_error());
    }

    // 查詢帳號和密碼
    $sql = "SELECT * FROM sign WHERE account='$account' AND password='$password'";
    $result = mysqli_query($link, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        // 啟用 Session
        session_start();
    
        // 設置 Session 變數
        $_SESSION['account'] = $_POST['account'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['level'] = $row['level'];
    
        // 判斷 level 並跳轉
        if ($row['level'] === 'admin') {
            header("Location: 個人介面-老師.html");
            exit(); 
        } elseif ($row['level'] === 'student') {
            header("Location: 個人介面-學生.html");
            exit();
        } elseif ($row['level'] === 'secretary') {
            header("Location: 個人介面-秘書.html");
            exit();
        } else {
            echo "<center><h1>登入成功，但未定義的權限</h1></center>";
        }
    } else {
        echo "<center><h1>登入失敗：帳號或密碼錯誤</h1></center>";
    }

    // 關閉資料庫連接
    mysqli_close($link);
} else {
    echo "<center><h1>請輸入帳號與密碼</h1></center>";
}
?>

</body>
</html>
