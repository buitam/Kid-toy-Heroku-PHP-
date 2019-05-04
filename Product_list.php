
		<?php
		          include 'ketnoi.php';
		            $sql = "SELECT productid, image, price, discount, productname FROM product";
		            $result = pg_query($connection,$sql);
		            if (pg_num_rows($result) > 0) {
		            // output data of each row
		            while($row = pg_fetch_assoc($result)) {
		            	$productid = $row['productid'];
		              	$price = $row['price'];
		              	$image = $row['image'];
		              	$discount = $row['discount'];
		              	$productname = $row['productname'];
		         
		          ?>
		        <div class="oneproduct">
					<div class="faded">
					
					<img src="<?= $image; ?>" class="image">
					<div class="middle">
				    <div class="discountbox">
				    	<p>DISCOUNT <?= $discount; ?> % </p>
				 
				    </div>
				  </div>
				</div>
				</a>
					<div class="thongtinproduct">
						<span><?= $productname; ?>
							
						</span><br>
						<span class="explore" >EXPLORE NOW</span><br>
								<img src="cart-2.png" alt="hình giỏ hàng">
								<span><?= $price; ?> $</span>
						
					</div>
			</div>
		       <?php }} 

		       ?>

