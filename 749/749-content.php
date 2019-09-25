<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-749">
    <div class="bg-749">
	<div class="container plr-0">
        <header class="header">
            <div class="header-top">
                <div class="logo col-md-6 col-lg-6 col-sm-3 col-xs-3">
                    <a href="#"><i class="fa fa-home"></i>Reales</a>
                </div>
                <div class="menu-top-right col-md-6 col-lg-6 col-sm-9 col-xs-9">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Sign In</a></li>
                        <li class="list"><a href="#">List A Property</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-content text-center">
                <h3 class="title">Now it's easy find your future home</h3>
                <h5 class="sub-title">With reales - real estate template</h5>
                <div class="btn"><a href="#">Learn more</a></div>
            </div>
            <div class="find">     
            </div><!-- End Find -->
             </header>
            </div>
             
            <div class="panel-find">
                <h3 class="panel-title">Find Your New Place With Reales</h3>
                <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem.Aenean vitae nulla varius, dictum nisi non, rhoncus sem</p>
            </div>
        </div> 
        <!-- End Panel Find -->
        <div class="container">
        <div class="service">
            <div class="container">
                <h3 class="title">Our Services</h3>
                <div class="items">
                    <div class="col-md-3 col-sm-6 col-xs-12 item">
                        <span><i class="fa fa-home"></i></span>
                        <h3 class="item-title">Find Place anywhere in the world</h3>
                        <p class="item-content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item">
                        <span><i class="fa fa-home"></i></span>
                        <h3 class="item-title">Find Place anywhere in the world</h3>
                        <p class="item-content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item">
                        <span><i class="fa fa-home"></i></span>
                        <h3 class="item-title">Find Place anywhere in the world</h3>
                        <p class="item-content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item">
                        <span><i class="fa fa-home"></i></span>
                        <h3 class="item-title">Find Place anywhere in the world</h3>
                        <p class="item-content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non</p>
                    </div>
                </div>
            </div>
        </div><!-- End Service -->
        <div class="recently">
            <div class="container">
                <h3 class="title">Recently Listed Properties</h3>
                <div class="items">
                    <div class="col-md-4 col-sm-6 col-xs-12 item">
                        <img alt="" class="img-responsive" src="images/research-3-770x434.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item">
                        <img alt="" class="img-responsive" src="images/research-4-770x434.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item">
                        <img alt="" class="img-responsive" src="images/research-5-770x434.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item">
                        <img alt="" class="img-responsive" src="images/research-3-770x434.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item">
                        <img alt="" class="img-responsive" src="images/research-4-770x434.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item">
                        <img alt="" class="img-responsive" src="images/research-5-770x434.jpg">
                    </div>
                </div>
            </div>
        </div><!-- End Recently -->
        <div class="agents">
            <div class="container">
                <h3 class="title">Our Agents</h3>
                    <!-- Item -->
                    <div class="item col-md-3 col-sm-6 col-xs-12">
                        <div class="img">
                            <a><img src="images/image1.jpg" alt=""/></a>
                        </div>
                        <p class="name">John Smith</p>
                        <div class="stars">
                                  <form>
                                    <input class="star star-10" id="star-5" type="radio" name="star"/>
                                    <label class="star star-10" for="star-5"></label>
                                    <input class="star star-9" id="star-4" type="radio" name="star"/>
                                    <label class="star star-9" for="star-4"></label>
                                    <input class="star star-8" id="star-3" type="radio" name="star"/>
                                    <label class="star star-8" for="star-3"></label>
                                    <input class="star star-7" id="star-2" type="radio" name="star"/>
                                    <label class="star star-7" for="star-2"></label>
                                    <input class="star star-6" id="star-1" type="radio" name="star"/>
                                    <label class="star star-5" for="star-1"></label>
                                  </form>
                                </div>
                        <ul class="list-unstyled list-inline link">
                            <li><a class="envelope" href="#"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="google" href="#"><i class="fa  fa-google-plus"></i></a></li>
                        </ul>
                    </div><!-- End Item -->
                    <!-- Item -->
                    <div class="item col-md-3 col-sm-6 col-xs-12">
                        <div class="img">
                            <a><img src="images/image2.jpg" alt=""/></a>
                        </div>
                        <p class="name">Jane Smith</p>
                        <div class="stars">
                                  <form>
                                    <input class="star star-10" id="star-10" type="radio" name="star"/>
                                    <label class="star star-10" for="star-10"></label>
                                    <input class="star star-9" id="star-9" type="radio" name="star"/>
                                    <label class="star star-9" for="star-9"></label>
                                    <input class="star star-8" id="star-8" type="radio" name="star"/>
                                    <label class="star star-8" for="star-8"></label>
                                    <input class="star star-7" id="star-7" type="radio" name="star"/>
                                    <label class="star star-7" for="star-7"></label>
                                    <input class="star star-6" id="star-6" type="radio" name="star"/>
                                    <label class="star star-6" for="star-6"></label>
                                  </form>
                                </div>
                        <ul class="list-unstyled list-inline link">
                            <li><a class="envelope" href="#"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="google" href="#"><i class="fa  fa-google-plus"></i></a></li>
                        </ul>
                    </div><!-- End Item -->
                    <!-- Item -->
                    <div class="item col-md-3 col-sm-6 col-xs-12">
                        <div class="img">
                            <a><img src="images/image3.jpg" alt=""/></a>
                        </div>
                        <p class="name">Rust Cohle</p>
                        <div class="stars">
                                  <form>
                                    <input class="star star-10" id="star-11" type="radio" name="star"/>
                                    <label class="star star-10" for="star-11"></label>
                                    <input class="star star-9" id="star-12" type="radio" name="star"/>
                                    <label class="star star-9" for="star-12"></label>
                                    <input class="star star-8" id="star-13" type="radio" name="star"/>
                                    <label class="star star-8" for="star-13"></label>
                                    <input class="star star-7" id="star-14" type="radio" name="star"/>
                                    <label class="star star-7" for="star-14"></label>
                                    <input class="star star-6" id="star-15" type="radio" name="star"/>
                                    <label class="star star-6" for="star-15"></label>
                                  </form>
                                </div>
                        <ul class="list-unstyled list-inline link">
                            <li><a class="envelope" href="#"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="google" href="#"><i class="fa  fa-google-plus"></i></a></li>
                        </ul>
                    </div><!-- End Item -->
                    <!-- Item -->
                    <div class="item col-md-3 col-sm-6 col-xs-12">
                        <div class="img">
                            <a><img src="images/image4.jpg" alt=""/></a>
                        </div>
                        <p class="name">Antony Iglesias</p>
                        <div class="stars">
                                  <form action="#"  method="GET">
                                    <input class="star star-10" id="star-16" type="radio" name="star"/>
                                    <label class="star star-10" for="star-16"></label>
                                    <input class="star star-9" id="star-17" type="radio" name="star"/>
                                    <label class="star star-9" for="star-17"></label>
                                    <input class="star star-8" id="star-18" type="radio" name="star"/>
                                    <label class="star star-8" for="star-18"></label>
                                    <input class="star star-7" id="star-19" type="radio" name="star"/>
                                    <label class="star star-7" for="star-19"></label>
                                    <input class="star star-6" id="star-20" type="radio" name="star"/>
                                    <label class="star star-6" for="star-20"></label>
                                  </form>
                                </div>
                        <ul class="list-unstyled list-inline link">
                            <li><a class="envelope" href="#"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="google" href="#"><i class="fa  fa-google-plus"></i></a></li>
                        </ul>
                    </div><!-- End Item -->
                </div>
            </div>
        </div><!-- End Agents -->
        <!-- Testimonials -->
        <div class="container">
            <h3 class="title-testimonials">Testimonials</h3>
            <div class="swiper-container testimonials">
                <div class="swiper-wrapper">
                    <div class="swiper-slide list-inline">
                        <a href="#">
                            <img src="images/image2.jpg" alt=""/>
                        </a>
                        <div class="content-slide-show">
                            <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem.Aenean vitae nulla varius, dictum nisi non, rhoncus sem</p>
                            <h3 class="name">Jane Smith</h3>
                        </div>
                    </div>
                    <div class="swiper-slide list-inline">
                        <a href="#">
                            <img src="images/image1.jpg" alt=""/>
                        </a>
                        <div class="content-slide-show">
                            <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem.Aenean vitae nulla varius, dictum nisi non, rhoncus sem</p>
                            <h3 class="name">John Smith</h3>
                        </div>
                    </div>
                    <div class="swiper-slide list-inline">
                        <a href="#">
                            <img src="images/image3.jpg" alt=""/>
                        </a>
                        <div class="content-slide-show">
                            <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem.Aenean vitae nulla varius, dictum nisi non, rhoncus sem</p>
                            <h3 class="name">Rust Cohle </h3>
                        </div>
                    </div>
                    <div class="swiper-slide list-inline">
                        <a href="#">
                            <img src="images/image4.jpg" alt=""/>
                        </a>
                        <div class="content-slide-show">
                            <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem.Aenean vitae nulla varius, dictum nisi non, rhoncus sem</p>
                            <h3 class="name">Antony Iglesias</h3>
                        </div>
                    </div>
                    
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div><!-- End Testimonials -->
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 pt-20">
                        <div class="footer-info">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Policies</a></li>
                                <li><a href="#">Terms & Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 pt-20">
                        <div class="footer-info">
                            <h3>Discover</h3>
                            <ul>
                                <li><a href="#">Become a Menber</a></li>
                                <li><a href="#">Properties List</a></li>
                                <li><a href="#">Sign up</a></li>
                                <li><a href="#">Widgets</a></li>
                                <li><a href="#">Components</a></li>
                                <li><a href="#">Tables</a></li>
                                <li><a href="#">Lists</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 pt-20">
                        <div class="footer-info">
                            <h3>Get In Touch</h3>
                            <span><i class="fa fa-phone"></i>800 234 67 89</span>
                            <p class="mt-10">516 Green st</p>
                            <p>San Francisso, CA 91634</p>
                            <p>United States</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 pt-20">
                        <div class="footer-info">
                            <h3>Subscribe To Our Newsletter</h3>
                            <input class="input-sm mail" type="text" name="email" placeholder="Email Address">
                            <span class="subs text-center"><a>Subscribe</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <p class="mb-0">Real estate web application</p>
                            <p>© 2014</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    </div>
