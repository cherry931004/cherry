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
        <h1>Blog</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="首頁簡介.html">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </nav>
      </div>
    </div>
    <style scoped>
        table{
        border: 3px solid #116530; /* 設置每行的外框粗細和顏色 */
        border-collapse: collapse;
        margin: 0 auto;
        text-align: center;
      }
        table td, table th{
        border: 1px solid #116530;
        color: #666;
        height: 30px;
      }
        table thead th{
        background-color: #116530;
        width: 100px;
      }
        table tr:nth-child(odd){
        background: #fff;
      }
        table tr:nth-child(even){
        background: #F5FAFA;
      }
    </style>
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
            background-color: #A87676;
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
            background-color: #789DBC;
            color: white;
        }
        .actions .edit {
            background-color: #AD88C6;
            color: white;
        }
        .actions .delete {
            background-color: #D76C82;
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
    <!-- Blog Posts 2 Section -->
    <form method="post">
  <section id="blog-posts-2" class="blog-posts-2 section">
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <td>公告編號</td>
            <td>公告標題</td>
            <td>公告內容</td>
            <td>公告時間</td>
            <td>操作</td>
          </tr>
        </thead>
        <tbody>
          <?php
          // 連接資料庫
          $link = mysqli_connect('localhost', 'root', '', '產業實習平台');
          if (!$link) {
              die("資料庫連線失敗: " . mysqli_connect_error());
          }

          // 查詢資料
          $sql = "SELECT * FROM 公告";
          $result = mysqli_query($link, $sql);

          // 如果有資料，逐行輸出
          if ($result && mysqli_num_rows($result) > 0) {
              while ($r = mysqli_fetch_assoc($result)) {
                  echo "<tr>
                          <td>{$r['newsid']}</td>
                          <td>{$r['newstitle']}</td>
                          <td>{$r['newscontent']}</td>
                          <td>{$r['newsdate']}</td>
                          <td><a href='公告編輯刪除.php?id={$r['newsid']}' class='btn btn-warning btn-sm'>修改</a>
                        </tr>";
              }
          }
          // 關閉資料庫連線
          mysqli_close($link);
          ?>
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