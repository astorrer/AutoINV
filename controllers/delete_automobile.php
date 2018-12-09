<!DOCTYPE html>
<?php
// Page Variables
$title = 'Delete Automobile';
?>
<html>
  <?php include __DIR__ . '/../partials/header.html.php';?>
  <body>

    <?php include __DIR__ . '/../partials/menu.html';?>

    <div class="pure-g">
          <div class="pure-u-1-1 frame">

            <div class="box">
              <h2>ID: <?php echo $_POST["auto_id"]; ?></h2>
            </div>

            <div class="box">
              <?php
              include __DIR__ . '/../database/db_configuration.php';

              $sql = "
              DELETE FROM
                autoinv.automobiles
              WHERE
                auto_id=" . mysql_escape_string($_POST['auto_id']) . "
              LIMIT
                1;
              ";

              if ($connection->query($sql) === TRUE) {
                 echo "Old record deleted successfully";
              } else {
                 echo "Error: " . $sql . "<br>" . $connection->error;
              }

              $connection->close();
              ?>
          </div>
        </div>
      </div>

    <?php include __DIR__ . '/../partials/footer.html.php';?>
  </body>
</html>
