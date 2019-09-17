<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-module-1655">
    <div class="container-main">
        <div class="container-fluid">
            <div class="block-banner">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <a class="banner">
                            <img src="http://<?php echo $url_path ?>/images/mf02-blockpromo-01.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <a class="banner">
                            <img src="http://<?php echo $url_path ?>/images/mf02-blockpromo-02.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="block-main-product">
                <div class="tab top-title">
                    <h2 class="title">Best Seller In The Last Month</h2>
                    <ul class="nav-menu nav nav-tabs pt-0 pb-3" style="border-bottom:none">
                        <li class="nav-item">
                            <a href="#TVTelevisions " data-toggle="tab" class="nav-link active">TV Televisions</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Spkears" data-toggle="tab" class="nav-link">Spkears</a>
                        </li>
                        <li class="nav-item">
                            <a href="#AirConditions" data-toggle="tab" class="nav-link">Air Conditions</a>
                        </li>
                        <li class="nav-item">
                            <a href="#CamerasVideos" data-toggle="tab" class="nav-link">Cameras & Videos</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane active" id="all" style="position: relative; overflow: hidden; height: 1076.47px; transition: height 250ms ease-out 0s;">
                    <div class="block-banner">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <a class="banner">
                                    <img src="http://<?php echo $url_path ?>/images/mf02-blockpromo-03.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>