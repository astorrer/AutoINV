<!DOCTYPE html>

<html>
  <?php include __DIR__ . '/../partials/header.html.php';?>
  <body>

    <?php include __DIR__ . '/../partials/menu.html';?>

    <div class="pure-g">
        <div class="pure-u-1-4 frame">
          <h3>Makes List</h3>
          <p class="pure-button-group" role="group">
            <a class="pure-button box" href="/views/new_make.html.php">Add a Make</a>
            <a class="pure-button box" href="/views/remove_make.html.php">Delete a Make</a>
          </p>

          <table class="pure-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Make</th>
                </tr>
            </thead>

            <tbody>
                  <?php
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "<tr> <td>" . $row["make_id"]. "</td>";
                          echo "<td>" . $row["make"]. "</td></tr>";
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
