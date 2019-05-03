<!DOCTYPE html>
<html>
<body>

<h1>My PHP page</h1>

<?php 
$sql = "SELECT * FROM product";
$db = parse_url(getenv("DATABASE_URL"));
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();
foreach ($resultSet as $row) {
	echo $row["productid"] . "<br/>";
	echo $row['Catid'] . "<br/>";
	echo $row['Productname'] . "<br/>";
	echo $row['Price'] . "<br/>";
	echo $row['Image'] . "<br/>";
	echo $row['Description'] . "<br/>";
	echo $row['Discount'] . "<br/>";
}
?>
</body>
</html>