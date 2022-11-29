<?php
class mInfo
    {
        function xuatinfo($iduser)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from khachhang where username = '$iduser' LIMIT 1";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function xuatinfoad($iduser)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                $sql= "select * from admin where username = '$iduser' LIMIT 1";
                $qr= mysqli_query($conn, $sql);
                return $qr;
                mysqli_close($conn);
            }
            else
            {
                return false;
            }
        }
        function updateinfo($iduser)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                if(isset($_POST['update']))
                {
                    $name=$_REQUEST['tenkh'];
                    $diachi=$_REQUEST['diachi'];
                    $email=$_REQUEST['email'];
                    $sdt=$_REQUEST['sdt'];
                    $crecard=$_REQUEST['crecard'];
                    if($name==''||$diachi==''||$email==''||$sdt=='')
                    {
                        echo '<script>alert("Vui lòng nhập đầy đủ thông tin !")</script>';
                    }
                    else
                    {
                        $sql= "update khachhang set name=N'$name', diachi=N'$diachi', email='$email', sdt='$sdt', creditcard='$crecard' where username='$iduser'";
                        echo '<script>alert("Cập nhật thành công !")</script>';
                        echo '<script>window.location="myprofile.php";</script>';

                    }
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
        function updateinfoad($iduser)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');
            if($conn)
            {
                if(isset($_POST['update']))
                {
                    $name=$_REQUEST['name'];
                    $email=$_REQUEST['email'];
                    $sdt=$_REQUEST['sdt'];
                    if($name==''||$email==''||$sdt=='')
                    {
                        echo '<script>alert("Vui lòng nhập đầy đủ thông tin !")</script>';
                    }
                    else
                    {
                        $sql= "update admin set name=N'$name', email='$email', sdt='$sdt' where username='$iduser'";
                        echo '<script>alert("Cập nhật thành công !")</script>';
                        echo '<script>window.location="admin_profile.php";</script>';

                    }
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
        
    }
?>