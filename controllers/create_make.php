<!DOCTYPE html>
<?php
// Page Variables
$title = 'Create Make';
?>
<html>
  <?php include __DIR__ . '/../partials/header.html.php';?>
  <body>

    <?php include __DIR__ . '/../partials/menu.html';?>

    <div class="pure-g">
          <div class="pure-u-1-1 frame">

            <div class="box">
              <h2>ID: <?php echo $_POST["make_id"]; ?></h2>
              <h2>Make: <?php echo $_POST["make"]; ?></h2>
            </div>

            <div class="box">
              <?php
              include __DIR__ . '/../database/db_configuration.php';

              $sql = "
              INSERT INTO
                autoinv.makes (make_id, make)
              VALUES
                (" . mysql_escape_string($_POST['make_id']) . ", '" . mysql_escape_string($_POST['make']) . "');
              ";

              if ($connection->query($sql) === TRUE) {
                 echo "New record created successfully";
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
