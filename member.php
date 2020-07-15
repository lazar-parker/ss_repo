<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
  include "common_new.php";
  include "summit_sql.php";

  DB::open();

  if(!isset($_GET["id"]))
  {
    header("Location: index.php");
    die();
  }

  $member = DB::getMemberByIndex($_GET["id"]);

  if(!$member)
  {
    header("Location: index.php");
    die();
  }

  include "header.php";
?>
    <!-- Heading -->
      <div id="heading" >
        <h1><?= $member["member_name"] ?></h1>
      </div>

    <!-- Main -->
      <section id="main" class="wrapper">
        <div class="inner">
          <div class="content">
<!--            <?php if($member["member_board"] != NULL || strcasecmp($member["member_board"], "NULL") != 0){ echo "<h2>" . $member["member_board"] . "</h2>"; } ?> -->
            <h3><?= $member["member_voice"] ?></h3>
            <p><?= $member["member_bio"] ?></p>
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
