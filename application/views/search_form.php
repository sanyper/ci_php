<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Search Form</title>
</head>
<body>

<form action="<?=base_url('my_controller/search_result');?>" method="post">
	<label for="name">Name: </label>
	<input type="text" name="Name" id="name"><br>
	<label for="surname">Surname: </label>
	<input type="text" name="Surname" id="surname"><br>
	<input type="submit">
	<input type="reset">
</form>

</body>
</html>
