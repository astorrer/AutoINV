<?php

// Connect to Database
include __DIR__ . '/../database/db_configuration.php';

// Page Variables
$title = 'Show Years';

$sql = "select
  years.year_id,
  years.year
from
  years
order by
  year_id;";

$result = mysqli_query($connection, $sql);

include __DIR__ . '/../views/years.html.php';

mysqli_close($connection);
?>
