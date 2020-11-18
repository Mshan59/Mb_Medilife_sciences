<?php require('top.php')?>
<div class="body__overlay"></div>

        <!-- Start Slider Area -->
        <!-- <div class="slider__container slider--one bg__cat--3"> -->
            <!-- <div class="slide__container slider__activation__wrap owl-carousel"> -->
                <!-- Start Single Slide -->
                <!-- <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                        <div class="slider__inner">
                                            <h2 style="color:white;">WELCOME TO THE</h2>
                                            <h1 style="color:white;">MB MEDI LIFE SCIENCES</h1>
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
                </div> -->
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <!-- <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2 style="color:white;">WELCOME TO THE</h2>
                                        <h1 style="color:white;">MB MEDI LIFE SCIENCES</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/banner/big-img/medi 3.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!-- End Single Slide -->
            <!-- </div>
        </div> -->

<!-- start new bradcramp -->
<section class = "bdc">

    <div class="cont">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://p0.pikist.com/photos/145/437/black-color-yellow-abstract-background-v.jpg" alt="..." style="width:100vw; height: 500px ">
        <div class="carousel-caption d-none d-md-block">
        <h1 style = "color:#fff; padding:15px;">Welcome to the</h1>
        <p style = "color:#fff; font-size:40px; padding:10px;">MB MEDI LIFESCIENCES</p>
      </div>
      </div>

      <div class="item">
        <img src="./images/banner/big-img/4.jpg" alt="..." style="width:100%; height: 500px">
        <div class="carousel-caption d-none d-md-block">
        <h1 style = "color:#fff; padding:15px;">Welcome to the</h1>
        <p  style = "color:#fff; font-size:40px; padding:10px;"> MB MEDI LIFESCIENCES </p>
      </div>
      </div>

      <div class="item">
        <img src="https://i.pinimg.com/originals/dd/97/a0/dd97a01c01af74c6fbc7e3bf3753dae9.jpg" alt="..." style="width:100vw; height: 500px">
        <div class="carousel-caption d-none d-md-block">
        <h1 style = "color:#fff; padding:15px;">Welcome to the</h1>
        <p style = "color:#fff; font-size:40px; padding:10px;">MB MEDI LIFESCIENCES</p>
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



</section>

        <!-- Start hover Area -->
    <section class="features-categories">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="./images/product/product/10.jpg" alt="category">
                </div>
                <div class="col-md-4">
                    <img src="./images/product/product/11.jpg" alt="category">
                </div>
                <div class="col-md-4">
                    <img src="./images/product/product/12.jpg" alt="category">
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
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html"><?php echo $list['name']?></a></h4>
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
							$get_product=get_product($conn,4,'','','yes');
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-10">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html"><?php echo $list['name']?></a></h4>
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