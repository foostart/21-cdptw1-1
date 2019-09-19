<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1933">
    <div class="box-menu menu fix-menu box-white navbar-fixed mt-4">
        <div class="container-main">
            <div class="container-fuild">
            <div class="row align-items-center">
                    <div class="col-3 d-none d-md-block vertical-menu">
                        <nav class="navbar navbar-expand-lg navbar-light w-100 pt-0 pb-0">
                            <div class="collapse navbar-collapse text-dark scroll-blog" id="navbarNavDropdown">
                                <ul class="navbar-nav w-100 justify-content-between">
                                    <li class="nav-item text-dark pt-2 pb-2">
                                        
                                        <a href="" class="nav-link parent-menu">
                                            <i class="fas fa-align-justify pr-2"></i>
                                            Shop By Department 
                                            <i class="fas fa-angle-down ml-2"></i>
                                        </a>
                                        <ul class="dropdown-menu  rounded-0 border-0">
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu" >Consumer Electric</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Organic</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Home, Garden & Kitchen</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Clothing & Apparel</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Jewelry & Watches</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Computers & Technologies</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Babies & Moms</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Sport & Outdoor</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Phones & Accessories</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Health & Beauty</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1">
                                                <a href="" class="nav-link parent-menu">Books & Office</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-9 col-md-9 col-lg-6 d-none d-md-block pl-4">
                        <nav class="navbar navbar-expand-lg navbar-light w-100 pt-0 pb-0">
                            <div class="collapse navbar-collapse text-dark scroll-blog" >
                                <ul class="navbar-nav w-100 justify-content-between">
                                    <li class="nav-item text-dark pt-2 pb-2">
                                        <a href="" class="nav-link parent-menu pr-0 pl-0">Home Layout
                                            <i class="fas fa-angle-down ml-2"></i>
                                        </a>
                                        <ul class="dropdown-menu  rounded-0 border-0">
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu" >Marfury v01 - Marketplace</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Marfury v02 - Electronic</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Marfury v03 - Organic</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Marfury v04 - Furniture</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Marfury v05 - Market</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1">
                                                <a href="" class="nav-link parent-menu">Marfury v05 - FullWidth</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item text-dark pt-2 pb-2">
                                        <a href="" class="nav-link parent-menu pr-0 pl-0">Category
                                        <i class="fas fa-angle-down ml-2"></i>
                                        </a>
                                        <ul class="dropdown-menu  rounded-0 border-0">
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu" >Category View - Grid</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1">
                                                <a href="" class="nav-link parent-menu">Category View - List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item text-dark pt-2 pb-2">
                                        <a href="" class="nav-link parent-menu pr-0 pl-0">Product
                                        <i class="fas fa-angle-down ml-2"></i>
                                        </a>
                                        <ul class="dropdown-menu  rounded-0 border-0">
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu" >Simple Product</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Configurable Product</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Group Product</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Bundle Product</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Tier Product</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1">
                                                <a href="" class="nav-link parent-menu">Dowloadable Product</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item text-dark pt-2 pb-2">
                                        <a href="" class="nav-link parent-menu pr-0 pl-0">Blog
                                            <i class="fas fa-angle-down ml-2"></i>
                                        </a>
                                        <ul class="dropdown-menu  rounded-0 border-0">
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu" >Bussiness</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" style="border-bottom: 1px solid #ccc">
                                                <a href="" class="nav-link parent-menu">Technology</a>
                                            </li>
                                            <li class="nav-item text-dark pt-1 pb-1" >
                                                <a href="" class="nav-link parent-menu">Fashion</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item text-dark pt-2 pb-2">
                                        <a href="" class="nav-link parent-menu pr-0 pl-0">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-12 col-md-3 d-none d-lg-block">
                        <div class="hotline-top">
                            <i class="fas fa-phone"></i>
                            <span> Hotline: 
                                <strong>1-800-234-5678</strong>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>