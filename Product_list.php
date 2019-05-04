<?php 
$db = parse_url(getenv("DATABASE_URL"));
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));

$result = pg_query($pdo, "SELECT Image, Discount, Price, Discount,Price from product");
if (!$result) {
  echo "An error occurred.";
  exit;
}

while ($row = pg_fetch_assoc($result)) {

    	?>
			<div class="oneproduct">
				<a class="hinhproduct" href="Product_detail2.php?Productid=<?php echo $row["Productid"]?>">
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