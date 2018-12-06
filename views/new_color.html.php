<!DOCTYPE html>

<html>
  <?php include __DIR__ . '/../partials/header.html.php';?>
  <body>

    <?php include __DIR__ . '/../partials/menu.html';?>

    <div class="pure-g">
        <div class="pure-u-1-3 frame">
          <form class="pure-form pure-form-stacked box" action="../controllers/create_color.php" method="post">
            <fieldset>
              <legend>Create a Color</legend>

              <label for="color_id">Color ID</label>
              <input type="text" name="color_id">

              <label for="color">Color</label>
              <input type="text" name="color">

              <button type="submit" class="pure-button pure-button-primary">Submit</button>
            </fieldset>
          </form>
        </div>
    </div>

    <?php include __DIR__ . '/../partials/footer.html.php';?>
  </body>
</html>
