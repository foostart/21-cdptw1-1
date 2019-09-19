<!DOCTYPE html>
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
?>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<html style="background-color: #f3f3f4;">

    <body>
    <div class="type-b-9">
        <div class="container">
            <!--FEATURED PRODUCTS-->
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                        <h3 class="title">FEATURED PRODUCTS</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <!-- Controls -->
                        <div class="controls pull-right">
                            <a class="left fa fa-chevron-left btn btn-info" href="#carousel-example" data-slide="prev"></a>
                            <a class="right fa fa-chevron-right btn btn-info" href="#carousel-example" data-slide="next"></a>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>
            <div class="swiper-container">
   
                <div id="carousel-example" class="carousel slide swiper-wrapper" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner ">
                        <div class="item active swiper-slide">
                            <div class="row ">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center ">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="detail">
                                                <h3 class="detail-title">Black Kaviar Longline Shirt</h3>
                                                <p class="detail-desc">
                                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.                               
                                                </p>
                                                <span class="price">
                                                    <span class="amount">£20.00</span>
                                                </span>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="detail">
                                                <h3 class="detail-title">Black Kaviar Longline Shirt</h3>
                                                <p class="detail-desc">
                                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.                               
                                                </p>
                                                <span class="price">
                                                    <span class="amount">£20.00</span>
                                                </span>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="detail">
                                                <h3 class="detail-title">Black Kaviar Longline Shirt</h3>
                                                <p class="detail-desc">
                                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.                               
                                                </p>
                                                <span class="price">
                                                    <span class="amount">£20.00</span>
                                                </span>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="detail">
                                                <h3 class="detail-title">Black Kaviar Longline Shirt</h3>
                                                <p class="detail-desc">
                                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.                               
                                                </p>
                                                <span class="price">
                                                    <span class="amount">£20.00</span>
                                                </span>
                                            </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="detail">
                                                <h3 class="detail-title">Black Kaviar Longline Shirt</h3>
                                                <p class="detail-desc">
                                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.                               
                                                </p>
                                                <span class="price">
                                                    <span class="amount">£20.00</span>
                                                </span>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="detail">
                                                <h3 class="detail-title">Black Kaviar Longline Shirt</h3>
                                                <p class="detail-desc">
                                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.                               
                                                </p>
                                                <span class="price">
                                                    <span class="amount">£20.00</span>
                                                </span>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            
        </div>

        <section class="hg_section pbottom-65">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="text-center">
                            <a href="#" class="btn-element btn btn-lined lined-dark btn-md btn-third">
                                <span>SEE ALL NEW PRODUCTS OF THIS YEAR</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>              
    </div>   
            

            
       

    <script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    </body>

</html>