<?php

include __DIR__ . '/../database/db_configuration.php';

// Page Variables
$title = 'Show Years';

$sql = "select
  colors.color_id,
  colors.color
from
  colors
order by
  color_id;";

$result = mysqli_query($connection, $sql);

include __DIR__ . '/../views/colors.html.php';

mysqli_close($connection);
?>
