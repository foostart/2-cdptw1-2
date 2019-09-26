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
                <div class="col-md-3">
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
                            <div class="stars">                              
                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                    <label class="star star-1" for="star-1"></label>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="col-md-3">
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
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star"></span>
                            </p>
                        </div>
                    </div>
                </div>  
                <div class="col-md-3">
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
                            <p class="center-align stars">
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star"></span>
                            </p>
                        </div>
                    </div>
                </div>  
                <div class="col-md-3">
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
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star stars-clr"></span>
                                <span class="fa fa-star"></span>
                            </p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>