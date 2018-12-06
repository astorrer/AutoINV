<?php

include __DIR__ . '/../database/db_configuration.php';

// Page Variables
$title = 'Show Automobiles';

$sql = "select
  automobiles.auto_id,
  automobiles.model,
  colors.color,
  makes.make,
  years.year
from
  automobiles
  join colors ON colors.color_id = automobiles.color_id
  join makes ON makes.make_id = automobiles.make_id
  join years ON years.year_id = automobiles.year_id
order by
  auto_id;";

$result = mysqli_query($connection, $sql);

include __DIR__ . '/../views/automobiles.html.php';

mysqli_close($connection);
?>
