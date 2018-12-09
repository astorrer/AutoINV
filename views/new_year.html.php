<!DOCTYPE html>

<html>
  <?php include __DIR__ . '/../partials/header.html.php';?>
  <body>

    <?php include __DIR__ . '/../partials/menu.html';?>

    <div class="pure-g">
        <div class="pure-u-1-3 frame">
          <form class="pure-form pure-form-stacked box" action="../controllers/create_year.php" method="post">
            <fieldset>
              <legend>Create a Year</legend>

              <label for="year_id">Year ID</label>
              <input type="text" name="year_id">

              <label for="year">Year</label>
              <input type="text" name="year">

              <button type="submit" class="pure-button pure-button-primary">Submit</button>
            </fieldset>
          </form>
        </div>
    </div>

    <?php include __DIR__ . '/../partials/footer.html.php';?>
  </body>
</html>
