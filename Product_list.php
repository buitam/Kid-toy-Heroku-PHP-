
		<?php
		          include 'ketnoi.php';
		            $sql = "SELECT Productid, Image, price, Discount, Productname FROM product";
		            $result = pg_query($connection,$sql);
		            if (pg_num_rows($result) > 0) {
		            // output data of each row
		            while($row = pg_fetch_assoc($result)) {
		            	$Productid = $row['Productid'];
		              	$price = $row['price'];
		              	$Image = $row['Image'];
		              	$Discount = $row['Discount'];
		              	$Productname = $row['Productname'];
		         
		          ?>
		        <div class="oneproduct">
					<div class="faded">
					
					<img src="<?= $Image; ?>" class="image">
					<div class="middle">
				    <div class="discountbox">
				    	<p>DISCOUNT <?= $Discount; ?> % </p>
				 
				    </div>
				  </div>
				</div>
				</a>
					<div class="thongtinproduct">
						<span><?= $Productname; ?>
							
						</span><br>
						<span class="explore" >EXPLORE NOW</span><br>
								<img src="cart-2.png" alt="hình giỏ hàng">
								<span><?= $price; ?> $</span>
						
					</div>
			</div>
		       <?php }} 

		       ?>

