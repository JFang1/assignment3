<?php
  include 'ChildClass.php'
  $bestMeme = new ChildClass("pineapple", "apple", "doggo");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Assignment 3</title>
	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
  <h1>Assignment 3</h1>
  <section id="greatSection">
    <?= $bestMeme; ?>
  </section>
</body>
</html>
