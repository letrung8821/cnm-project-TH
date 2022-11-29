<?php
    class mBL
    {
        function xuatBL($tieude)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from blog where tieude = '$tieude'";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function show_BL()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from blog ";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function show_BLe()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from blog LIMIT 3 ";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }

        function chitietbl($blog)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from blog where id_blog = '$blog'";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function chuyenmuc($chuyenmuc)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from blog where chuyenmuc ='$chuyenmuc'";
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
        function idadmin($id_admin)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from blog where id_admin ='$id_admin'";
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
        function thembl()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                if(isset($_POST['upload']))
                {
                    $tieude = $_REQUEST['tieude'];
                    $noidung = $_REQUEST['noidung'];
                    $chuyenmuc = $_REQUEST['chuyenmuc'];
                    $nguoitao = $_REQUEST['nguoitao'];
                    if($tieude == '' ||  $noidung == ''|| $chuyenmuc == ''|| $nguoitao == '')
                    {
                        echo '<script>alert("Vui lòng nhập đầy đủ thông tin !")</script>';
                    }
                    else
                    {
                        $sql= "insert into blog (id_blog, tieude, noidung, chuyenmuc, id_admin) values ('', N'$tieude', N'$noidung', N'$chuyenmuc', N'$nguoitao')";
                        echo '<script>alert("Tạo bài viết thành công !")</script>';
                        echo '<script>window.location="blog.php"</script>';
                    }
                    $qr= mysqli_query($conn, $sql);
                    return $qr;
                    mysqli_close($conn);
                }
            }
            else
            {
                return false;
                //echo 'Không có dữ liệu';
            } 
        }
    }
?>