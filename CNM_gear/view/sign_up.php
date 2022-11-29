<?php
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/favicon.ico"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/sign_up.css">
    <title>GGI | Đăng ký</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-5">
         <div class="card">
           <h2 class="card-title text-center">Register</h2>
            <div class="card-body py-md-4">
              <?php
                include_once('../controller/cdki.php');
                $p=new cdki();
                if(isset($_POST['dki']))
                {
                  $matk= $_POST['username'];
                  $ten= $_POST['name'];
                  $diachi= $_POST['diachi'];
                  $email= $_POST['email'];
                  $sdt= $_POST['sdt'];
                  $mk= $_POST['password'];
                  $remk = $_POST['conf_pass'];
                  if($mk != $remk)
                  {
                    echo 'Mật khẩu không khớp';
                  }
                  else
                  {
                    $p->reTK();
                    $p->upTK();
                  }
                }
              ?>
             <form _lpchecked="1" action="" method="post">
                <div class="form-group">
                   <input type="text" class="form-control" name="username" id="username" placeholder="Username">
              </div>
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="diachi" id="diachi" placeholder="Address">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="sdt" id="sdt" placeholder="Phone Number">
            </div>                                  
         <div class="form-group">
           <input type="password" class="form-control" name="password" id="password" placeholder="Password">
         </div>
         <div class="form-group">
            <input type="password" class="form-control" name="conf_pass" id="conf_pass" placeholder="confirm-password">
         </div>
         <div class="d-flex flex-row align-items-center justify-content-between">
            <a href="login_form.php"><input type="button" class="btn btn-info" value="Login"></a>
                    <button name="dki" class="btn btn-primary">Create Account</button>
                </div>
             </form>
           </div>
        </div>
      </div>
      </div>
      </div>
</body>
</html>