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

<div class="type-1930">
     <div class="container">
        <!--FEATURED PRODUCTS-->
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-3 col-xs-6">
                <h3 class="title">FEATURED PRODUCTS</h3>
            </div>   
        </div>
        <div class="clear"></div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="item active swiper-slide">
                    <div class="row ">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/1-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/2-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/3-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/4-buy.png" alt=""/>
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
                <div class="item active swiper-slide">
                    <div class="row ">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/5-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/6-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/7-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/8-buy.png" alt=""/>
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
                <div class="item active swiper-slide">
                    <div class="row ">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/1-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/2-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/3-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/4-buy.png" alt=""/>
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
                <div class="item active swiper-slide">
                    <div class="row ">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/5-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/6-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/7-buy.png" alt=""/>
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center ">
                            <div class="col-item">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="images/8-buy.png" alt=""/>
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
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- footer -->
        <section class="hg_section bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="text-center">
                            <a href="#" class="bottom1 ">
                                <h6>SEE ALL NEW PRODUCTS OF THIS YEAR</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
    </div>
</div>            
  
            

            
       

    
    
