<?php 

	if(!isset($word)){
		$word = '';
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Randomizer</title>
	<style type="text/css">
	
	#container {
		text-align: center;
		font-family: futura;
	}

	h1 {
		margin: 0 auto;
		border: 1px solid pink;
		width: 400px;
		padding: 20px;
	}
	
	button {
		margin-top: 30px;
		width: 100px;
		height: 60px;
		background-color: pink;
		border: 2px solid black;
		font-family: futura;
		font-size: 14px;
	}

	form {
		width: 102px;
		display: inline-block;
		vertical-align: top;
		margin: 10px;
	}

	</style>	
</head>
<body>
	<div id="container">

	<p>Random Word (attempt # <?= $counter ?> )</p>

	<h1><?= $word ?></h1>
	<form action='/process/generate' method="post">
	<button type="submit" class="button" name="generate">GENERATE</button>	
	</form>
	<form action='/site/reset' method="post">
	<button type="submit" class="button" name="reset">RESET</button>	
	</form>
	</div>	
</body>
</html>