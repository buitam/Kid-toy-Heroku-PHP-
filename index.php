<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php 
$sql = "SELECT id, name FROM label";
$db = parse_url(getenv("postgres://wwdwlzfwmqeuxe:a9908f22ddf78c99c2278ddc7fe2942c1784dbb47b69d3d8a3492a02c0c9f56a@ec2-54-221-236-144.compute-1.amazonaws.com:5432/d7kjtop6ijkhiu"));
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["localhost"],
    $db["5432"],
    $db["postgres"],
    $db["pass"],
    ltrim($db["http://127.0.0.1:64058/browser"], "/")
));
$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();
foreach ($resultSet as $row) {
    echo $row['name'] . '\n';
}
?>
</body>
</html>