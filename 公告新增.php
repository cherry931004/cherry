<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      // 連接資料庫
      $link = mysqli_connect('localhost', 'root', '', '產業實習平台');
      if (!$link) {
          die("資料庫連線失敗: " . mysqli_connect_error());
      }
    // 接收表單資料
    if($_POST['newstitle']!=""){
      $newstitle = $_POST['newstitle'];
    }
    if($_POST['newscontent']!=""){
      $newscontent = $_POST['newscontent'];
    }
    if($_POST['newsdate']!=""){
      $newsdate = $_POST['newsdate'];
    }
    if($_POST['newslabel']!=""){
      $newsdate = $_POST['newslabel'];
    }
    // 查詢資料表
    $sql = "insert into 公告 (newstitle, newscontent, newsdate, newslabel ) values ('$newstitle', '$newscontent', '$newsdate','$newslabel')";
    $result = mysqli_query($link, $sql);
    header("Location: 公告編輯.php");
?>
</body>
</html>