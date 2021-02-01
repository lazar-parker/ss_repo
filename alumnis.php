<!DOCTYPE HTML>
<?php
	include "common_new.php";
	include "summit_sql.php";


	include "header.php";
?>

		<!-- Heading -->
			<div id="heading" >
				<h1>Members Page</h1>
			</div>

		<!-- Main -->
		<!-- FOR ALL SECTIONS, PLEASE ONLY HAVE A MAXIMUM OF FOUR (4) BUTTONS PER ROW -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Our Alumni</h2>
						</header>
						<p>Take a walk down memory lane and see all of the past members of Summit Street A Cappella that have helped make it into the organization it is today!</p>
						<h5>Class of 2020</h5>
						<div class="col-6 col-12-medium">
								<button type="button" onclick="location.href='alumni.php?id=1';">Alex</button>
								<button type="button" onclick="location.href='alumni.php?id=6';">Dominick</button>
								<button type="button" onclick="location.href='alumni.php?id=2';">Randal</button>
								<button type="button" onclick="location.href='alumni.php?id=3';">Rory</button>
								<button type="button" onclick="location.href='alumni.php?id=7';">Tailen</button>
								<button type="button" onclick="location.href='alumni.php?id=4';">Wade</button>
								<button type="button" onclick="location.href='alumni.php?id=5';">Xavier</button>
						</div><br/>
						<h5>Class of 2021</h5>
						<div class="col-6 col-12-medium">
								<button type="button" onclick="location.href='alumni.php?id=8';">Becky</button>
						</div>
						<!--
						<h5>Class of {year}</h5>
						<div class="col-6 col-12-medium">
								<button type="button">Alumni</button>
								<button type="button">Names</button>
								<button type="button">Go</button>
								<button type="button">Here</button>
						</div>
						-->
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
