<head>
	<link rel="icon" href="/favicon.ico?">
</head>
		<link rel="canonical" href="www.summitstreet.org">

		<!-- Bootstrap core CSS -->
		<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Custom styles for this template -->
<?php
    if($style == "store") {
        echo "<link href='/styles/product.css' rel='stylesheet'>";
    }
    else {
        echo "<link href='/styles/cover.css' rel='stylesheet'>";
    }
?>
		<!-- Used solely for Valentine's Day Insert -->
<?php

		$day = getdate();

		if($day["mon"] == 2 && $day["mday"] == 14 && $style == "index")
		{
			echo "<link href='/styles/heart.css' rel='stylesheet'>";
		}
?>
		<!-- Custom fonts -->
		<link href="/styles/stylesheet.css" rel="stylesheet">
		<!-- Custom style modifications -->
		<link href="/styles/style.css" rel="stylesheet">
