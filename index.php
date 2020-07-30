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

	$names = DB::getMembers();
	$count = count($names);

	$random = rand(0, $count-1);

	$member = DB::getMemberByIndex($random);


	include "header.php";
?>

		<!-- COVID Banner Thing -->
			<section class="wrapper-thin" style="background-color:#e6de55;">
				<div class="inner">
					<header class="special" style="margin: 0.4rem 0 0.4rem 0;">
						<h2 style="margin: 0 0 0 0;"><a href="covid.php" style="color:#ce1b28;">OUR COVID-19 RESPONSE</a></h2>
					</header>
				</div>
			</section>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Summit Street</h1>
					<p>EMU's Premier TTBB A Cappella Organization</p>
				</div>
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>


		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>About Us</h2>
						<p>Comprised of students from a wide range of disciplines, Summit Street A Cappella is Eastern Michigan University's premier TTBB a cappella organization.</p>
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
									<a href="donate.php" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3>Donate</h3>
								</header>
								<p>Want to help us make our mark on music? Donate now!</p>
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
						<section>
							<div class="content">
								<header>
									<a href="coming_soon.php" class="icon fa-line-chart"><span class="label">Icon</span></a>
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
						</section>
					</div>
				</div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h2>Member Spotlight: <?= $member["member_name"] ?></h2>
					<p><?= $member["member_bio"] ?></p>
				</div>
			</section>

		<!-- Testimonials -->
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
