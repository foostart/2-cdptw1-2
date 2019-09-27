<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-182">
    <div class="most-popular blocks-spacer">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="main-titles lined">
                        <h2 class="title"><span class="light">Most</span> Popular Products</h2>
                    </div>
                </div>
            </div>
            <div class="row popup-products">
                <div class="col-md-3">
                    <div class="product col-md-12">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/most-popular-products/popular-1.jpg" alt="" width="540" height="412"></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">$32</h4>
                                <h5 class="no-margin">Horsefeathers 169</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <div class="row-fluid hidden-line">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="col-md-6 align-right">
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

                <div class="col-md-3">
                    <div class="product col-md-12">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/most-popular-products/popular-2.jpg" alt="" width="540" height="412"></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">$32</h4>
                                <h5 class="no-margin">Horsefeathers 222</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <div class="row-fluid hidden-line">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="col-md-6 align-right">
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

                <div class="col-md-3">
                    <div class="product col-md-12">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/most-popular-products/popular-1.jpg" alt="" width="540" height="412"></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">$32</h4>
                                <h5 class="no-margin">Horsefeathers 166</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <div class="row-fluid hidden-line">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="col-md-6 align-right">
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

                <div class="col-md-3">
                    <div class="product col-md-12">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/most-popular-products/popular-2.jpg" alt="" width="540" height="412"></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">$32</h4>
                                <h5 class="no-margin">Horsefeathers 338</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <div class="row-fluid hidden-line">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="col-md-6 align-right">
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
                <div class="col-md-3">
                    <div class="product col-md-12">
                        <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="product.html"><img src="images/dummy/most-popular-products/popular-2.jpg" alt="" width="540" height="412"></a>
                                    <div class="img-overlay">
                                        <a href="product.html" class="btn more btn-primary">More</a>
                                        <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">$32</h4>
                                <h5 class="no-margin">Horsefeathers 338</h5>
                            </div>
                            <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            <div class="row-fluid hidden-line">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                    <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                </div>
                                <div class="col-md-6 align-right">
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
    </div>

</div>