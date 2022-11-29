<?php
    include('header.php');
    include('../controller/csp.php');
    $p=new cSP();
    //if($_SESSION['vt']=='QLTL')
    //{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATI | Thêm câu hỏi Listening 1</title>
</head>
<body>
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
    include('footer.php');
?>
</body>
</html>