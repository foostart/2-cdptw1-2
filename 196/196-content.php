<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!-- Swiper -->
<div class="type-196">
    <div class="banner">
        <div class="container">
            <div class="swiper-container">
                <h3>BRANDS
                </h3>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="block">
                            <div class="image">
                                <img src="images/custom_brand1_img.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block">
                            <div class="image">
                                <img src="images/custom_brand1_img.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block">
                            <div class="image">
                                <img src="images/custom_brand1_img.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block">
                            <div class="image">
                                <img src="images/custom_brand1_img.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block">
                            <div class="image">
                                <img src="images/custom_brand1_img.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block">
                            <div class="image">
                                <img src="images/custom_brand1_img.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                </div><br> 
                <div class="swiper-pagination"></div><br>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>   
</div>

