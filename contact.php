<!DOCTYPE HTML>
<?php
  include "common_new.php";
  include "summit_sql.php";

  DB::open();

  $name;
  $mail;
  $message;

  DB::storeContact($name, $mail, $message);

  include "header.php";
?>
    <!-- Heading -->
      <div id="heading" >
        <h1><?= $alumni["alumni_name"] ?></h1>
      </div>

    <!-- Main -->
      <section id="main" class="wrapper">
        <div class="inner">
          <div class="content">
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
