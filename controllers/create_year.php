<!DOCTYPE html>
<?php
// Page Variables
$title = 'Create Year';
?>
<html>
  <?php include __DIR__ . '/../partials/header.html.php';?>
  <body>

    <?php include __DIR__ . '/../partials/menu.html';?>

    <div class="pure-g">
          <div class="pure-u-1-1 frame">

            <div class="box">
              <h2>ID: <?php echo $_POST["year_id"]; ?></h2>
              <h2>Year: <?php echo $_POST["year"]; ?></h2>
            </div>

            <div class="box">
              <?php
              include __DIR__ . '/../database/db_configuration.php';

              $sql = "
              INSERT INTO
                autoinv.years (year_id, year)
              VALUES
                (" . mysql_escape_string($_POST['year_id']) . ", '" . mysql_escape_string($_POST['year']) . "');
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
