<!DOCTYPE HTML>
<!--
	Based on Industrious template by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
	include "common_new.php";
	include "summit_sql.php";

	DB::open();

	$indexes = DB::getMemberIndexes();
	$count = count($indexes);

	$random = rand(0, $count-1);

	$member = DB::getMemberByIndex($count[$random]);


	include "header.php";
?>

	<!-- The Modal -->
	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<p>Some text in the Modal..</p>
		</div>

	</div>

	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal
//		$(document).ready(function(){
//	  	modal.style.display = "block";
//		});

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
	  	modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
	  	if (event.target == modal) {
	    	modal.style.display = "none";
	  	}
		}

	</script>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Summit Street</h1>
					<p>EMU's Premier TTBB A Cappella Organization</p>
				</div>
				<!--<video autoplay loop muted playsinline src="images/banner.mp4"></video> -->
			</section>


		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>About Us</h2>
						<p>Comprised of students from a wide range of disciplines, Summit Street A Cappella is Eastern Michigan University's premier TTBB a cappella organization.
							Created in 2018, Summit Street began as an idea shared among three friends who wanted to expand what was available to vocalists on campus, as well as those who were interested in music production. From there, the organization has had many amazing opportunities, including performing in the official EMU Holiday video and competing in the 2021 ICCA competition.</p>
						<p>Are you an EMU student interested in auditioning for Summit Street? Fill out the interest form linked <a href="https://forms.gle/jaogDU6ggB8Npjwe6">here</a>!</p>
					</header>
					<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a href="members.php" class="icon fa-vcard-o"><span class="label">Icon</span></a>
									<h3>Our Members</h3>
								</header>
								<p>Learn about all of our members, both past and present!</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="support.php" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3>Support Us</h3>
								</header>
								<p>Want to help us make our mark on music?</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="media.php" class="icon fa-floppy-o"><span class="label">Icon</span></a>
									<h3>Media</h3>
								</header>
								<p>Watch videos of past performances and see photos from our events!</p>
							</div>
						</section>
						<!-- <section>
							<div class="content">
								<header>
									<a href="https://www.redbubble.com/people/SummitStreet/shop" target="_blank" class="icon fa-line-chart"><span class="label">Icon</span></a>
									<h3>Merch Store</h3>
								</header>
								<p>Want to show your Summit Street pride anywhere you go? Check out the store!</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="coming_soon.php" class="icon fa-paper-plane-o"><span class="label">Icon</span></a>
									<h3>Contact Us</h3>
								</header>
								<p>Have questions? Want to have us perform at your event? Get in touch now!</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="coming_soon.php" class="icon fa-qrcode"><span class="label">Icon</span></a>
									<h3>What's Next</h3>
								</header>
								<p>Take a look at what's next for Summit Street A Cappella!</p>
							</div>
						</section> -->
					</div>
				</div>
			</section>

		<!-- Member Spotlight -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h2>Member Spotlight: <?= $member["member_name"] ?></h2>
					<p><a onclick="location.href='member.php?id=<?= $member["member_index"] ?>';">Click here to learn more about them!</a></p>
				</div>
			</section>

		<!-- Sponsors -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Our Sponsors</h2>
						<p>As we work to make our mark on collegiate a cappella, we rely on our supporters to help us achieve that ambitious goal.
						Below, you'll find a list of people and organizations who have helped us get to where we are today, and for whom were are forever grateful.</p>
					</header>
					<!-- <div class="testimonials">
						<section>
							<div class="content">
								<blockquote>
									<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic01.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Jane Doe</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic03.jpg" alt="" />
									</div>
									<p class="credit">- <strong>John Doe</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic02.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Janet Smith</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
					</div> -->
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
