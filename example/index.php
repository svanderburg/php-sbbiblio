<?php
error_reporting(E_STRICT | E_ALL);

require_once(dirname(__FILE__)."/../vendor/autoload.php");

/* Include the model (a collection publications) */
require_once("includes/publications.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Bibliography test</title>
		<script type="text/javascript" src="scripts/publications.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
		<h1>Bibliography test</h1>
		<p>
			[<a href="#" onclick="toggleAllBibTex();">Toggle all BibTex references</a>]
			[<a href="#" onclick="toggleAllAbstracts();">Toggle all abstracts</a>]
		</p>
		<ul>
			<?php
			foreach($publications as $publication)
				\SBBiblio\View\HTML\displayPublication($publication, dirname($_SERVER["PHP_SELF"])."/pdf");
			?>
		</ul>
	</body>
</html>
