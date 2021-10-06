<?php require('top.php')?>
<div class="body__overlay"></div>

        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                        <div class="slider__inner">
                                            <h2 style="color:black;">WELCOME TO THE</h2>
                                            <h1 style="color:black;">MB MEDI LIFE SCIENCES</h1>
                                            <div class="cr__btn">
                                            <a href="offer.php">Offer <sup style="color:red;">New</sup></a>
                                        </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/banner/big-img/medi 2.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                 <!-- Start Single Slide -->
                 <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                        <div class="slider__inner">
                                            <h2 style="color:black;">WELCOME TO THE</h2>
                                            <h1 style="color:black;">MU BIO TECH</h1>
                                            <div class="cr__btn">
                                            <a href="offer.php">Offer <sup style="color:red;">New</sup></a>
                                        </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/banner/big-img/medi 2.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>

        <!-- Start hover Area -->
    <section class="features-categories">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="./images/other/31.jpg" alt="category">
                </div>
                <div class="col-md-4">
                    <img src="./images/product/Product/11.jpg" alt="category">
                </div>
                <div class="col-md-4">
                    <img src="./images/product/Product/12.jpg" alt="category">
                </div>
            </div>
    </section>
    

        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    <div class="title-box">
                        <h2>Syrups</h2>
                    </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
							<?php
							$get_product=get_product($conn,4);
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb ">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
										<ul class="product__action">
											<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
											<li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')"><i class="icon-handbag icons"></i></a></li>
										</ul>
									</div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html"><?php echo $list['name']?></a></h4>
                                        <ul class="fr__pro__prize ">
                                            <li class="old__prize">M.R.P &#x20B9;<?php echo $list['mrp']?></li>
                                            <li> Price &#x20B9;<?php echo $list['price']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    <div class="title-box">
                        <h2>Medicines & Creams</h2>
                    </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
							<?php
							$get_product=get_product($conn,4,'','','','','yes');
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-10">
                                <div class="category">
                                    <div class="ht__cat__thumb ">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
										<ul class="product__action ">
											<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
											<li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')"><i class="icon-handbag icons"></i></a></li>
										</ul>
									</div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html"><?php echo $list['name']?></a></h4>
                                         <ul class="fr__pro__prize">
                                            <li class="old__prize">M.R.P &#x20B9;<?php echo $list['mrp']?></li>
                                            <li>Price &#x20B9;<?php echo $list['price']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
							<?php } ?>
                        </div>
            
                    </div>
                </div>
            </div>
        </section>
<?php require('footer.php')?>