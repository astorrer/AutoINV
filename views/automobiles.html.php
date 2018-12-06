<!DOCTYPE html>

<html>
  <?php include __DIR__ . '/../partials/header.html.php';?>
  <body>

    <?php include __DIR__ . '/../partials/menu.html';?>

    <a class="pure-button box" href="#">Add a Vehicle</a>
    <a class="pure-button box" href="#">Delete a Vehicle</a>


    <div class="pure-g containe frame">
        <div class="pure-u-1-1 box">
          <h1> Automobile List</h1>

          <table class="pure-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Make</th>
                    <th>Year</th>
                </tr>
            </thead>

            <tbody>
                  <?php
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "<tr> <td>" . $row["auto_id"]. "</td>";
                          echo "<td>" . $row["model"]. "</td>";
                          echo "<td>" . $row["color"]. "</td>";
                          echo "<td>" . $row["make"]. "</td>";
                          echo "<td>" . $row["year"]. "</td></tr>";
                      }
                  } else {
                      echo "0 results";
                  }
                  ?>
            </tbody>
        </table>

        </div>
    </div>

    <?php include __DIR__ . '/../partials/footer.html.php';?>
  </body>
</html>
