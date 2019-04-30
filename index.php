

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php 
echo "Hello abc XYZ!";
?>

<?php
$txt1 = "Learn PHP";
$txt2 = "FPT Greenwich";
$x = 5;
$y = 5;
echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

$sql = "SELECT id, name FROM label";
$db = parse_url(getenv("DATABASE_URL"));
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["localhost"],
    $db["5432"],
    $db["postgres"],
    $db["pass"],
    ltrim($db["postgres://wwdwlzfwmqeuxe:a9908f22ddf78c99c2278ddc7fe2942c1784dbb47b69d3d8a3492a02c0c9f56a@ec2-54-221-236-144.compute-1.amazonaws.com:5432/d7kjtop6ijkhiu"], "/")
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