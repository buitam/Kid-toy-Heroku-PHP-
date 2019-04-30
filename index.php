

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php 
echo "Hello abc XYZ!";
?>

<?php
define('ROOT_URL','');
$txt1 = "Learn PHP";
$txt2 = "FPT Greenwich";
$x = 5;
$y = 5;
echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

$host = "ec2-54-221-236-144.compute-1.amazonaws.com";
$user = "wwdwlzfwmqeuxe";
$password = "a9908f22ddf78c99c2278ddc7fe2942c1784dbb47b69d3d8a3492a02c0c9f56a";
$dbname = "d7kjtop6ijkhiu";
$port = "5432";
try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

 $sql = 'SELECT * FROM label';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();
  print_r ($details);
?>
</body>
</html> 