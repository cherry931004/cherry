<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>產業實習平台</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="https://summercourse.fju.edu.tw/statics/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="blog-page">

<header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="首頁簡介.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="https://www.im.fju.edu.tw/wp-content/uploads/2024/02/%E8%B3%87%E7%94%A2-14@4x.png" alt="AgriCulture">
        <!-- <h1 class="sitename">AgriCulture</h1>  -->
      </a>
      <nav id="navmenu" class="navmenu">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="首頁簡介.html">簡介</a></li>
            <li><a href="企業資訊.html">企業資訊</a></li>
            <li class="dropdown"><a href="#"><span>公告</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="公告新增.html">新增公告</a></li>
                <li><a href="公告編輯.php">公告編輯</a></li>
              </ul>
            </li>
            <li><a href="個人介面-老師.html"class="active"><b>個人</b></a></li>
            <li><a href="登入.html">登出</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
  </header>

  <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/pexels-seven11nash-380768.jpg);">
      <div class="container position-relative">
        <h1>公告編輯與刪除</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="首頁簡介.html">Home</a></li>
            <li class="current">公告編輯</li>
          </ol>
        </nav>
      </div>
    </div>

  <style scoped>
    table {
      border: 3px solid #116530;
      border-collapse: collapse;
      margin: 20px auto;
      width: 80%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      text-align: left;
      font-family: Arial, sans-serif;
    }

    table td, table th {
      border: 1px solid #116530;
      padding: 12px 16px;
      color: #333;
      vertical-align: middle;
    }

    table thead th {
      background: linear-gradient(45deg, #116530, #1b8742);
      color: #fff;
      font-weight: bold;
      text-align: center;
    }

    table tr:nth-child(odd) {
      background: #f9f9f9;
    }

    table tr:nth-child(even) {
      background: #eef5f5;
    }

    /* 表格內按鈕樣式 */
    input[type="submit"], input[type="reset"] {
      padding: 10px 20px;
      font-size: 14px;
      border: none;
      border-radius: 20px;
      color: #fff;
      cursor: pointer;
      margin: 5px;
      transition: all 0.3s ease;
    }

    input[type="submit"] {
      background: linear-gradient(45deg, #5DB996, #5DB996);
      box-shadow: 0 4px 6px rgba(40, 167, 69, 0.3);
    }

    input[type="submit"]:hover {
      background: #1e7e34;
    }

    input[type="reset"] {
      background: linear-gradient(45deg, #FF748B, #FF748B);
      box-shadow: 0 4px 6px rgba(220, 53, 69, 0.3);
    }

    input[type="reset"]:hover {
      background: #a71d2a;
    }

    /* 表單容器樣式 */
    .container2 {
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
      background: #f9fafb;
      border-radius: 12px;
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .section {
      padding: 40px 20px;
      border-radius: 16px;
    }

    td input {
      width: 90%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }
  </style>

<?php
// 接收 GET 參數並驗證
$id = isset($_GET['id']) ? intval($_GET['id']) : null;
if (!$id) {
    die("未提供有效的公告 ID！");
}

// 連接資料庫
$link = mysqli_connect('localhost', 'root', '', '產業實習平台');
if (!$link) {
    die("資料庫連線失敗：" . mysqli_connect_error());
}

// 查詢公告資料
$sql = "SELECT * FROM 公告 WHERE newsid = $id";
$result = mysqli_query($link, $sql);
if (!$result || mysqli_num_rows($result) == 0) {
    die("未找到該公告！");
}
$announcement = mysqli_fetch_assoc($result);

// 處理表單提交
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 過濾輸入數據
    $newstitle = mysqli_real_escape_string($link, $_POST['newstitle']);
    $newscontent = mysqli_real_escape_string($link, $_POST['newscontent']);
    $newsdate = mysqli_real_escape_string($link, $_POST['newsdate']);

    if (isset($_POST['update'])) {
        // 更新公告
        $update_sql = "UPDATE 公告 
                       SET newstitle = '$newstitle', 
                           newscontent = '$newscontent', 
                           newsdate = '$newsdate' 
                       WHERE newsid = $id";
        if (mysqli_query($link, $update_sql)) {
            echo "<script>alert('修改成功！');window.location.href='公告編輯.php';</script>";
        } else {
            echo "修改失敗：" . mysqli_error($link);
        }
    } elseif (isset($_POST['delete'])) {
        // 刪除公告
        $delete_sql = "DELETE FROM 公告 WHERE newsid = $id";
        if (mysqli_query($link, $delete_sql)) {
            echo "<script>alert('刪除成功！');window.location.href='公告編輯.php';</script>";
        } else {
            echo "刪除失敗：" . mysqli_error($link);
        }
    }
}

mysqli_close($link);
?>




<form method="post">
  <section id="blog-posts-2" class="blog-posts-2 section">
    <div class="container2">
      <table>
        <thead>
          <tr>
            <th colspan="2">公告管理</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>公告標題</td>
            <td><input type="text" name="newstitle" value="<?= $announcement['newstitle'] ?>" required></td>
          </tr>
          <tr>
            <td>公告內容</td>
            <td><input type="text" name="newscontent" value="<?= $announcement['newscontent'] ?>" required></td>
          </tr>
          <tr>
            <td>公告日期</td>
            <td><input type="date" name="newsdate" value="<?= $announcement['newsdate'] ?>" required></td>
          </tr>
          <tr>
          <td colspan="2" style="text-align: center;">
            <input type="submit" name="update" value="修改">
            <input type="submit" name="delete" value="刪除" onclick="return confirm('確定要刪除嗎？');">
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</form>

  <p></p>
  <p></p>
  <p></p>
  <footer id="footer" class="footer dark-background">
    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
        <div><a href="首頁簡介.html">輔仁大學產業實習平台</a></div>
        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="credits">Designed by 輔仁大學資訊管理學系 412402361 劉姝辰</div>
        </div>
        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="https://www.facebook.com/FJUIM/?locale=zh_TW"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/fjuim/"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>