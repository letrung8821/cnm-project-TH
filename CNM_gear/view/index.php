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
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Services  -->
    <div class="services-box-main">
        <div class="container">
                
            <a href="add_blog.php">
                <div class="btn btn-primary" style="float:right; padding: 10px; margin-top:20px;">
                    <p>Tạo bài viết</p> 
                </div> 
            </a>
                <div class="row my-5">
                    <?php
                        $showbl = $p->show_prodBL();
                            if(mysqli_num_rows($showbl)>0)
                            {
                                while($showedbl = mysqli_fetch_assoc($showbl))
                                    {
                                    ?>
                                        <div class="col-md-4">
                                            <div class="service-block-inner">
                                                <h3><a href="exblog.php?blog=<?php echo $showedbl ['id_blog']?> "><?php echo $showedbl ['tieude']?></a> </h3>
                                                <h5>Tittle:    <?php echo  $showedbl ['chuyenmuc']?></h5>                                                
                                            </div>
                                        </div>
                                <?php
                            }
                        }
                        else
                        {
                            echo 'Không có bài viết nào !';
                        }
                    ?>   
                    
                </div>
    <?php
        include('footer.php');
    ?>
</body>

</html>