<?php
    include('header.php');
    include('../controller/csp.php');
    $p=new cSP();
    $hien= $p->deSP($_GET['product']);
    if(mysqli_num_rows($hien) > 0)
    {
        while($row = mysqli_fetch_assoc($hien))
        {
            ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>GGI | Thông tin sản phẩm</title>
                    <link rel="stylesheet" href="../css/chitietsanpham.css">
                </head>
                <body>
                    <div class="container">
                        <form action="" method="post">
                            <div class="row">
                                <div style="float: left;" class="col-md-5">
                                    <div class="hinhanh">
                                        <img id="pic" src="../images/sp/<?php echo $row['hinh']; ?>" alt="hình ảnh sản phẩm">
                                    </div>
                                </div>
                                <div style="float: right;" class="col-md-7">
                                    <div class="thongtin">
                                        <h2 id="tensp" style="text-align: center; margin: 5px;"><?php echo $row['name']; ?></h2>
                                        <input type="hidden" name="idsp" id="idsp" value="<?php echo $row['id_sp']; ?>"> 
                                        <input type="hidden" name="idkh" id="idkh" value="<?php echo $_SESSION['ID']; ?>">
                                        <input type="hidden" name="gia" id="gia" value="<?php echo $row['gia']; ?>">
                                        <p id="t_t"><i class="fa-solid fa-circle-info"></i> Thông tin sản phẩm: </p>
                                        <ul>
                                            <li id="des"><i class="fa-solid fa-copyright"></i> Thương hiệu: <b id="dude"><?php echo $row['thuonghieu']; ?></b> </li>
                                            <li id="des"><i class="fa-solid fa-circle-exclamation"></i> Tình trạng: <b id="dude"><?php echo $row['tinhtrang']; ?></b></li>
                                            <li id="des"><i class="fa-solid fa-house-crack"></i> Bảo hành trách nhiệm: <b id="dude">1 tháng</b></li><hr>
                                            <li id="des"><i class="fa-solid fa-money-bill-1-wave"></i> Giá: <b id="dude"><?php echo $row['gia']; ?> VNĐ</b> </li>
                                        </ul><br>
                                        <!-- <input style="float: right; margin-bottom: 10px; " type="submit" class="btn btn-danger" id="addcart" name="addcart" value="Thêm vào giỏ hàng"><br> -->
                                    </div>
                                </div><hr>
                                <div style="border: 1px solid black; border-radius: 20px; padding: 20px; margin: 15px;" class="mota">
                                    <h3 id="motasp">Mô tả sản phẩm:</h3> 
                                    <?php echo $row['mota']; ?>
                                </div>
                            </div>
                        </form>
                        <?php
                            if(isset($_POST['addcart']))
                            {
                                $tensp=$_REQUEST['tensp'];
                                $idkh=$_REQUEST['idkh'];
                                $gia=$_REQUEST['gia'];
                                $kq=$p->recart();
                                if($kq)
                                {
                                    echo "<script>alert('Thêm vào giỏ hàng thành công!')</script>";
                                }
                                else
                                {
                                    echo "<script>alert('Thêm vào giỏ hàng thất bại!')</script>";
                                }
                            }
                        ?>
                    </div>
            <?php
        } 
    }
    else
    {
        echo 'Không tìm thấy sản phẩm !';
    }
    include('footer.php');
?>
</body>
</html>