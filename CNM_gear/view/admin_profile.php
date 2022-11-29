<?php
    include('../view/xacnhan.php');
    include('../controller/cinfo.php');
    $p= new cInfo();
    $re=$p->reinfoad($_SESSION['ID']);
    $row=mysqli_fetch_assoc($re);
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
    <!-- Site Metas -->
    <title>GGI | Account Information</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
     body {
    background: #00BFFF;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
    </style>
</head>

<body>
    <form action="" method="post">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="../images/user-128.png"><span class="font-weight-bold"></span><?php echo $row['username'] ?><span class="text-black-50"><?php echo $row['email'] ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Thông tin Admin</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Tên:</label><input type="text" name="name" class="form-control" placeholder="name" value="<?php echo $row['name'] ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $row['email'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text" name="sdt" class="form-control" placeholder="sdt" value="<?php echo $row['sdt'] ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Tài khoản</label><input type="text" class="form-control" value="<?php echo $row['username'] ?>" readonly></div>
                    <div class="col-md-6"><label class="labels">Vai trò</label><input type="text" class="form-control" value="<?php echo $row['role'] ?>" readonly></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="update" id="update">Lưu thông tin</button>
                <a href="../Admin/index.php"><button class="btn btn-primary profile-button" type="button">Về trang chủ</button></a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
            </div>
        </div>
    </div>
</div>
</form>
<?php
    if(isset($_POST['update']))
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $sdt=$_REQUEST['sdt'];
        $p->reupinfoad($_SESSION['ID']);
    }
?>
</body>

</html>