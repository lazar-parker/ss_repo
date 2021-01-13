<!DOCTYPE HTML>
<?php
  include "common_new.php";
  include "summit_sql.php";

  DB::open();

  if($_POST["name"])
  {
    $name = $_POST["name"];
    $mail = $_POST["email"];
    $message = $_POST["message"];
    $result = DB::storeContact($name, $mail, $message);
    echo $result;
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
            <form method="post" action="">
              <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                  <input type="text" name="name" id="name" value="" placeholder="Name" />
                </div>
                <div class="col-6 col-12-xsmall">
                  <input type="email" name="email" id="email" value="" placeholder="Email" />
                </div>
                <!-- Break -->
                <div class="col-12">
                  <textarea name="message" id="message" placeholder="Enter your message here..." rows="6"></textarea>
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
  DB::close();
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
