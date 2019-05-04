
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
					<a class="hinhproduct" href="Product_detail.php?productid=<?= $productid; ?>">
					<img src="<?= $image; ?>" class="image">
					<div class="middle">
				    <div class="discountbox">
				    	<p>DISCOUNT <?= $discount; ?> % </p>
				    	<p>ONLY 
				    		<?php
				    		$price=$row["price"];
				    		$discount=$row["discount"];
				    		echo $price-($price * $discount /100);
				    		?>$
				    	</p>
				 
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

			<table style="margin-bottom: 30px; margin-top: 30px;">
			 <tr>
  <td rowspan="6"><img src="<?= $image; ?>" alt="Chania" width="300" height="300" ></td>
    <td style="    padding-right: 20px;"><b>NAME:   </b></td>
    <td style="font-size: 20px"><?= $productname; ?></td>
    
  </tr>
  <tr>
    <td style="    padding-right: 20px;"><b>PRICE:   </b></td>
    <td style="font-size: 20px"><del><?= $price; ?> $ </del></td>
  </tr>

   <tr>
    <td style="    padding-right: 25px; color: red;"><b>DISCOUNT:   </b></td>
    <td style="font-size: 25px;color: red"><?= $discount; ?> % </b></td>
  </tr>


  <tr>
    <td style="    padding-right: 20px; color: red"><b>ONLY:   </b></td>
    <td style="font-size: 20px;color: red"><b><?= $price; ?>$</b></td>
  </tr>

  <tr>
    <td style="    padding-right: 20px;"><b>DESCRIPTION:</b></td>
    <td style="font-size: 20px"><?= $description; ?></td>
  </tr>

  <tr><td></td>
  	<td><br><button onclick="show()" style="width: 100px;color: white">BUY NOW</button></td>
                      </tr>
                    
                     
</table>
		       <?php }} 

		       ?>

