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
            <p>Interested in getting in contact with Summit Street A Cappella? Fill out the form below, and one of our E-Board members will respond within 72 hours!</p>
            <h3><?= $alumni["alumni_voice"] ?></h3>
						<h4><?= $alumni["alumni_tenure"] ?></h4>
            <p><?= $alumni["alumni_bio"] ?></p>
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
