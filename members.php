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
							<h2>Our Members</h2>
						</header>
						<h3>Performers</h3>
						<p>Summit Street A Cappella is comprised of students from a wide variety of fields of study who are all passionate about music and performance. Member auditions occur in the early weeks of each Fall Semester, and towards the end of the Winter Semester.</p>
						<h5>Tenor 1s:</h5>
						<div class="col-6 col-12-medium">
								<button type="button" onclick="location.href='member.php?id=6';">Zack</button>
								<button type="button" onclick="location.href='member.php?id=11';">Felix</button>
								<button type="button" onclick="location.href='member.php?id=15';">Cellach</button>
						</div><br/>
						<h5>Tenor 2s:</h5>
						<div class="col-6 col-12-medium">
								<button type="button" onclick="location.href='member.php?id=2';">David</button>
								<button type="button" onclick="location.href='member.php?id=4';">Anthony</button>
								<button type="button" onclick="location.href='member.php?id=12';">Austin</button>
							<!--
								<button type="button">Zack 2</button>
								<button type="button">Also Zack</button>
							-->
						</div><br/>
						<h5>Baritones:</h5>
						<div class="col-6 col-12-medium">
								<button type="button" onclick="location.href='member.php?id=1';">Parker</button>
								<button type="button" onclick="location.href='member.php?id=16';">Noah</button>
								<button type="button" onclick="location.href='member.php?id=13';">Isaiah</button>
							<!--
								<button type="button">?</button>
							-->
						</div><br/>
						<h5>Basses:</h5>
						<div class="col-6 col-12-medium">
								<button type="button" onclick="location.href='member.php?id=5';">Andrew</button>
								<button type="button" onclick="location.href='member.php?id=7';">Walter</button>
								<button type="button" onclick="location.href='member.php?id=14';">Joshua</button>
								<button type="button" onclick="location.href='member.php?id=3';">Trevor</button>
						</div><br/>
						<hr />
						<h3>Tech Team</h3>
						<p>Summit Street A Cappella is proud to be the first organization to offer students the opportunity to work with the group in a non-performance capacity. Our tech team works closely with the members of the group to produce a wide variety of media for promotion.</p>
						<!--
						<h5>Team Heads:</h5>
						<div class="col-6 col-12-medium">
								<button type="button" onclick="location.href='member.php?id=8';">Becky</button>
						</div>
						-->
						<h5>Team Members:</h5>
						<div class="col-6 col-12-medium">
								<button type="button" onclick="location.href='member.php?id=9';">Shelby</button>
								<button type="button" onclick="location.href='member.php?id=10';">Erin</button>
							<!--
								<button type="button">Also Zack</button>
							-->
						</div><br/>
						<hr />
						<h3>Alumni</h3>
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
								<button type="button" onclick="location.href='member.php?id=8';">Becky</button>
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
