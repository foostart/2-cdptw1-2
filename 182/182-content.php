
<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/350.css" rel="stylesheet" type="text/css" />
       
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/350.less', 'css/350.css');
        ?>

    </head>

    <body>
        <div class="type-350">
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
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
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
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star"></span>
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
                                            <a href="product.html"><img src="images/dummy/most-popular-products/popular-3.jpg" alt="" width="540" height="412"></a>
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
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star"></span>
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
                                            <a href="product.html"><img src="images/dummy/most-popular-products/popular-4.jpg" alt="" width="540" height="412"></a>
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
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>

</html>