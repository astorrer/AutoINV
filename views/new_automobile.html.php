<!DOCTYPE html>

<html>
  <?php include __DIR__ . '/../partials/header.html.php';?>
  <body>

    <?php include __DIR__ . '/../partials/menu.html';?>

    <div class="pure-g">
        <div class="pure-u-1-3 frame">
          <form class="pure-form pure-form-stacked box" action="../controllers/create_automobile.php" method="post">
            <fieldset>
              <legend>Create an Automobile</legend>

              <label for="auto_id">Auto ID</label>
              <input type="text" name="auto_id">

              <label for="model">Model</label>
              <input type="text" name="model">

              <label for="make_id">Make ID</label>
              <input type="text" name="make_id">

              <label for="color_id">Color ID</label>
              <input type="text" name="color_id">

              <label for="year_id">Year ID</label>
              <input type="text" name="year_id">

              <button type="submit" class="pure-button pure-button-primary">Submit</button>
            </fieldset>
          </form>
        </div>
    </div>

    <?php include __DIR__ . '/../partials/footer.html.php';?>
  </body>
</html>
