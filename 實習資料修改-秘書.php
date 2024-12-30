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

  <!-- =======================================================
  * Template Name: AgriCulture
  * Template URL: https://bootstrapmade.com/agriculture-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
            <li class="dropdown"><a href="#"><span>公告</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="公告.php">最新公告</a></li>
              </ul>
            </li>
            <li><a href="實習資料管理-秘書.php">實習資料管理</a></li>
            <li><a href="個人介面-秘書.html"class="active"><b>個人</b></a></li>
            <li><a href="登入.html">登出</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1>輔仁大學資訊管理學系 教師管理系統</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="首頁簡介.html">Home</a></li>
            <li class="current">實習資料管理系統</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <style>

      .container1 {
          max-width: 800px;
          margin: 0 auto;
          background: white;
          padding: 30px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .form-group {
          margin-bottom: 15px;
      }
      label {
          font-weight: bold;
          display: block;
          margin-bottom: 5px;
      }
      input[type="text"], textarea {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
      }
      .tags {
          display: flex;
          flex-wrap: wrap;
          gap: 10px;
      }
      .tag {
          background-color: #007bff;
          color: white;
          padding: 5px 10px;
          border-radius: 20px;
          cursor: pointer;
      }
      .actions button {
          padding: 10px 15px;
          margin-right: 5px;
          border: none;
          cursor: pointer;
          border-radius: 5px;
      }
      .actions .add {
          background-color: #28a745;
          color: white;
      }
      .actions .edit {
          background-color: #ffc107;
          color: white;
      }
      .actions .delete {
          background-color: #dc3545;
          color: white;
      }
      .announcement-list {
          margin-top: 30px;
      }
      .announcement-item {
          background-color: #e9ecef;
          padding: 15px;
          margin-bottom: 10px;
          border-radius: 5px;
      }
  </style>
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
$sql = "SELECT * FROM 實習報告書上傳 WHERE re_id = $id";
$result = mysqli_query($link, $sql);
$announcement = mysqli_fetch_assoc($result);

// 處理表單提交
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 過濾輸入數據
    $re_title = mysqli_real_escape_string($link, $_POST['re_title']);
    $re_content = mysqli_real_escape_string($link, $_POST['re_content']);
    $re_time = mysqli_real_escape_string($link, $_POST['re_time']);
    $re_company = mysqli_real_escape_string($link, $_POST['re_company']);

    if (isset($_POST['update'])) {
        // 更新公告
        $update_sql = "UPDATE 實習報告書上傳
                       SET re_title = '$re_title', 
                           re_content = '$re_content', 
                           re_time = '$re_time' ,
                           re_company = '$re_company'
                       WHERE re_id = $id";
        if (mysqli_query($link, $update_sql)) {
            echo "<script>alert('修改成功！');window.location.href='實習資料管理-秘書.php';</script>";
        } else {
            echo "修改失敗：" . mysqli_error($link);
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
            <th colspan="2">報告書管理</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>報告書主題</td>
            <td><input type="text" name="re_title" value="<?= $announcement['re_title'] ?>" required></td>
          </tr>
          <tr>
            <td>報告書內容</td>
            <td><input type="text" name="re_content" value="<?= $announcement['re_content'] ?>" required></td>
          </tr>
          <tr>
            <td>實習公司</td>
            <td><input type="text" name="re_company" value="<?= $announcement['re_company'] ?>" required></td>
          </tr>
          <tr>
            <td>實習時間</td>
            <td><input type="date" name="re_time" value="<?= $announcement['re_time'] ?>" required></td>
          </tr>
          <tr>
          <td colspan="2" style="text-align: center;">
            <input type="submit" name="update" value="修改">
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