<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/355.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/355.less', 'css/355.css');
        ?>
       
        <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>       
        <script src="js/thumb.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>

    </head>

    <body>
        <div class="type-355">
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
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">

                                            <a href="#"><img src="images/product-3.png" alt="" ></a>
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

                                            <a href="#"><img src="images/product-4.png" alt="" ></a>
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
    </body>

</html>