<?php 

require_once'ketnoi.php';

$sql = "SELECT * FROM product";


$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
while($row = $stmt->fetchAll()

    {
    	?>
	


			<div class="oneproduct">
				<a class="hinhproduct" href="Product_detail.php?Productid=<?php echo $row["Productid"]?>">
					<div class="faded">
					
					<img src="<?php echo $row["Image"]?>" class="image">
					<div class="middle">
				    <div class="discountbox">
				    	<p>DISCOUNT <?php echo $row["Discount"]?> % </p>
				    	<p>ONLY 
				    		<?php
				    		$Price=$row["Price"];
				    		$Discount=$row["Discount"];
				    		echo $Price-($Price * $Discount /100);
				    		?>$
				    	</p>
				    </div>
				  </div>
				</div>
				</a>
					<div class="thongtinproduct">
						<span><?php echo $row["Productname"]?></span><br>
						<span class="explore" >EXPLORE NOW</span><br>
								<img src="cart-2.png" alt="hình giỏ hàng">
								<span><?php echo $row["Price"]?> $</span>
						
					</div>
			</div>

<?php
	}

?>