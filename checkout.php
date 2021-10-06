<?php
require('top.php');

if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){
?>
<script>
window.location.href = 'index.php';
</script>

<?php
}
$cart_total=0;
foreach($_SESSION['cart'] as $key=>$val){
	$productArr=get_product($conn,'','',$key);
	$price=$productArr[0]['price'];
	$qty=$val['qty'];
	$cart_total=$cart_total+($price*$qty);
}

if(isset($_POST['submit'])){
	$address=get_safe_value($conn,$_POST['address']);
	$city=get_safe_value($conn,$_POST['city']);
	$pincode=get_safe_value($conn,$_POST['pincode']);
	$payment_type=get_safe_value($conn,$_POST['payment_type']);
	$user_id=$_SESSION['USER_ID'];
	$total_price=$cart_total;
	$payment_status='pending';
	if($payment_type=='cod'){
		$payment_status='1';
	}
	$order_status='1';
	$added_on=date('y-m-d h:i:s');
	mysqli_query($conn,"insert into `order`(user_id,address,city,pincode,payment_type,total_price,payment_status,order_status,added_on)
	 values('$user_id','$address','$city','$pincode','$payment_type','$total_price','$payment_status','$order_status','$added_on')");

	 $order_id=mysqli_insert_id($conn);
	 foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($conn,'','',$key);
		$price=$productArr[0]['price'];
		$qty=$val['qty'];
		mysqli_query($conn,"insert into `order_details`(order_id,product_id,qty,price)
				 values('$order_id','$key','$qty','$price')");
	}
	unset($_SESSION['cart']);
	?>
		<script>
			window.location.href = 'thank_you.php';
		</script>

     <?php
}

?>


<div class="ht__bradcaump__area"
    style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">checkout</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="checkout-wrap ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="checkout__inner">
                    <div class="accordion-list">
                        <div class="accordion">

                            <?php
								$accordion__class='accordion__title';
								if(!isset($_SESSION['USER_LOGIN'])){
								$accordion__class='accordion_hide';
								?>
                            <div class="accordion__title">
                                Checkout Method
                            </div>
                            <div class="accordion__body">
                                <div class="accordion__body__form">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="checkout-method">
                                                <form action="#">
                                                    <div class="checkout-method__single">
                                                        <!-- <h5 class="checkout-method__title"><i class="zmdi zmdi-caret-right"></i>CHECKOUT AS A GUEST OR REGISTER</h5>
                                                                <p class="checkout-method__subtitle">Register with us for future convenience:</p>
                                                                <div class="single-input">
                                                                    <input type="radio" id="checkout-method-1" name="checkout-method" checked="checked">
                                                                    <label for="checkout-method-1">Checkout as guest</label>
                                                                </div>
                                                                <div class="single-input">
                                                                    <input type="radio" id="checkout-method-2" name="checkout-method">
                                                                    <label for="checkout-method-2">Register</label>
                                                                </div> -->
                                                    </div>
                                                    <div class="checkout-method__single">
                                                        <h5 class="checkout-method__title checkout-method__register"><i
                                                                class="zmdi zmdi-caret-right"></i>REGISTER AND SAVE TIME
                                                        </h5>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <label for="checkout-method-2">User Name</label>
                                                                <input
                                                                    style=" padding:4px; border:1px solid #f6f6f6;  background:#dbf5f7; padding-left:14px;"
                                                                    type="text" name="name" id="name"
                                                                    placeholder="Your Name*" style="width:100%">
                                                                <span class="field_error" id="name_error"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <label for="checkout-method-2">Email-Id</label>
                                                                <input
                                                                    style=" padding:4px;  border:1px solid #f6f6f6;  background:#dbf5f7; padding-left:14px;"
                                                                    type="text" name="email" id="email"
                                                                    placeholder="Your Email*" style="width:100%">
                                                                <span class="field_error" id="email_error"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <label for="checkout-method-2">Mobile No.</label>
                                                                <input
                                                                    style=" padding:4px;  border:1px solid #f6f6f6;  background:#dbf5f7; padding-left:14px;"
                                                                    type="text" name="mobile" id="mobile"
                                                                    placeholder="Your Mobile*" style="width:100%">
                                                                <span class="field_error" id="mobile_error"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <label for="checkout-method-2">Password</label>
                                                                <input
                                                                    style=" padding:4px;  border:1px solid #f6f6f6; background:#dbf5f7; padding-left:14px;"
                                                                    type="password" name="password" id="password"
                                                                    placeholder="Your Password*" style="width:100%">
                                                                <span class="field_error" id="password_error"></span>
                                                            </div>
                                                        </div>

                                                        <div class="contact-btn ">
                                                            <button type="button" style=" margin:12px;" class="fv-btn"
                                                                onclick="user_register()">Register</button>
                                                        </div>
                                                        <div class="form-output register_msg">
                                                            <p class="form-message field_error"></p>
                                                        </div>

                                                        <!-- <p class="checkout-method__subtitle">Register with us for future convenience:</p>
                                                                <div class="single-input">
                                                                    <input type="radio" id="register-method-1" name="register-method" checked="checked">
                                                                    <label for="register-method-1">Fast and easy check out</label>
                                                                </div>
                                                                <div class="single-input">
                                                                    <input type="radio" id="register-method-2" name="register-method">
                                                                    <label for="register-method-2">Easy access to your order history and status</label>
                                                                </div> -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="checkout-method__login">
                                                <form id="login-form" method="post">
                                                    <h5 class="checkout-method__title"><i
                                                            class="zmdi zmdi-caret-right"></i><strong>&nbsp;
                                                            Login</strong></h5>
                                                    <h5 class="checkout-method__title">Already Registered?</h5>
                                                    <p class="checkout-method__subtitle">Please login below:</p>
                                                    <div class="single-input">
                                                        <label for="user-email">Email Address</label>
                                                        <input type="text" name="login_email" id="login_email"
                                                            placeholder="Your Email*" style="width:100%">
                                                    </div>
                                                    <span class="field_error" id="login_email_error"></span>
                                                    <div class="single-input">
                                                        <label for="user-pass">Password</label>
                                                        <input type="password" name="login_password" id="login_password"
                                                            placeholder="Your Password*" style="width:100%">
                                                    </div>
                                                    <span class="field_error" id="login_password_error"></span>
                                                    <p class="require">* Required fields</p>
                                                    <a href="#">Forgot Passwords?</a>
                                                    <div class="dark-btn">
                                                        <button type="button" class="fv-btn"
                                                            onclick="user_login()">Login</button>
                                                    </div>
                                                </form>
                                                <div class="form-output login_msg">
                                                    <p class="form-message field_error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <div class="<?php echo $accordion__class?>">
                                Address Information
                            </div>
                            <form method="post">
                                <div class="accordion__body">
                                    <div class="bilinfo">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="single-input">
                                                    <input type="text" name="address" placeholder="Street Address" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-input">
                                                    <input type="text" name="city" placeholder="City/State" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-input">
                                                    <input type="text"name="pincode" placeholder="Post code/ zip" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="<?php echo $accordion__class?>">
                                    payment information
                                </div>
                                <div class="accordion__body">
                                    <div class="paymentinfo">
                                        <div class="single-method">CASH ON DELIVERY
                                            COD <input type="radio" name="payment_type" value="COD" required/> &nbsp;
                                            PayU <input type="radio" name="payment_type" value="COD" required/>
                                        </div>
										<div class="single-method">
                               			   
                            			</div>
                                    </div>
                                </div>
								<input type="submit" name="submit">
                            </form>
							
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="order-details">
                    <h5 class="order-details__title">Your Order</h5>
                    <div class="order-details__item">
                        <?php
								$cart_total=0;
								foreach($_SESSION['cart'] as $key=>$val){
								$productArr=get_product($conn,'','',$key);
								$pname=$productArr[0]['name'];
								$mrp=$productArr[0]['mrp'];
								$price=$productArr[0]['price'];
								$image=$productArr[0]['image'];
								$qty=$val['qty'];
								$cart_total=$cart_total+($price*$qty);
								?>
                        <div class="single-item">
                            <div class="single-item__thumb">
                                <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" />
                            </div>
                            <div class="single-item__content">
                                <a href="#"><?php echo $pname?></a>
                                <span class="price"><?php echo $price*$qty?></span>
                            </div>
                            <div class="single-item__remove">
                                <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i
                                        class="icon-trash icons"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="ordre-details__total">
                        <h5>Order total</h5>
                        <span class="price"><?php echo $cart_total?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->
<div class="htc__brand__area bg__cat--4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ht__brand__inner">
                    <ul class="brand__list owl-carousel clearfix">
                        <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="images/brand/3.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="images/brand/4.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Brand Area -->

<?php require('footer.php')?>