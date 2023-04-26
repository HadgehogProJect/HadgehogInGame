<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>become a member</title>
</head>
<?php require "header.php" ?>
<body>
	<div class="container mt-3">
	<h1>become a member</h1>
<form action="BecomeMember.php" method="post">
<input type="Email" name="email" placeholder="email" class="form-control"><br>
<input type="Name" name="name" placeholder="Name" class="form-control"><br>	
<textarea name="message" class="form-control" placeholder="Message"></textarea><br>
<button type="submit" name="send" class="btn btn-success">Send</button>
</form>
</div>
</body>
</html>