<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-187">
    <div class="boxed">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-titles lined">
                        <h2 class="title"><span class="light">Related</span> Products</h2>
                    </div>
                </div>
            </div>
            <div class="row popup-products">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">

                                    <a href="#"><img src="images/product-1.png" alt="" ></a>
                                    <div class="img-overlay">
                                        <a class="btn more btn-primary" href="#">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title"><span class="striked">$32</span> <span class="red-clr">$29</span></h4>
                                <h5 class="no-margin">Adidas Converse 552</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <div class='rating-stars text-center'>
                                 <ul class='stars'>
                                   <li class='star' title='Poor' data-value='1'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Fair' data-value='2'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Good' data-value='3'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Excellent' data-value='4'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='WOW!!!' data-value='5'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                 </ul>
                             </div>
                        </div>
                    </div>  
                </div>   
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">

                                    <a href="#"><img src="images/product-2.png" alt="" ></a>
                                    <div class="img-overlay">
                                        <a class="btn more btn-primary" href="#">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title"><span class="striked">$32</span> <span class="red-clr">$29</span></h4>
                                <h5 class="no-margin">Adidas Converse 552</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <p class="center-align stars">
                            <div class='rating-stars text-center'>
                                 <ul class='stars'>
                                   <li class='star' title='Poor' data-value='1'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Fair' data-value='2'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Good' data-value='3'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Excellent' data-value='4'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='WOW!!!' data-value='5'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                 </ul>
                             </div>

                        </div>
                    </div>
                </div>  
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">

                                    <a href="#"><img src="images/product-1.png" alt="" ></a>
                                    <div class="img-overlay">
                                        <a class="btn more btn-primary" href="#">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title"><span class="striked">$32</span> <span class="red-clr">$29</span></h4>
                                <h5 class="no-margin">Adidas Converse 552</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <div class='rating-stars text-center'>
                                 <ul class='stars'>
                                   <li class='star' title='Poor' data-value='1'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Fair' data-value='2'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Good' data-value='3'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Excellent' data-value='4'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='WOW!!!' data-value='5'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                 </ul>
                             </div>
                        </div>
                    </div>
                </div>  
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">

                                    <a href="#"><img src="images/product-2.png" alt="" ></a>
                                    <div class="img-overlay">
                                        <a class="btn more btn-primary" href="#">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title"><span class="striked">$32</span> <span class="red-clr">$29</span></h4>
                                <h5 class="no-margin">Adidas Converse 552</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <div class='rating-stars text-center'>
                                 <ul class='stars'>
                                   <li class='star' title='Poor' data-value='1'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Fair' data-value='2'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Good' data-value='3'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Excellent' data-value='4'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='WOW!!!' data-value='5'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                 </ul>
                             </div>

                        </div>
                    </div>
                </div>  
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">

                                    <a href="#"><img src="images/product-2.png" alt="" ></a>
                                    <div class="img-overlay">
                                        <a class="btn more btn-primary" href="#">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title"><span class="striked">$32</span> <span class="red-clr">$29</span></h4>
                                <h5 class="no-margin">Adidas Converse 552</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <div class='rating-stars text-center'>
                                 <ul class='stars'>
                                   <li class='star' title='Poor' data-value='1'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Fair' data-value='2'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Good' data-value='3'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='Excellent' data-value='4'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                   <li class='star' title='WOW!!!' data-value='5'>
                                     <i class='fa fa-star fa-fw'></i>
                                   </li>
                                 </ul>
                             </div>

                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>