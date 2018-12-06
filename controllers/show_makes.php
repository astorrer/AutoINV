<?php

include __DIR__ . '/../database/db_configuration.php';

// Page Variables
$title = 'Show Makes';

$sql = "select
  makes.make_id,
  makes.make
from
  makes
order by
  make_id;";

$result = mysqli_query($connection, $sql);

include __DIR__ . '/../views/makes.html.php';

mysqli_close($connection);
?>
