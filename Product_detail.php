<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
</head>
<body>
<?php
		include 'ketnoi.php';
		$productid =$_GET['productid'];
		            $sql = "SELECT productid, image, price, discount, productname FROM product  WHERE productid = '$productid'";
		            $result = pg_query($connection,$sql);
		            if (pg_num_rows($result) > 0) {
		            // output data of each row
		            while($row = pg_fetch_assoc($result)) {
		            	$productid = $row['productid'];
		              	$price = $row['price'];
		              	$image = $row['image'];
		              	$discount = $row['discount'];
		              	$productname = $row['productname'];
		              	$description = $row['description'];
		         
		          ?>
			

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

				<?php
			}
			}
			
			?>
</body>
</html>