<?php
    include('header.php');
    include('../controller/cbl.php');
    $p=new cBL();
    
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
    <title>GGI || Blog</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

</head>

<body>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Services</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                        <li class="breadcrumb-item active">Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Services  -->
    <div class="services-box-main">
        <div class="container">
            <div class="jumbotron">
                    <hr>
                    <?php
                        $showbl = $p->deBL($_GET['blog']);
                            if(mysqli_num_rows($showbl)>0)
                            {
                                while($showedbl = mysqli_fetch_assoc($showbl))
                                    {
                                    ?>
                                        <p style="text-align: right;">Người tạo: <?php echo $showedbl ['id_admin']?></p>
                                        <h2><?php echo $showedbl ['tieude']?></h2>
                                        <p>Nội dung: <br><?php echo $showedbl ['noidung']?></p><br>  
                                                 
                                        <hr>
                                        <h4>Bình luận:</h4>
                                        <p>Chưa có bình luận nào!</p>
                                <?php
                            }
                        }
                        else
                        {
                            echo 'Không có bài viết nào !';
                        }
                    ?>   
            </div>
                     
        </div>
    </div>
            
    <!-- End Services -->
    <?php
        include('footer.php');
    ?>
</body>

</html>