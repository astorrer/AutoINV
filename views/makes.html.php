<!DOCTYPE html>

<html>
  <?php include __DIR__ . '/../partials/header.html.php';?>
  <body>

    <?php include __DIR__ . '/../partials/menu.html';?>

    <a class="pure-button box" href="#">Add a Make</a>
    <a class="pure-button box" href="#">Delete a Make</a>


    <div class="pure-g frame">
        <div class="pure-u-1-1 box">
          <h1> Makes List</h1>

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
