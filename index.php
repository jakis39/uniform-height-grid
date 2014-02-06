<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="resp_grid.css" rel="stylesheet" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
	<div class="grid_1_of_3">
		<div class="example">
			<p>
				A responsive grid system which matches the heights of each box in a row to the biggest one, helping the grid look like an actual, orderly grid. Detects screens of different sizes using CSS media queries and the window.matchMedia function and scales the grid to fit accordingly. Check out the code to see how it works.<br /><br />The media queries can be played with to work at different screen widths, etc. I consider this a pretty simple and extensible javascript-aided solution for this specific problem. You can find this implementation in use on my personal website at <a href="http://jakenusca.com/blog">http://jakenusca.com/blog</a>
			</p>
		</div>
	</div>

	<?php
		$sampletext = array("Vivamus at mi ut est ultrices congue. Donec interdum nibh eu lorem accumsan, ut placerat urna ultrices. Aenean posuere purus nec tempor cursus. Suspendisse in dui vel sem eleifend convallis et non turpis. Pellentesque pretium lorem eros, et lacinia tortor ultrices a. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque porttitor turpis in sapien sodales egestas. Aenean luctus adipiscing risus id elementum.",
			"Nullam a elementum nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin leo urna, placerat.",
			"Suspendisse euismod convallis eros, ac commodo nibh. In hac habitasse platea dictumst. Vivamus in dolor non nunc feugiat posuere sit amet a ante. Nulla gravida aliquet condimentum. Praesent mollis neque velit, ac venenatis nibh viverra in.<br/><br/>Phasellus lacinia velit vestibulum elit scelerisque venenatis. Integer pulvinar justo in elit bibendum, quis blandit turpis blandit. Cras in risus lorem.",
			"Hello, yes, this is dog.",
			"Cras id scelerisque elit. Aenean euismod molestie diam, non tincidunt eros mollis at.",
			"Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam pellentesque pulvinar neque nec tristique. Vestibulum sed eros varius, fermentum elit nec, iaculis diam. Donec id consequat ante. Nullam aliquam purus ut tempor volutpat. Aenean ac enim at lorem congue porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.");

		for($i=0;$i<14;$i++)
		{
			$index = rand(0,5);
			echo '<div class="grid_1_of_3"><div class="example"><p>';
			echo $sampletext[$index];
			echo '</p></div></div>';
		}
	?>
</body>
</html>

<script src="resp.js" type="text/javascript"></script>