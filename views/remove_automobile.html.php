<!DOCTYPE html>

<html>
  <?php include __DIR__ . '/../partials/header.html.php';?>
  <body>

    <?php include __DIR__ . '/../partials/menu.html';?>

    <div class="pure-g">
        <div class="pure-u-1-3 frame">
          <form class="pure-form pure-form-stacked box" action="../controllers/delete_automobile.php" method="post">
            <fieldset>
              <legend>Delete an Automobile</legend>

              <label for="auto_id">ID:</label>
              <input type="text" name="auto_id">

              <button type="submit" class="pure-button pure-button-primary">Submit</button>
            </fieldset>
          </form>
        </div>
    </div>

    <?php include __DIR__ . '/../partials/footer.html.php';?>
  </body>
</html>
