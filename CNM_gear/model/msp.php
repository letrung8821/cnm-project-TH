<?php
    class mSP
    {
        function xuatSP($cate)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from product where category = '$cate'";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function show_SP()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from product";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function chitietsp($masp)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from product join thuonghieu on product.thuonghieu = thuonghieu.id_th where id_sp = '$masp'";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function thuonghieu()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from thuonghieu";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
                //echo 'Không có dữ liệu';
            }
        }
        function subcate($id_cate)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from subcategory where id_cate='$id_cate'";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
                //echo 'Không có dữ liệu';
            }
        }
        function themsp()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
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
                    if($tensp == '' || $loaisp == 'none' || $soluong == ''|| $mota == ''|| $gia == ''|| $thuonghieu == 'none'|| $loaisp_sub == 'none')
                    {
                        echo '<script>alert("Vui lòng nhập đầy đủ thông tin !")</script>';
                        //echo header("refresh:0;url='....php'");
                    }
                    else
                    {
                        /*quy định file*/ 
                        $ten_hinh = $_FILES['hinh']['name'];
                        $ten_tam = $_FILES['hinh']['tmp_name'];
                        $kich_co = $_FILES['hinh']['size'];
                        $loai_file = $_FILES['hinh']['type'];

                        $allowed_sanpham = ['jpg','png','jpeg','gif'];
                        $sanpham_extension = explode('.', $ten_hinh);
                        $sanpham_extension = strtolower(end($sanpham_extension));
                        if(!in_array($sanpham_extension, $allowed_sanpham))
                        {
                            echo '<script>alert("Định dạng hình không hợp lệ hoặc chưa chọn hình !")</script>';
                            //echo header("refresh:0;url='...php'");
                        }
                        elseif($kich_co > 5000000 ) // kích cỡ 5MB
                        {
                            echo '<script>alert("Kích cỡ hình không quá 5MB !")</script>';
                            //echo header("refresh:0;url='...php'");
                        }
                        else
                        {
                            $timestamp = time();
                            $new_picture_name = "ggi_".date("m-d-y", $timestamp)."_". basename($_FILES['hinh']['name']);//random_int(1,256);
                            //$new_document_name .= '.' . $tailieu_extension;

                            move_uploaded_file($ten_tam, '../images/sp/'.$new_picture_name);
                            $sql = "insert into product (id_sp, name, category, soluong, tinhtrang, mota, gia, hinh, soluongban, thuonghieu, subcate) values ('', N'$tensp', '$loaisp', '$soluong', N'$tinhtrang', N'$mota', '$gia', '$new_picture_name', '0', '$thuonghieu', '$loaisp_sub')";
                            mysqli_query($conn, $sql);
                            echo '<script>alert("Thêm sản phẩm thành công !")</script>';
                            //echo header("refresh:0;url='...php'");
                        }
                    }
                }
            }
            else
            {
                return false;
                //echo 'Không có dữ liệu';
            } 
        }
        function addcart()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                if(isset($_POST['addcart']))
                {
                    $idsp=$_REQUEST['idsp'];
                    $idkh=$_REQUEST['idkh'];
                    $gia=$_REQUEST['gia'];
                    $sql= "insert into giohang (id, idsp, khachhang, gia, sl, trangthai) values ('', '$idsp', '$idkh', '$gia', '1', N'Chưa thanh toán')";
                }
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function xuatcart($iduser)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from giohang inner join product on giohang.idsp = product.id_sp where khachhang = '$iduser' and trangthai = 'Chưa thanh toán'";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function xoaspcart($idsp)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "delete from giohang where idsp = '$idsp'";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function payment($iduser)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "SELECT SUM(gia) FROM giohang WHERE khachhang = '$iduser' and trangthai = 'Chưa thanh toán' ";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function update_trangthai($iduser)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                //$tensp = $_REQUEST['name'];
                $sql= "update giohang set trangthai = N'đã thanh toán' where khachhang ='$iduser' ";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function banchayvl()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                //$tensp = $_REQUEST['name'];
                $sql= "select *from product where soluongban >= 5 ";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
    }
?>