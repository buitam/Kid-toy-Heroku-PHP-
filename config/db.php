<?php
$db = parse_url(getenv("postgres://wwdwlzfwmqeuxe:a9908f22ddf78c99c2278ddc7fe2942c1784dbb47b69d3d8a3492a02c0c9f56a@ec2-54-221-236-144.compute-1.amazonaws.com:5432/d7kjtop6ijkhiu"));
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["ec2-54-221-236-144.compute-1.amazonaws.com"],
    $db["5432"],
    $db["wwdwlzfwmqeuxe"],
    $db["a9908f22ddf78c99c2278ddc7fe2942c1784dbb47b69d3d8a3492a02c0c9f56a"],
    ltrim($db["d7kjtop6ijkhiu"], "/")
));
  ?>
