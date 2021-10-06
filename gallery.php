<?php require('top.php')?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid Images</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="gallery_header">
        <h1>MY Gallery</h1>
        <p>Click on the button tom change the grid view.</p>
        <div class="icon">
            <i class="fa fa-square" onclick="full()" ></i>
            <i class="fa fa-th-large" onclick="twoColumn()" ></i>
            <i class="fa fa-th" onclick="fourColumn()" ></i>
        </div>
    </div>
    <div class="gallery_row">
        <div id="gallery_column1">
        <a href="./images/gallery/gallery-1.jpg" data-fancybox="images" data-caption="My caption">
        <img src="./images/gallery/gallery-1.jpg" >
       </a>
        <a href="./images/gallery/gallery-5.jpg" data-fancybox="images" data-caption="My caption">
        <img src="./images/gallery/gallery-5.jpg" >
       </a>
            <!-- <img src="./images/product/Product/48.jpg" >
            <img src="./images/product/Product/47.jpg" >
            <img src="./images/product/Product/46.jpg" >
            <img src="./images/product/Product/45.jpg" >
            <img src="./images/product/Product/44.jpg" >
            <img src="./images/product/Product/43.jpg" >
            <img src="./images/product/Product/42.jpg" >
            <img src="./images/product/Product/41.jpg" >
            <img src="./images/product/Product/40.jpg" >
            <img src="./images/product/Product/39.jpg" >
            <img src="./images/product/Product/38.jpg" >
            <img src="./images/product/Product/37.jpg" > -->
        </div>
        <div id="gallery_column2">
        <a href="./images/gallery/gallery-2.jpg" data-fancybox="images" data-caption="My caption">
        <img src="./images/gallery/gallery-2.jpg" >
       </a>
        <a href="./images/gallery/gallery-6.jpg" data-fancybox="images" data-caption="My caption">
        <img src="./images/gallery/gallery-6.jpg" >
       </a>
        
            <!-- <img src="./images/product/Product/36.jpg" >
            <img src="./images/product/Product/35.jpg" >
            <img src="./images/product/Product/34.jpg" >
            <img src="./images/product/Product/33.jpg" >
            <img src="./images/product/Product/32.jpg" >
            <img src="./images/product/Product/31.jpg" >
            <img src="./images/product/Product/30.jpg" >
            <img src="./images/product/Product/29.jpg" >
            <img src="./images/product/Product/28.jpg" >
            <img src="./images/product/Product/27.jpg" >
            <img src="./images/product/Product/26.jpg" >
            <img src="./images/product/Product/25.jpg" > -->
        </div>
        <div id="gallery_column3">
        <a href="./images/gallery/gallery-3.jpg" data-fancybox="images" data-caption="My caption">
        <img src="./images/gallery/gallery-3.jpg" >
       </a>
       <a data-fancybox href="./videos/gallery/VID-20210202-WA0012.mp4">
             <img src="./videos/gallery/review-1.jpg"   alt="">
              <h3> Customer Review</h3>
           </a>
            <!-- <img src="./images/product/Product/24.jpg" >
            <img src="./images/product/Product/23.jpg" >
            <img src="./images/product/Product/22.jpg" >
            <img src="./images/product/Product/21.jpg" >
            <img src="./images/product/Product/20.jpg" >
            <img src="./images/product/Product/19.jpg" >
            <img src="./images/product/Product/18.jpg" >
            <img src="./images/product/Product/17.jpg" >
            <img src="./images/product/Product/16.jpg" >
            <img src="./images/product/Product/15.jpg" >
            <img src="./images/product/Product/14.jpg" >
            <img src="./images/product/Product/13.jpg" > -->
        </div>
        <div id="gallery_column4">
        <a href="./images/gallery/gallery-4.jpg" data-fancybox="images" data-caption="My caption">
        <img src="./images/gallery/gallery-4.jpg" >
       </a>

          <a data-fancybox href="./videos/gallery/VID-20210202-WA0020.mp4">
          <img src="./videos/gallery/review-2.jpg"   alt="">
          <i class="fa fa-play-circle bg-primary" style="z-index:-1; margin-bottom:-40px;"></i>
              <h3> Customer Review</h3>
           </a>

            <!-- <img src="./images/product/Product/1.jpg" >
            <img src="./images/product/Product/2.jpg" >
            <img src="./images/product/Product/3.jpg" >
            <img src="./images/product/Product/4.jpg" >
            <img src="./images/product/Product/5.jpg" >
            <img src="./images/product/Product/6.jpg" >
            <img src="./images/product/Product/7.jpg" >
            <img src="./images/product/Product/8.jpg" >
            <img src="./images/product/Product/9.jpg" >
            <img src="./images/product/Product/10.jpg" >
            <img src="./images/product/Product/11.jpg" >
            <img src="./images/product/Product/12.jpg" > -->
        </div>
    </div>


<video width="640" height="320" controls id="myVideo" style="display:none;">
    <source src="https://www.html5rocks.com/en/tutorials/video/basics/Chrome_ImF.mp4" type="video/mp4">
    <source src="https://www.html5rocks.com/en/tutorials/video/basics/Chrome_ImF.webm" type="video/webm">
    <source src="https://www.html5rocks.com/en/tutorials/video/basics/Chrome_ImF.ogv" type="video/ogg">
    Your browser doesn't support  video .
</video>

    <script>
        function full(){
            document.getElementById('gallery_column1').style.width = '100%';
            document.getElementById('gallery_column2').style.width = '100%';
            document.getElementById('gallery_column3').style.width = '100%';
            document.getElementById('gallery_column4').style.width = '100%';
        }
        function twoColumn(){
            document.getElementById('gallery_column1').style.width = '50%';
            document.getElementById('gallery_column2').style.width = '50%';
            document.getElementById('gallery_column3').style.width = '50%';
            document.getElementById('gallery_column4').style.width = '50%';
        }
        function fourColumn(){
            document.getElementById('gallery_column1').style.width = '25%';
            document.getElementById('gallery_column2').style.width = '25%';
            document.getElementById('gallery_column3').style.width = '25%';
            document.getElementById('gallery_column4').style.width = '25%';
        }
    </script>
</body>
</html>



<?php require('footer.php')?>