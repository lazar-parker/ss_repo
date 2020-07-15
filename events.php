<?php
	include_once("header.php");
	include_once("styles.php");
?>

	</head>
	<body class="text-center">
		<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
			<?php
				$this_page = "Events";
				include_once("navbar.php");
			?>


	<iframe src="https://calendar.google.com/calendar/embed?src=emich.edu_0mqir81q5g0vuj6fb0oem60ea0%40group.calendar.google.com&ctz=America%2FNew_York" style="border: 0" width="600" height="450" align="middle" frameborder="0" scrolling="no"></iframe>


			<?php
				include_once("footer.php");
			?>
		</div>
	</body>
</html>
