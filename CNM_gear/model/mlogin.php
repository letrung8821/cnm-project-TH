<?php
    //include_once('config.php');
    class mLogin
    {
        function dangnhap($user,$pass)
        {
            $conn=mysqli_connect('localhost','root','','gear');
		    mysqli_set_charset($conn ,'utf8');

            if($conn)
            {
                if(isset($_POST['Dnhap']))
                {
                    $user=$_POST['user'];
                    $pass=sha1($_POST['pass']);
                    $sql = "select * from taikhoan where username='$user' and password='$pass' LIMIT 1";
                    $qr = mysqli_query($conn, $sql);
                    if($qr)
                    {
                        if(mysqli_num_rows($qr)==1)
                        {
                            session_start();
                            session_regenerate_id();
                            $re = mysqli_fetch_assoc($qr);
                            $_SESSION['ID'] = $re['username'];
                            $_SESSION['vt'] = $re['role'];
                            echo '<script>alert("Login Success!")</script>';
                            if($_SESSION['vt'] =='KH')
                            {
                                header("location: index.php");	
                            }
                            elseif($_SESSION['vt'] == 'admin')
                            {
                                header("location: ../Admin/index.php");
                            }
                        }
                        else
                        {
                            echo '<p style="color: red; text-align: center;">Username or Password is wrong!</p>';
                        }
                    }
                    else
                    {
                        echo mysqli_error($conn);
                    }
                }
                //return $qr;
                mysqli_close($conn);
            }
            else
            {
                echo 'Query Failed!';
                //return false;
            }
        }
    }
?>