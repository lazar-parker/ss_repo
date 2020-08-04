<!DOCTYPE HTML>
<?php
  include "common_new.php";
  include "summit_sql.php";

  DB::open();

  if($_POST["name"])
  {
    $name = $_POST["name"];
    $mail = $_POST["mailing_address"];
    $message = $_POST["message"];
    DB::storeContact($name, $mail, $message);
  }

  include "header.php";
?>
    <!-- Heading -->
      <div id="heading" >
        <h1>Contact Form</h1>
      </div>

    <!-- Main -->
      <section id="main" class="wrapper">
        <div class="inner">
          <div class="content">
            <p>Interested in getting in contact with Summit Street A Cappella? Fill out the form below, and one of our E-Board members will be in touch shortly!</p>
            <form method="post" action="#">
              <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                  <input type="text" name="name" id="name" value="" placeholder="Name" />
                </div>
                <div class="col-6 col-12-xsmall">
                  <input type="email" name="email" id="email" value="" placeholder="Email" />
                </div>
                <!-- Break -->
                <div class="col-12">
                  <select name="category" id="category">
                    <option value="">- Select -</option>
                    <option value="alpha">Option alpha</option>
                    <option value="beta">Option beta</option>
                    <option value="gamma">Option gamma</option>
                    <option value="delta">Option delta</option>
                    <option value="epsilon">Option epsilon</option>
                    <option value="zeta">Option zeta</option>
                    <option value="eta">Option eta</option>
                    <option value="theta">Option theta</option>
                  </select>
                </div>
                <!-- Break -->
                <div class="col-4 col-12-small">
                  <input type="radio" id="radio-alpha" name="radio" checked>
                  <label for="radio-alpha">Radio alpha</label>
                </div>
                <div class="col-4 col-12-small">
                  <input type="radio" id="radio-beta" name="radio">
                  <label for="radio-beta">Radio beta</label>
                </div>
                <div class="col-4 col-12-small">
                  <input type="radio" id="radio-gamma" name="radio">
                  <label for="radio-gamma">Radio gamma</label>
                </div>
                <!-- Break -->
                <div class="col-6 col-12-small">
                  <input type="checkbox" id="checkbox-alpha" name="checkbox">
                  <label for="checkbox-alpha">Checkbox alpha</label>
                </div>
                <div class="col-6 col-12-small">
                  <input type="checkbox" id="checkbox-beta" name="checkbox" checked>
                  <label for="checkbox-beta">Checkbox beta</label>
                </div>
                <!-- Break -->
                <div class="col-12">
                  <textarea name="textarea" id="textarea" placeholder="Alpha beta gamma delta" rows="6"></textarea>
                </div>
                <!-- Break -->
                <div class="col-12">
                  <ul class="actions">
                    <li><input type="submit" value="Submit Form" class="primary" /></li>
                    <li><input type="reset" value="Reset" /></li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>

<?php
  include "footer.php";
?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
