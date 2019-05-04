	<?php
		          include 'ketnoi.php';
		            $sql = "SELECT productname, price FROM product";
		            $result = pg_query($connection,$sql);
		            if (pg_num_rows($result) > 0) {
		            // output data of each row
		            while($row = pg_fetch_assoc($result)) {
		              $productname = $row['productname'];
		              $price = $row['price'];
		          ?>
		         <li><a href="Product_detail.php?productname=<?= $productname; ?>"><?= $price; ?></a></li>
		       <?php }} 

		       ?>