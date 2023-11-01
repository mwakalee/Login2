<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOLIDAYS</title>
    <link rel="stylesheet" href="style.css">
	<!--<link href="normalize.css" rel="stylesheet">-->
</head>
<section class="showcase">
	<header>
	<h1> LOGIN FORM</h1>
	<h2>Save for your holidays!!</h2>
</header>
<video src="video (2160p).mp4" muted loop autoplay></video>
<div class="overlay"></div>
	<div class="content">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">	
			<div class="inputs">
				<label for="name">Name:</label><br>
				<input type="text" id="name" name="name"><br>
			</div>
			
			<div class="inputs">
				<label for="email">Email:</label><br>
				<input type="text" id="email" name="email"><br>
			</div>

			<div class="inputs">
				<label for="password">Password</label><br>
				<input type="password" id="password" name="password"><br>
			</div>
			
			
			<input type="submit" value="Login">
		</form>
	</div>
</section>
</html>
