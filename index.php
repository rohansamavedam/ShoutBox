<?php
	include 'database.php';
?>
<?php
	//create select query
	$query = "SELECT * FROM shouts ORDER BY id ASC";
	$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shoutbox</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<div id="container">
		<header>
			<h1>JS Shoutbox</h1>
		</header>
		<div id="shouts">
			<ul>
				<ul>
					<?php while($row = mysqli_fetch_assoc($shouts)) : ?>
						<li><?php echo $row['name']; ?>: <?php echo $row['shout']; ?> [<?php echo $row['date']; ?>]</li>
					<?php endwhile; ?>
				</ul>
			</ul>
		</div>
		<footer>
			<form>
				<label>Name:</label>
				<input type="text" id="name" name="">
				<label>Shout Text:</label>
				<input type="text" id="shout" name="">
				<input type="submit" id="submit" value="SHOUT!" name="">
			</form>
		</footer>
	</div>
</body>
</html>