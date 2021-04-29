<?php
$title = "The Archer Adult";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Archer Adult</title>
	</head>
	<body>
		<header>
			<?php include "includes/header.php"; ?>
		</header>
		<h1><?php echo $title; ?></h1>
		<img src="images/archer.jpg" alt="Archer family" />
		<h2>Pre-1999 Births</h2>
			<p>John Norman Archer</p>
			<p>Sheila Archer</p>
			<p>Lauren Malone</p>
			<p>Grace Reed</p>
		<h2>2000-Future Births</h2>
			<p>Caroline Archer</p>
			<p>Will Archer</p>
			<p>Ella Archer</p>
		<footer>
			<?php include "includes/footer.php"; ?>
		</footer>
		<form action="mail.php" method="POST">
			<p>Name</p> <input type="text" name="name">
			<p>Email</p> <input type="text" name="email">
			<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
			<input type="submit" value="Send"><input type="reset" value="Clear">
		</form>
	</body>
</html>