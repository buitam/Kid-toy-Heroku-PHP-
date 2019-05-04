<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method = "post">
		id: <input type="text" name="id"><br/>
		Name: <input type="text" name="name"><br/>
		<input type="submit">
	</form>
	
</body>
</html>
<?php
	if(isset($_POST["id"]) && isset($_POST["name"])) {
		var $id = $_POST["id"];
		var $name = $_POST["name"];
// khởi tạo kết nối
	$db = parse_url(getenv("DATABASE_URL"));
	$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
		$data = [
	    'id' => $id,
	    'name' => $name,
	    
	];
	$sql = "INSERT INTO label (id, name) VALUES (:name, :surname)";
	$stmt= $pdo->prepare($sql);
	$stmt->execute($data);

}
?>