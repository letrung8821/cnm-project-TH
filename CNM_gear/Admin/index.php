<?php
  include('../view/xacnhan.php');
  include('../controller/csp.php');
  include('../controller/cinfo.php');
  $p=new cSP();
  $re=new cInfo();
  $ten=$re->reinfoad($_SESSION['ID']);
  $showten=mysqli_fetch_assoc($ten);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GGI | Thêm sản phẩm</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/ayaya.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    #tieude{
      text-align: center;
      font-weight: bold;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../view/index.php" class="logo d-flex align-items-center">
      <i class="fa fa-university"></i><span id="chu">GGI</span></a>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/ayaya_qltl.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $showten['name']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $showten['name']; ?></h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../view/admin_profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../view/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Thêm sản phẩm</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Tác vụ</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="view/thembaiviet.php">
              <i class="bi bi-circle"></i><span>Tạo bài viết</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Xem DS bài kiểm tra</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      

      

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Thêm sản phẩm</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Thêm sản phẩm</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  <!-----code phần body từ đây-->
    <section class="section dashboard">
      <div class="row">
      <div class="container">
    <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 id="tieude">Thêm sản phẩm</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div style="height: 100%; width: 100%;" class="form-control" >
                            <div style="padding-bottom: 5px; border-bottom: 1px solid grey;" class="">
                                <label for="tensp">Tên sản phẩm: </label>
                                <input class="form-control" type="text" name="tensp" id="tensp">
                            </div>
                            <div style="padding-bottom: 5px; padding-top: 10px; border-bottom: 1px solid grey;" class="">
                                <label for="loaisp">Loại sản phẩm: </label>
                                <select class="form-control" name="loaisp" id="loaisp">
                                    <option value="none">Chọn...</option>
                                    <option value="1">Chuột</option>
                                    <option value="2">Màn hình</option>
                                    <option value="3">Bàn phím</option>
                                    <option value="4">PC</option>
                                    <option value="5">Tai nghe</option>
                                    <option value="6">Ghế</option>
                                </select>
                            </div>
                            <div style="padding-bottom: 5px; padding-top: 10px; border-bottom: 1px solid grey;" class="">
                            <label for="loaisp_sub">Loại sản phẩm phụ: </label>
                                <select class="form-control" name="loaisp_sub" id="loaisp_sub">
                                    <option value="none">Chọn...</option>
                                    <option value="1">Chuột không dây</option>
                                    <option value="2">Chuột có dây</option>
                                    <option value="3">Bàn phím có dây</option>
                                    <option value="4">Bàn phím không dây</option>
                                    <option value="5">Tai nghe có dây</option>
                                    <option value="6">Tai nghe không dây</option>
                                    <option value="7">PC Gaming</option>
                                    <option value="8">PC Văn phòng</option>
                                    <option value="9">Máy trạm</option>
                                    <option value="10">Màn hình 60Hz</option>
                                    <option value="11">Màn hình 120Hz</option>
                                    <option value="12">Màn hình 144Hz</option>
                                    <option value="13">Màn hình 240Hz</option>
                                    <option value="14">Ghế công thái học</option>
                                    <option value="15">Ghế Gaming</option>
                                </select>
                            </div>
                            <div style="padding-bottom: 5px; padding-top: 10px; border-bottom: 1px solid grey;" class="">
                                <label for="soluong">Số lượng: </label>
                                <input class="form-control" type="text" name="soluong" id="soluong">
                            </div>
                            <div style="padding-bottom: 5px; padding-top: 10px; border-bottom: 1px solid grey;" class="">
                                <label for="tinhtrang">Tình trạng:</label>
                                <input class="form-control" type="text" name="tinhtrang" id="tinhtrang">
                            </div>
                            <div style="padding-bottom: 5px; padding-top: 10px; border-bottom: 1px solid grey;" class="">
                                <label for="mota">Mô tả: </label>
                                <textarea class="form-control" name="mota" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div style="padding-bottom: 5px; padding-top: 10px; border-bottom: 1px solid grey;" class="">
                                <label for="gia">Giá: </label>
                                <input class="form-control" type="text" name="gia" id="gia">
                            </div>
                            <div style="padding-bottom: 5px; padding-top: 10px; border-bottom: 1px solid grey;" class="">
                                <label for="thuonghieu">Thương hiệu: </label>
                                <select class="form-control" name="thuonghieu" id="thuonghieu">
                                    <option value="none">Chọn...</option>
                                    <option value="1">Logitech</option>
                                    <option value="2">Razer</option>
                                    <option value="3">Corsair</option>
                                    <option value="4">Steelseries</option>
                                    <option value="5">Akko</option>
                                    <option value="6">Asus</option>
                                    <option value="7">MSI</option>
                                    <option value="8">Acer</option>
                                    <option value="9">Dell</option>
                                </select>
                            </div>
                            <div style="padding-bottom: 5px; padding-top: 10px; border-bottom: 1px solid grey;" class="form-control">
                                <p style="font-weight: bold;">Tải hình lên:</p> <input type="file" name="hinh" id="hinh" accept=".jpeg, .jpg, .png, .gif">
                            </div>
                            
                            </div><br>
                            <div style="text-align: center;" class="nut">
                                <button class="btn btn-primary btn-lg btn-block" name="upload" id="upload" type="submit">Thêm câu hỏi</button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                    if(isset($_POST['upload']))
                    {
                        $tensp = $_REQUEST['tensp'];
                        $loaisp = $_REQUEST['loaisp'];
                        $soluong = $_REQUEST['soluong'];
                        $tinhtrang = $_REQUEST['tinhtrang'];
                        $mota = $_REQUEST['mota'];
                        $gia = $_REQUEST['gia'];
                        $thuonghieu = $_REQUEST['thuonghieu'];
                        $loaisp_sub = $_REQUEST['loaisp_sub'];
                        $ten_hinh = $_FILES['hinh']['name'];
                        $ten_tam = $_FILES['hinh']['tmp_name'];
                        $kich_co = $_FILES['hinh']['size'];
                        $loai_file = $_FILES['hinh']['type'];
                        $p->rethemsp();
                    }
                ?>
                <!--------------------------------->
                
                <!--------------------------------->
            <div class="col-md-2"></div>
    </div>
</div>
<?php
    /*}
    elseif($_SESSION['vt']=='QTHT')
    {
        echo '<script>alert("Bạn không được cấp quyền này !")</script>';
        echo '<script>window.location.href="../Admin/index.php"</script>';
    }
    else
    {
        echo '<script>alert("Bạn không được cấp quyền này !")</script>';
        echo '<script>window.location.href="index.php"</script>';
    }*/
    
?>
      </div>
    </section>

  </main><!-- End #main -->
  <!-----kết thúc body----------------------->

  <!-- ======= Footer ======= -->
  
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>

</html>