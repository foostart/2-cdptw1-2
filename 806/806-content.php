<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-806">
    <!--Megamenu-->
    <div class="container">
        <nav class="navbar navbar-inverse">

            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!--nav-collapse -->
            <div class="collapse navbar-collapse ">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="../../module/fooproject3/Home.php" >HOME <b class="caret"></b></a>

                    </li>

                    <li class="dropdown mega-dropdown">
                        <a href="../fooproject3/Product.php">PRODUCTS <b class="caret"></b></a>	
                        <ul class="dropdown-menu mega-dropdown-menu">

                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Desktops</li>
                                    <li><a href="#">Smart Keyboard for iPad Pro</a></li>
                                    <li><a href="#">iMac</a></li>
                                    <li><a href="#">iPhone 6s</a></li>
                                    <li><a href="#">iPhone 6s Leather Case</a></li>
                                </ul>
                            </li>

                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Laptops</li>
                                    <li><a href="#">MacBook</a></li>
                                    <li><a href="#">MacBook Pro</a></li>
                                    <li><a href="#">MacBook Air</a></li>
                                    <li><a href="#">Silicone Case for iPad mini</a></li>
                                    <li><a href="#">iPad mini 4</a></li>
                                </ul>
                            </li>

                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Phones</li>
                                    <li><a href="#">Apple Accessories</a></li>
                                    <li><a href="#">iPad mini 4</a></li>
                                    <li><a href="#">iPad Pro</a></li>                            
                                    <li><a href="#">MacBook</a></li>
                                    <li><a href="#">Smart Cover for iPad mini 4</a></li>
                                </ul>
                            </li>

                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Tablets</li>
                                    <li><a href="#">iPhone 6s Leather Case</a></li>
                                    <li><a href="#">iPhone Lightning Dock - Gold</a></li>
                                    <li><a href="#">MacBook Air</a></li>
                                    <li><a href="#">Smart Keyboard for iPad Pro</a></li>
                                    <li><a href="#">iPad Air 2</a></li>                         
                                </ul>
                            </li>

                        </ul>	 			
                    </li>

                    <li class="dropdown mega-dropdown">
                        <a href="../fooproject3/Blog.php">BLOG <b class="caret"></b></a>				
                        <ul class="dropdown-menu mega-dropdown-menu"> 

                            <!--                            Item-->
                            <li class="col-sm-4">
                                <ul>
                                    <li  class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">                                                    
                                            <div class="item active">
                                                <a href="#"><img src="../806/images/blog_1_1024x1024.jpg" class="img-responsive" alt="product 1"></a>
                                                <h4><small>Monday, July 11, 2016</small></h4>   
                                                <h3 class="blog_title"><a href="#">We are providing a great choice of different commodities</a></h3>
                                                <button class="btn btn-primary" type="button">Read more</button>        
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> 
                            <!-- End Item -->

                            <!--Item -->
                            <li class="col-sm-4">
                                <ul>
                                    <li  class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="../806/images/blog_2_1024x1024.jpg" class="img-responsive" alt="product 1"></a>
                                                <h4><small>Monday, July 11, 2016</small></h4>
                                                <h3 class="blog_title"><a href="#">We can satisfy customers with different</a></h3> 
                                                <button class="btn btn-primary" type="button">Read more</button>
                                            </div>                                   
                                        </div>
                                    </li>
                                </ul>
                            </li> 
                            <!-- End Item -->

                            <!--Item -->
                            <li class="col-sm-4">
                                <ul>
                                    <li  class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="../806/images/blog_3_1024x1024.jpg" class="img-responsive" alt="product 1"></a>
                                                <h4><small>Monday, July 11, 2016</small></h4>
                                                <h3 class="blog_title"><a href="#">We can help you solve any problem because we provide only...</a></h3>
                                                <button class="btn btn-primary" type="button">Read more</button>        
                                            </div>
                                        </div>>
                                    </li>
                                </ul>
                            </li> 
                            <!-- End Item -->

                        </ul> 				
                    </li>

                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SALE <b class="caret"></b></a>				
                        <ul class="dropdown-menu mega-dropdown-menu"> 

                            <!-- Item -->
                            <li class="col-sm-3">
                                <ul>
                                    <li  class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="../806/images/logi_base_charging_stand_with_smart_connector_for_ipad_pro_1_large.png" class="img-responsive" alt="product 1"></a>
                                                <div class="product_name">
                                                    <a href="/products/logi-base-charging-stand-with-smart-connector-for-ipad-pro">Logi BASE Charging Stand with Smart Connector f...</a>
                                                </div>
                                                <div class="product_price">
                                                    <span class="money new-price">$266.00</span>
                                                    <span class="money compare-at-price">$390.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> 
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="col-sm-3">
                                <ul>
                                    <li class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="../806/images/ipod_nano_1_large.png" class="img-responsive" alt="product 1"></a>
                                                <div class="product_name">
                                                    <a href="/products/ipod-nano">iPod nano</a>
                                                </div>
                                                <div class="product_price">
                                                    <span class="money new-price">$150.00</span>
                                                </div>
                                            </div>
                                        </div>                                               
                                    </li>
                                </ul>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="col-sm-3">
                                <ul>
                                    <li  class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="../806/images/macbook_1_large.png" class="img-responsive" alt="product 1"></a>
                                                <div class="product_name">
                                                    <a href="/products/macbook">MacBook</a>
                                                </div>
                                                <div class="product_price">
                                                    <span class="money new-price">$1,029.00</span>
                                                    <span class="money compare-at-price">$1,139.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> 
                            <!--                             End Item -->

                            <!--                             Item  -->
                            <li class="col-sm-3">
                                <ul>
                                    <li  class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="../806/images/imac_1_large.png" class="img-responsive" alt="product 1"></a>                          
                                                <div class="product_name">
                                                    <a href="/products/imac">iMac</a>
                                                </div>
                                                <div class="product_price">
                                                    <span class="money new-price">$900.00</span>
                                                    <span class="money compare-at-price">$1,100.00</span>
                                                </div>
                                            </div>                                                                   
                                        </div>       
                                    </li>
                                </ul>
                            </li> 
                            <!-- End Item --> 

                        </ul>				 
                    </li>

                    <li class="dropdown"><a href="../../module/fooproject3/About.php">ABOUTUS</a></li>
                    <li class="dropdown"><a href="../../module/fooproject3/Contact.php">CONTACTUS</a></li>

                </ul>                   
            </div>
            <!-- /.nav-collapse -->

        </nav>
    </div>
    <!--End Megamenu-->
</div>
