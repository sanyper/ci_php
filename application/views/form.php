<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Input Form</title>
</head>
<body>

<form action="<?=base_url('my_controller/insert');?>" method="post">
	<label for="name">Name: </label>
	<input type="text" name="Name" id="name"><br>
	<label for="surname">Surname: </label>
	<input type="text" name="Surname" id="surname"><br>
	<label for="email">Email: </label>
	<input type="text" name="Email" id="email"><br>
	<label for="phone">Phone: </label>
	<input type="text" name="Phone" id="phone"><br>
	<label for="country">Country: </label>
	<input type="text" name="Country" id="country"><br>
	<input type="submit">
	<input type="reset">
</form>

</body>
</html>
