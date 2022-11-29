<?php
    class mdki{
        function dkiTK()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                if(isset($_POST['dki']))
                {
                    $matk= $_POST['username'];
                    $mk= sha1($_POST['password']);
                    if($matk =='' || $mk =='')
                    {
                        echo '<script>alert("Vui lòng nhập đầy đủ thông tin !")</script>';
                    }
                    else
                    {
                        echo '<script>alert("Đăng ký thành công !")</script>';
                        echo '<script>window.location="login_form.php";</script>';
                    }
                }
                $sql= "insert into taikhoan (username, password, role) values ('$matk', '$mk', 'KH')";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function addttKH()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                if(isset($_POST['dki']))
                {
                    $matk= $_POST['username'];
                    $ten = $_POST['name'];
                    $diachi= $_POST['diachi'];
                    $email= $_POST['email'];
                    $sdt= $_POST['sdt'];  
                    if($matk =='' || $ten =='' || $diachi =='' || $email =='' || $sdt =='')
                    {
                        echo '<script>alert("Vui lòng nhập đầy đủ thông tin !")</script>';
                    }
                    
                }
                $sql= "insert into khachhang (username, name, diachi, email, sdt, role) values ('$matk', N'$ten', N'$diachi', '$email', '$sdt', 'KH')";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function capTK()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            $p=new ketnoi();
            if($p->ketnoidl($conn))
            {
                if(isset($_POST['cap']))
                {
                    $matk= $_POST['username'];
                    $mk= hash('ripemd160',$_POST['password']);
                    
                }
                $sql= "insert into taikhoan (MaTK, Password, MaVT) values ('$matk', '$mk', 'QLTL')";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                $p->ngatketnoi($conn);
            }
            else
            {
                return false;
                //echo 'Không có dữ liệu';
            }
        }
        function addttQL()
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            $p=new ketnoi();
            if($p->ketnoidl($conn))
            {
                if(isset($_POST['cap']))
                {
                    $matk= $_POST['username'];
                    $email= $_POST['email'];
                    $tenql= $_POST['fullname'];
                    $phone= $_POST['phone'];    
                }
                $sql= "insert into quanlytailieu (MaQLTL, Email, TenUser, MaVT, SĐT) values ('$matk', '$email', N'$tenql', 'QLTL', $phone)";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                $p->ngatketnoi($conn);
            }
            else
            {
                return false;
                //echo 'Không có dữ liệu';
            }
        }
    }
