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
								<input type="image" name="Zack" src="images/members/zack.png" onclick="location.href='member.php?id=6';" />
								<input type="image" name="Felix" src="images/members/john.png" onclick="location.href='member.php?id=11';" />
								<input type="image" name="Cellach" src="images/members/cellach.png" onclick="location.href='member.php?id=15';" />
						</div><br/>
						<h5>Tenor 2s:</h5>
						<div class="col-6 col-12-medium">
								<input type="image" name="David" src="images/members/david.png" onclick="location.href='member.php?id=2';" />
								<input type="image" name="Anthony" src="images/members/anthony.png" onclick="location.href='member.php?id=4';" />
								<input type="image" name="Austin" src="images/members/austin.png" onclick="location.href='member.php?id=12';" />
							<!--
								<button type="button">Zack 2</button>
								<button type="button">Also Zack</button>
							-->
						</div><br/>
						<h5>Baritones:</h5>
						<div class="col-6 col-12-medium">
								<input type="image" name="Joshua" src="images/members/joshua.png" onclick="location.href='member.php?id=14';" />
								<input type="image" name="Noah" src="images/members/noah.png" onclick="location.href='member.php?id=16';" />
								<input type="image" name="Isaiah" src="images/members/isaiah.png" onclick="location.href='member.php?id=13';" />
							<!--
								<button type="button">?</button>
							-->
						</div><br/>
						<h5>Basses:</h5>
						<div class="col-6 col-12-medium">
								<input type="image" name="Parker" src="images/members/parker.png" onclick="location.href='member.php?id=1';" />
								<input type="image" name="Andrew" src="images/members/andrew.png" onclick="location.href='member.php?id=5';" />
								<input type="image" name="Walter" src="images/members/walter.png" onclick="location.href='member.php?id=7';" />
								<input type="image" name="Trevor" src="images/members/trevor.png" onclick="location.href='member.php?id=3';" />
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
						</div>
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
