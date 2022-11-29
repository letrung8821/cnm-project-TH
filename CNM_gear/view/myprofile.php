<?php
  include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>GGI | Account Information</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}


.about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.about p {
    font-size: 0.825rem;
}

img {
border-radius:50%;
-moz-border-radius:50%;
-webkit-border-radius:50%;
}
    </style>
</head>

<body>

<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="../images/user-128.png" width=200px; alt="">
				</div>
			</div>
			<div class="about">
				<h5>About me</h5>
                <h6>November no Halloween</h6>
                <h6>Tet is coming</h6>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<form action="" method="post">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h2 class="mb-2 text-primary"> <b>Thông tin tài khoản</b> </h2>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="name">Tên</label>
					<input type="text" class="form-control" name="tenkh" id="tenkh" value="<?php echo $showten['name']; ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" value="<?php echo $showten['email']; ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="sdt">Số điện thoại</label>
					<input type="text" class="form-control" name="sdt" id="sdt" value="<?php echo $showten['sdt']; ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="social">Tài khoản</label>
					<input type="text" class="form-control" id="social" value="<?php echo $showten['username']; ?>" readonly>
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h2 class="mt-3 mb-2 text-primary"> <b>Địa chỉ</b> </h2>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="diachi">Nhập địa chỉ</label>
					<input type="name" class="form-control" name="diachi" id="diachi" value="<?php echo $showten['diachi']; ?>">
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
                    <a href="index.php" ><button type="button" id="back" name="back" class="btn btn-secondary">Về trang chủ</button></a>
                    <button type="submit" id="update" name="update" class="btn btn-primary">Cập nhật</button>
				</div>
			</div>
		</div>
		</form>
		<?php
			if(isset($_POST['update']))
			{
				$name=$_REQUEST['tenkh'];
				$diachi=$_REQUEST['diachi'];
				$email=$_REQUEST['email'];
				$sdt=$_REQUEST['sdt'];
				$crecard=$_REQUEST['crecard'];
				$p->reupinfo($_SESSION['ID']);
			}
		?>
	</div>
</div>
</div>
</div>
</div>



    <?php
        include('footer.php');
    ?>
</body>

</html>