<?php
    require_once './commons/constants.php';
    require_once './commons/db.php';
    require_once './commons/helpers.php';

    $id = isset($_GET['id']) ? $_GET['id'] : -1;
    $sqlQuery = "select * from products where id = $id";
    $product = executeQuery($sqlQuery);
    
    if(!$product){
        header('location: ' . BASE_URL);
        die;
    }

    $galleryQuery = "select * from product_galleries where product_id = $id";
    $galleries = executeQuery($galleryQuery, true);
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from massive.markup.themebucket.net/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:55:09 GMT -->
<head>
    <base href="<?php echo BASE_URL . "public/"; ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Shop single</title>

    <!--common style-->
    <link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>

    <?php include_once './_share/style.php'; ?>
</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

       <?php include_once './_share/header.php'; ?>


        <!--page title start-->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-uppercase">Shop Single</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Product</a>
                            </li>
                            <li class="active">Shop Single</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="post-list-aside">
                                <div class="post-single">
                                    <div class="post-slider-thumb post-img text-center">
                                        <ul class="slides">
                                            <?php foreach ($galleries as $item): ?>
                                                
                                            <li data-thumb="<?php echo $item['url'] ?>">
                                                <a href="javascript:;" title="Freshness Photo">
                                                    <img src="<?php echo $item['url'] ?>" alt="" />
                                                </a>
                                            </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="product-title">
                                <h2 class="text-uppercase"><?php echo $product['name'] ?></h2>
                            </div>

                            <div class="product-price txt-xl">
                                <span class="border-tb p-tb-10"> <?php echo number_format($product['sale_price'], 0, '', ','); ?>đ <del><?php echo number_format($product['price'], 0, '', ','); ?>đ</del></span>
                            </div>

                            <ul class="portfolio-meta m-bot-10 m-top-10">
                                <li><span> Item No </span> <?php echo $product['sku'] ?></li>
                                <li><span> Condition </span> New</li>
                            </ul>
                            <p>
                                <?php echo $product['detail'] ?>
                            </p>

                            <ul class="portfolio-meta m-bot-10 stock">
                                <li><span><strong class="number-item"> 390</strong> Item </span>  <span class="status">In Stock</span>
                                </li>
                            </ul>
                            <div class="p-values">
                                <ul class="portfolio-meta m-bot-10 ">
                                    <li>
                                        <span> Size </span>
                                        <span>
                                            <select class="form-control">
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                        </span>
                                    </li>
                                </ul>
                                <ul class="p-quantity m-bot-10 ">
                                    <li>
                                        <label>Quantity</label>
                                    </li>
                                    <li>
                                        <input id="demo0" type="text" value="0" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500"
                                        data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default"
                                        data-bts-button-up-class="btn btn-default" />
                                    </li>

                                    </li>
                                </ul>
                            </div>

                            <div class="clearfix">
                                <a href="#" class="btn btn-medium btn-dark-solid  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="row page-content">
                        <div class="col-md-12">
                            <!--tabs border start-->
                            <section class="normal-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab-one">More Info</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#tab-two">Specification</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#tab-three">Review (2)</a>
                                    </li>

                                </ul>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div id="tab-one" class="tab-pane active">
                                            <h4 class="text-uppercase">Product Description</h4>
                                            Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent
                                            elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis
                                            scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet
                                            diam, congue laoreet elit metus eget diam. Proin ac metus diam.
                                        </div>
                                        <div id="tab-two" class="tab-pane">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Size</td>
                                                        <td>Small, Medium, Large &amp; Extra Large</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Color</td>
                                                        <td>Read, Blue, Green &amp; Black</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chest</td>
                                                        <td>38 inches</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Waist</td>
                                                        <td>20 cm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Length</td>
                                                        <td>35 cm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fabric</td>
                                                        <td>Cotton, Silk &amp; Synthetic</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Warranty</td>
                                                        <td>6 Months</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div id="tab-three" class="tab-pane">
                                            <ul class="media-list comments-list clearlist">

                                                <!-- comment item start-->
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object review-avatar" src="assets/img/post/a1.png" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="comment-info">
                                                            <div class="reviewer text-uppercase">
                                                                <a href="#">John Doe</a>
                                                            </div>
                                                            July 5, 2015, at 1:20
                                                            <span class="review-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>

                                                        <p>
                                                            Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.
                                                        </p>
                                                    </div>
                                                </li>
                                                <!-- comment item end -->

                                                <!-- comment item -->
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object review-avatar" src="assets/img/post/a1.png" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="comment-info">
                                                            <div class="reviewer text-uppercase">
                                                                <a href="#">Margarita Smith</a>
                                                            </div>
                                                            July 5, 2015, at 1:30
                                                            <span class="review-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>

                                                        <p>
                                                            Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo..
                                                        </p>
                                                    </div>
                                                </li>
                                                <!-- comment item end -->

                                            </ul>

                                            <!--add review start-->
                                            <div class="heading-title-alt text-left heading-border-bottom">
                                                <h4 class="text-uppercase">ADD REVIEW</h4>
                                            </div>

                                            <form method="post" action="#" id="form" role="form" class="blog-comments">

                                                <div class="row">

                                                    <div class="col-md-6 form-group">
                                                        <!-- Name -->
                                                        <input type="text" name="name" id="name" class=" form-control" placeholder="Name *" maxlength="100" required="">
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <!-- Email -->
                                                        <input type="email" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100" required="">
                                                    </div>


                                                    <div class="form-group col-md-12">
                                                        <select class="form-control">
                                                            <option value="">Rating -- Select One --</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>

                                                    <!-- Comment -->
                                                    <div class="form-group col-md-12">
                                                        <textarea name="text" id="text" class=" form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
                                                    </div>

                                                    <!-- Send Button -->
                                                    <div class="form-group col-md-12">
                                                        <button type="submit" class="btn btn-small btn-dark-solid ">
                                                            Submit Review
                                                        </button>
                                                    </div>


                                                </div>

                                            </form>
                                            <!--add review end-->

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--tabs border end-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="heading-title-alt text-left ">
                                <h3 class="text-uppercase">similar items </h3>
                                <span class="text-uppercase">We have 14 similar product currently in stock</span>
                            </div>

                            <!--portfolio carousel-->

                            <div id="portfolio-carousel" class=" portfolio-with-title col-3 ">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/product/1.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/product/1.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/product/1.jpg" class="popup-link" title="lightbox view">CROPPED SKINNY ISA JEANS</a></h4>
                                        <p class="txt-xl">$59.00</p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/product/2.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/product/2.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/product/2.jpg" class="popup-link" title="lightbox view">denouncing pleasure</a></h4>
                                        <p class="txt-xl">$49.00</p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/product/3.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/product/3.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/product/3.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
                                        <p class="txt-xl">$69.00</p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/product/4.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/product/4.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/product/4.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
                                        <p class="txt-xl">$79.00</p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/product/5.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/product/5.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/product/5.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
                                        <p class="txt-xl">$69.00</p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/product/6.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/product/6.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/product/6.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
                                        <p class="txt-xl">$59.00</p>
                                    </div>
                                </div>

                            </div>

                            <!--portfolio carousel-->

                        </div>
                    </div>
                </div>
            </div>

            <!--subscribe start-->
            <div class="subscribe-box gray-bg ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subscribe-info">
                                <h4 class=" ">DON’T WANNA PURCHASE NOW? </h4>
                                <span class=" ">subscribe to get in touch </span>
                            </div>
                            <div class="subscribe-form">
                                <form class="form-inline">
                                    <input type="text" class="form-control" placeholder="Enter your email address">
                                    <button type="submit" class="btn btn-medium btn-rounded btn-dark-solid text-uppercase">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--subscribe end-->

        </section>
        <!--body content end-->

        <!--footer start 1-->
        <footer id="footer" class="dark">
            <div class="primary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="m-bot-20 footer-logo">
                                <img class="retina" src="assets/img/logo-dark.png" alt="" />
                            </a>
                            <p>Massive is fully responsible, performance oriented and SEO optimized, retina ready WordPress theme.</p>

                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">recent posts</h5>
                            <ul class="f-list">
                                <li><a href="#">Standard Blog post</a>
                                </li>
                                <li><a href="#">Quotation post</a>
                                </li>
                                <li><a href="#">Audio Post</a>
                                </li>
                                <li><a href="#">Massive Video Demo</a>
                                </li>
                                <li><a href="#">Blog Image Post</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">quick link</h5>
                            <ul class="f-list">
                                <li><a href="#">About Massive</a>
                                </li>
                                <li><a href="#">Career</a>
                                </li>
                                <li><a href="#">Terms & Condition</a>
                                </li>
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">Recent Work</h5>
                            <ul class="r-work">
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/1.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/2.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/3.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/4.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/5.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/6.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/7.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/8.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/9.jpg" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="secondary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="m-top-10">Copyright 2012 - 2015 Massive Theme by <a href="http://themebucket.net/" class="f-link" target="_blank">ThemeBucket</a> | All Rights Reserved</span>
                        </div>
                        <div class="col-md-6">
                            <div class="social-link circle pull-right">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer 1 end-->

    </div>


    <?php include_once './_share/script.php'; ?>
    <script>
        $("input[name='demo0']").TouchSpin({});
    </script>
</body>


<!-- Mirrored from massive.markup.themebucket.net/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:55:09 GMT -->
</html>
