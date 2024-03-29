<?php
require('top.inc.php');

$order_id=get_safe_value($conn,$_GET['id']);
if(isset($_POST['update_order_status'])){
 	$update_order_status=$_POST['update_order_status'];
	 mysqli_query($conn,"update `order` set order_status='$update_order_status' where id='$order_id'");
}
if(isset($_POST['payment_order_status'])){
	mysqli_query($conn,"update `order` set payment_status='$update_payment_status' where id='$order_id'");
}
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Order Details</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Product Name</th>
                                        <th class="product-thumbnail">Product Image</th>
                                        <th class="product-name">Qty</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-price">Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
											$res=mysqli_query($conn,"select distinct(order_details.id),order_details.*,
                                            product.name,product.image,`order`.address,`order`.city,`order`.pincode from order_details,product ,
                                            `order` where order_details.order_id='$order_id' and order_details.product_id=product.id");
											$total_price=0;
											while($row=mysqli_fetch_assoc($res)){
												$address=$row['address'];
												$city=$row['city'];
												$pincode=$row['pincode'];
											$total_price=$total_price+($row['qty']*$row['price']);
											?>
                                    <tr>
                                        <td class="product-name"><?php echo $row['name']?></td>
                                        <td class="product-name"> <img
                                                src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"></td>
                                        <td class="product-name"><?php echo $row['qty']?></td>
                                        <td class="product-name"><?php echo $row['price']?></td>
                                        <td class="product-name"><?php echo $row['qty']*$row['price']?></td>

                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="product-name">Total Price</td>
                                        <td class="product-name"><?php echo $total_price?></td>

                                    </tr>
                                </tbody>
                            </table>
							<div id="address_details">
								<strong>Address</strong>
								<?php echo $address?>, &nbsp; &nbsp;<?php echo $city?>, &nbsp;&nbsp;<?php echo $pincode?><br><br>
								<strong>Order Status:</strong>
								<?php
								$order_status_arr=mysqli_fetch_assoc(mysqli_query($conn,"select order_status.name from order_status,`order` 
								where `order`.id='$order_id' and `order`.order_status=order_status.id"));
								echo $order_status_arr['name'];
								?>
								<!-- <br><strong>payment Status:</strong>
								<?php
					
								$payment_status_arr=mysqli_fetch_assoc(mysqli_query($conn,"select payment_status.name from payment_status,`order` 
								where `order`.id='$order_id' and `order`.payment_status=payment_status.id"));
								echo $payment_status_arr['name'];
								?> -->
								<div class="my-4">
									<form method="post">
									<select class="form-control my-4" name="update_order_status">
										<option>Select Order Status</option>
										<?php
										$res=mysqli_query($conn,"select *from order_status");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id']==$categories_id){
												echo "<option selected value=".$row['id'].">".$row['name']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['name']."</option>";
											}
										}
										?>
									</select>
									<!-- <select class="form-control my-4" name="update_payment_status">
										<option>Select Payment Status</option>
										<?php
										$res=mysqli_query($conn,"select *from payment_status");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id']==$categories_id){
												echo "<option selected value=".$row['id'].">".$row['name']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['name']."</option>";
											}
										}
										?>
									</select> -->
									<input type="submit" class="form-control bg-primary"/>
									</form>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php');
?>